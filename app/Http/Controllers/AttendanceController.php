<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Attendance;

class AttendanceController extends Controller
{

    public function getAttendance(){
        return Attendance::get();
    }

    public function getAttendanceById(Request $request){
        return Attendance::find($request->id);
    }

    public function getAttendanceDashboard(Request $request){
        //dd($request->dashboard_type);
        $today = Carbon::today();
        switch ($request->dashboard_type) {
            case "completed_this_year":
                $attendance = Attendance::where('status_id', '=', 3)
                    ->whereYear('finished_time', '=', $today->year)
                    ->get();
                //$message= $attendance->count() . ' Attended so far this year ' . $today->year;
                $attend_count = $attendance->count();
                //Json responses
               // return response()->json(['response' => 'success', 'comments' => $comments]);
                break;
            case "completed_this_month":
                $attendance = Attendance::where('status_id', '=', 3)
                    ->whereMonth('finished_time', '=', $today->month)
                    ->whereYear('finished_time', '=', $today->year)
                    ->get();
                $attend_count = $attendance->count();
                //$message= $attendance->count() . ' Attended so far this month ' . $today->month;
                break;
            case "completed_this_day":
                $attendance = Attendance::where('status_id', '=', 3)
                    ->whereDate('finished_time', '=', $today)
                    ->get();
                $attend_count = $attendance->count();
                //$message= $attendance->count() . ' Attended so far this day ' . $today;
            break;
            default:
            $attend_count = 0;
        }
        return response()->json(['attend_count' => $attend_count]);
    }

    public function getAttendanceRegistered(){
        return Attendance::where('status_id', '=', 1)->get();
    }

    public function getAttendanceAttending(){
        return Attendance::where('status_id', '=', 2)->get();
    }

}

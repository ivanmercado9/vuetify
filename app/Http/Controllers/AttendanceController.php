<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;

class AttendanceController extends Controller
{
    public function getAttendance(){
        return Attendance::get();
    }

    public function getAttendanceById(Request $request){
        return Attendance::find($request->id);
    }
}

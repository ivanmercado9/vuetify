<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // The first part consist of the primary or parent services
      DB::table('services')->insert([
        'title' => 'Servicios Generales',
        'description' => 'Servicios Generales Parent',
        'minutes_to_complete' => 0,
        'parent_service_id' => 0,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Orientacion',
        'description' => 'Orientacion Parent',
        'minutes_to_complete' => 0,
        'parent_service_id' => 0,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Apertura de Cuentas',
        'description' => 'Apertura de Cuentas Parent',
        'minutes_to_complete' => 0,
        'parent_service_id' => 0,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Cartas',
        'description' => 'Cartas Parent',
        'minutes_to_complete' => 0,
        'parent_service_id' => 0,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Desembolsos',
        'description' => 'Desembolsos Parent',
        'minutes_to_complete' => 0,
        'parent_service_id' => 0,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Reclamaciones',
        'description' => 'Reclamaciones Parent',
        'minutes_to_complete' => 0,
        'parent_service_id' => 0,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Cancelaciones',
        'description' => 'Cancelaciones Parent',
        'minutes_to_complete' => 0,
        'parent_service_id' => 0,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      // The 2nd part consist of the child services
      DB::table('services')->insert([
        'title' => 'Nueva Tarjeta',
        'description' => 'Nueva Tarjeta Child',
        'minutes_to_complete' => 10,
        'parent_service_id' => 1,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Remplazo de Tarjeta',
        'description' => 'Remplazo de Tarjeta Child',
        'minutes_to_complete' => 10,
        'parent_service_id' => 1,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Apertura de Cuenta',
        'description' => 'Apertura de Cuenta Child',
        'minutes_to_complete' => 15,
        'parent_service_id' => 2,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Orientacion Prestamo de Auto',
        'description' => 'Orientacion Prestamo de Auto Child',
        'minutes_to_complete' => 15,
        'parent_service_id' => 2,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Orientacion Prestamo Personal',
        'description' => 'Orientacion Prestamo Personal Child',
        'minutes_to_complete' => 15,
        'parent_service_id' => 2,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Apertura Cuenta de Ahorros',
        'description' => 'Apertura Cuenta de Ahorros Child',
        'minutes_to_complete' => 15,
        'parent_service_id' => 3,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Apertura Cuenta de Cheques',
        'description' => 'Apertura Cuenta de Cheques Child',
        'minutes_to_complete' => 15,
        'parent_service_id' => 3,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Carta Verificacion de Cuenta',
        'description' => 'Carta Verificacion de Cuenta Child',
        'minutes_to_complete' => 5,
        'parent_service_id' => 4,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Carta Balance de Saldo',
        'description' => 'Carta Balance de Saldo Child',
        'minutes_to_complete' => 5,
        'parent_service_id' => 4,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Desembolso Prestamo de Auto',
        'description' => 'Desembolso Prestamo de Auto Child',
        'minutes_to_complete' => 10,
        'parent_service_id' => 5,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Desembolso Prestamo Personal',
        'description' => 'Desembolso Prestamo Personal Child',
        'minutes_to_complete' => 10,
        'parent_service_id' => 5,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Reclamar Transaccion Duplicada',
        'description' => 'Reclamar Transaccion Duplicada Child',
        'minutes_to_complete' => 10,
        'parent_service_id' => 6,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Reclamar Tarjeta Hurtada o Extraviada',
        'description' => 'Reclamar Tarjeta Hurtada o Extraviada Child',
        'minutes_to_complete' => 10,
        'parent_service_id' => 6,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Cancelacion de Cuenta',
        'description' => 'Cancelacion de Cuenta Child',
        'minutes_to_complete' => 15,
        'parent_service_id' => 7,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
      DB::table('services')->insert([
        'title' => 'Cancelacion de Tarjeta',
        'description' => 'Cancelacion de Tarjeta Child',
        'minutes_to_complete' => 15,
        'parent_service_id' => 7,
        'departments_id' => '1',
        'created_at'=> \Carbon\Carbon::now(),
        'updated_at'=> \Carbon\Carbon::now(),
      ]);
    }
}

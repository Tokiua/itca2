<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre' => 'kevin pineda',
            'edad' => '22',
            'categoria' => 1,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'josue pineda',
            'edad' => '33',
            'categoria' => 2,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'josue Perez',
            'edad' => '45',
            'categoria' => 3,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'Estefani',
            'edad' => '15',
            'categoria' => 4,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'pineda',
            'edad' => '48',
            'categoria' => 5,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'ernesto',
            'edad' => '18',
            'categoria' => 6,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'juan',
            'edad' => '13',
            'categoria' => 7,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'julio',
            'edad' => '20',
            'categoria' => 8,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'mari',
            'edad' => '21',
            'categoria' => 9,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'brenda',
            'edad' => '58',
            'categoria' => 10,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'sharon',
            'edad' => '35',
            'categoria' => 11,
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'michell',
            'edad' => '36',
            'categoria' => 12,
            'created_at' => Carbon::now()
        ]);
        // Insertamos la data en la tabla clientes
        DB::table('clientes')->insert($data);
    }
}

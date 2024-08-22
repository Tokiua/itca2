<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array([
            'nombre' => 'bronce',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'oro',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'premion',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'palo',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'gratis',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'paratodos',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'familiar',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'parejas',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'grupos',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'extensible',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'privado',
            'created_at' => Carbon::now()
        ], [
            'nombre' => 'publico',
            'created_at' => Carbon::now()
        ]);
        // Insertamos la data en la tabla categorias
        DB::table('categorias')->insert($data);
    }
}

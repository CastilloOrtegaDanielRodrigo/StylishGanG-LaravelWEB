<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Daniel Rodrigo',
            'email' => 'al222111432@gmail.com',
        ]);
        $this->call([
            CategoriaSeeder::class,
            ProveedorSeeder::class,
            MarcaSeeder::class,
            ProductosSeeder::class,

        ]);
        
    }
}

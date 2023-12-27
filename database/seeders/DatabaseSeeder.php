<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        #Creacion de un usuario administrador
        User::factory()->create([
            'name' => 'Claudio',
            'email' => 'admin@app.com'
        ]);

        #Creacion de 9 usuarios
        User::factory(9)->create();

        Note::factory(30)->create();
    }
}

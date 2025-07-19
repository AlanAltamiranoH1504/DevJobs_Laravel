<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name" => "Alan Altamirano Hernandez",
            "email" => "alan@gmail.com",
            "email_verified_at" => now(),
            "password" => Hash::make("2021602569"),
            "remember_token" => null,
            "created_at" => now(),
            "updated_at" => now(),
            "rol" => 1
        ]);
    }
}

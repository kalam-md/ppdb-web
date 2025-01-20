<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "nik" => "313131",
                "nama_lengkap" => "Admin SDN Balekambang 01",
                "username" => "adminsd",
                "role" => "guru",
                "password" => Hash::make("12345678"),
            ],
            [
                "nik" => "121212",
                "nama_lengkap" => "Rafi Ramadhan",
                "username" => "rafir",
                "role" => "orang_tua",
                "password" => Hash::make("12345678"),
            ],
            [
                "nik" => "131314",
                "nama_lengkap" => "Siti Nurhaliza",
                "username" => "sitin",
                "role" => "orang_tua",
                "password" => Hash::make("12345678"),
            ],
        ];


        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }

        User::insert($user);
    }
}

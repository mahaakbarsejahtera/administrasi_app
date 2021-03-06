<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // 1
            [
                'name' => 'Egi',
                'email' => 'egi@mahasejahtera.com',
                'level_id' => 1,
                'division_id' => 1,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/Egi.jpg',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('banggi361'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 2
            [
                'name' => 'Administrator',
                'email' => 'admin@mahasejahtera.com',
                'level_id' => 1,
                'division_id' => 1,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('admin'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 3
            [
                'name' => 'Guest',
                'email' => 'guest@mahasejahtera.com',
                'level_id' => 4,
                'division_id' => 1,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 4
            [
                'name' => 'Fahrul Rizal',
                'email' => 'rizal@mahasejahtera.com',
                'level_id' => 2,
                'division_id' => 3,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/Rizal.jpg',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 5
            [
                'name' => 'Hazri',
                'email' => 'hazri@mahasejahtera.com',
                'level_id' => 2,
                'division_id' => 2,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/Hazri.jpg',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 6
            [
                'name' => 'Krisyanto',
                'email' => 'kris@mahasejahtera.com',
                'level_id' => 2,
                'division_id' => 4,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/Kriss.jpg',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 7
            [
                'name' => 'Natanael',
                'email' => 'nael@mahasejahtera.com',
                'level_id' => 3,
                'division_id' => 1,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/Nael.jpg',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 8
            [
                'name' => 'Dodo',
                'email' => 'dodo@mahasejahtera.com',
                'level_id' => 4,
                'division_id' => 2,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/Dodo.jpg',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 9
            [
                'name' => 'Ibnu',
                'email' => 'ibnu@mahasejahtera.com',
                'level_id' => 4,
                'division_id' => 3,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 10
            [
                'name' => 'Layla',
                'email' => 'lala@mahasejahtera.com',
                'level_id' => 4,
                'division_id' => 4,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/Lala.jpg',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 10
            [
                'name' => 'Putera',
                'email' => 'putera@mahasejahtera.com',
                'level_id' => 4,
                'division_id' => 3,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 11
            [
                'name' => 'Sabda',
                'email' => 'sabda@mahasejahtera.com',
                'level_id' => 4,
                'division_id' => 3,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 12
            [
                'name' => 'Dimas',
                'email' => 'dimas@mahasejahtera.com',
                'level_id' => 4,
                'division_id' => 3,
                'image' => 'uploads/users/default.png',
                'signature' => 'uploads/users/signature/default.png',
                'phone' => "061 09839434",
                'address' => 'PT. Maha Akbar Sejahtera',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'),
                'remember_token' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

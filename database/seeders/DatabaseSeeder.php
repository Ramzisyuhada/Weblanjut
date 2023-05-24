<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\item;
use App\Models\User;
use App\Models\harga;
use App\Models\kategori;
use App\Models\layanan;
use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
             'name' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => Hash::make('1234'),
             'role' => '1',
        ]);
        harga::create([
            'id' => 1, 'harga' => 5000, 'created_at' => now(), 'updated_at' => now()
        ]);
        item::insert([
            ['id' => 1, 'name' => 'Selimut', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Baju', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Celana', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Jaket', 'created_at' => now(), 'updated_at' => now()],
        ]);
        Status::insert([
            ['id' => 1, 'name' => 'Dicuci', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Proses', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Selesai', 'created_at' => now(), 'updated_at' => now()],
        ]);
        kategori::insert([
            ['id' => 1, 'name' => 'Katun', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Fanel', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Kulit', 'created_at' => now(), 'updated_at' => now()],
        ]);
        layanan::insert([
            ['id' => 1, 'name' => 'VVIP', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'VIP', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Reguler', 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}

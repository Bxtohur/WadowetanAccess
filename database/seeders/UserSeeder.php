<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operator = User::create([
            'name' => 'Operator Desa',
            'email' => 'operator@gmail.com',
            'password' => bcrypt('desawado1234')
        ]);

        $operator->assignRole('admin');
    }
}

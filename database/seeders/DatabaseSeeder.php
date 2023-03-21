<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
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
        // User::factory(10)->create();

        User::create([
            'name' => 'User 1',
            'email' => 'user1@gmail.com',
            'role' => 'User',
            'password' => Hash::make('1234567')
        ]);

        User::create([
            'name' => 'Gardener 1',
            'email' => 'gardener1@gmail.com',
            'role' => 'Gardener',
            'password' => Hash::make('1234567')
        ]);

        User::create([
            'name' => 'Designer 1',
            'email' => 'designer1@gmail.com',
            'role' => 'Designer',
            'password' => Hash::make('1234567')
        ]);

        Project::create([
            'nama_projek' => 'Garden 1',
            'keterangan' => 'kurang material',
            'status' => 'Belum Selesai'
        ]);
    }
}

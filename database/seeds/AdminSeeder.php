<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->create(
            [
                'Username' => 'Admin',
                'Email' => 'admin@example.com',
                'Password' => 'admin@example.com',
            ]
        );
    }
}

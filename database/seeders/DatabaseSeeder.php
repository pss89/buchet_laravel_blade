<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CrudModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // 1) users 더미 데이터 10개
        // User::factory(10)->create();

        // // 2) crud_info 더미 데이터 50개
        // CrudModel::factory(50)->create();

        $this->call([
            UserTableSeeder::class,
            CrudInfoSeeder::class,
        ]);
    }
}

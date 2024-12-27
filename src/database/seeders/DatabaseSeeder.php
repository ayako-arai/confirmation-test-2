<?php

namespace Database\Seeders;

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
        // User::factory(10)->create();

    $test = ProductsTableSeeder::factory()->create([
        'name' => 'Test User',
        'email' => 'test@example.com',
    ]);
    \App\Models\Article::factory(20)->create();

        /**
         * callメソッドでシーダを指定することで、そのシーダーファイルのシーディング処理が実行される
         */
        $this->call([
            ProductsTableSeeder::class,
            SeasonsTableSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();
    }
}

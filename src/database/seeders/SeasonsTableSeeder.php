<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons = [
            "春",
            "夏",
            "秋",
            "冬"
        ];

        /**
         * 以下は、seasonsテーブルに$seasonsのデータを挿入するという命令文。
         */
        DB::table('seasons')->insert($seasons);
    }
}

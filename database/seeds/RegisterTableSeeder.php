<?php

use Illuminate\Database\Seeder;

class RegisterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('registers')->insert([
        'user_name' => '名無し 太郎',
        'user_tel' => '000-1010-1010',
        'register_date'=>'2019年01月1日',
        'register_time' => '午前13時',
      ]);
      DB::table('registers')->insert([
        'user_name' => '名無し 花子',
        'user_tel' => '000-1010-1010',
        'register_date'=>'2019年01月1日',
        'register_time' => '午前16時',
      ]);
      DB::table('registers')->insert([
        'user_name' => '名無し こうじ',
        'user_tel' => '000-1010-1010',
        'register_date'=>'2019年01月1日',
        'register_time' => '午前19時',
      ]);
      DB::table('registers')->insert([
        'user_name' => '武田 太郎',
        'user_tel' => '000-1010-1010',
        'register_date'=>'2019年01月1日',
        'register_time' => '午前9時',
      ]);
    }
}

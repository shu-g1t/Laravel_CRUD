<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->insert([
          'staff_id' => '1111111',
          'password' => bcrypt('password'),
          'staff_name' => 'テスト　太郎',
        ]);
    }
}

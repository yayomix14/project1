<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);

        DB::table('usuarios')->insert(['username'=>'root','tipo'=>'admin','password'=>bcrypt('root')]);
    }
}

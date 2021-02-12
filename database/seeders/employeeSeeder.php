<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee')->insert([
        	'title'=>'This is title',
        	'body'=>'this is body'

        ]);

    }
}

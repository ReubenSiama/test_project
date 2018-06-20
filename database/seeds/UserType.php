<?php

use Illuminate\Database\Seeder;

class UserType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->delete();
        $user_types = ['Agent','Client'];
        foreach($user_types as $type){
        	$data[] = [
        		'type' =>	$type
        	];
        }
        DB::table('user_types')->insert($data);
    }
}

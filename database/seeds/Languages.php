<?php

use Illuminate\Database\Seeder;

class Languages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();
        $languages = ['English','Spanish','Hindi','Mizo','German'];
        foreach($languages as $language){
        	$data[] = [
        		'language' =>	$language
        	];
        }
        DB::table('languages')->insert($data);
    }
}

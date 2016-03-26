<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert(
    		array(
        		'place' => 'Ash Ketchum',
        		'pincode' => 10234234,
        		'bed' => 4,
        		'square_feet' =>3232,
        		'price' =>232232
        		)
    	);
    }
}

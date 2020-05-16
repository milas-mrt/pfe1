<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   	
   	public function run()
	{
    	factory(App\Menu::class, 10)->create();
    	 $this->call(MenuSeeder::class);
    }
}


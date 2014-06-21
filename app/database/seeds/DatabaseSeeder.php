<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('CmsSeeder');
                 $this->command->info('Finished Seeding CMS');
	}

}


class CmsSeeder extends Seeder {
    
    public function run() {
        
        
        DB::table('users')->delete();
        DB::table('pages')->delete();
        
        $sooW = User::create(array(
            'firstname' => 'Soo',
            'lastname' => 'Woo',
            'email' => 'soohwoo@gmail.com',
            'password' => 'soo123'
        ));
        
        $peterP = User::create(array(
            'firstname' => 'Peter',
            'lastname' => 'Piekarczyk',
            'email' => 'peterpiekarczyk@gmail.com',
            'password' => 'peter123'
        ));
        
        $mattL = User::create(array(
            'firstname' => 'Matt',
            'lastname' => 'Lo',
            'email' => 'mattlo.developer@gmail.com',
            'password' => 'matt123'
        ));
    }
}
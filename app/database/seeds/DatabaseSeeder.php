<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        $this->call('CmsSeeder');
        $this->command->info('Finished Seeding CMS');
    }

}

class userSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();

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

        $this->command->info("Users seeded");
    }

}

class pageSeeder extends Seeder {

    public function run() {
        DB::table('pages')->delete();
    }

}

class websiteSeeder extends Seeder {

    public function run() {
        DB::table('websites')->delete();
        DB::table('user_website')->delete();

        Website::create(array(
            'name' => 'Hubbard Inn',
            'webaddress' => 'hubbardinn.com'
        ));

        Website::create(array(
            'name' => 'Clybourn',
            'webaddress' => 'clybourn.com'
        ));

        Website::create(array(
            'name' => 'Clybourn',
            'webaddress' => 'redlion.com'
        ));

        Website::create(array(
            'name' => 'firehaus',
            'webaddress' => 'firehaus.com'
        ));

        $this->command->info("Websites seeded");
    }

}

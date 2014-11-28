<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){
		Eloquent::unguard();
		//Users Table
		$this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        //Users Table
		$this->call('LogTableSeeder');
        $this->command->info('Log table seeded!');

        //Modulation
		$this->call('ModulationTableSeeder');
        $this->command->info('Modulation table seeded!');
	}

}

class UserTableSeeder extends Seeder{
    public function run() {
        DB::table('users')->delete();
        User::create(array(
            'email'    => '662307@gmail.com',
            'password' => Hash::make('la136dop'),
            'username' => 'UC6KFQ',
            'remember_token' => ''
        ));
    }
}

class LogTableSeeder extends Seeder{
    public function run() {
        DB::table('logs')->delete();
        $logs = array(
        	array(
	            'user_id'		=>	1,
	            'callsign'		=>	'R6KAA',
	            'frequency_rx'	=>	'145.500',
	            'frequency_tx'	=>	'',
	            'signal'		=>	'59',
	            'modulation'	=>	1,
	            'date'			=>	'2014-11-27 13:15:00'
        	),
        );
        DB::table('logs')->insert($logs);
    }
}

class ModulationTableSeeder extends Seeder{
    public function run() {
        DB::table('modulation')->delete();
        $modulation = array(
        	array(
            	'id'			=>	1,
            	'modulation'	=>	'FM',
        	),
        	array(
            	'id'			=>	2,
            	'modulation'	=>	'SSB',
        	),
        	array(
            	'id'			=>	3,
            	'modulation'	=>	'CW',
        	),
        	array(
            	'id'			=>	4,
            	'modulation'	=>	'PSK',
        	),
        	array(
            	'id'			=>	5,
            	'modulation'	=>	'AM',
        	),
        );
        DB::table('modulation')->insert($modulation);
    }
}



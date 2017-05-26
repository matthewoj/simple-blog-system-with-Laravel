<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $len = rand(10,100);
        echo 'creating: ' . $len . ' users...' . PHP_EOL; 
        for( $i = 0; $i < $len; $i++ ) {
            User::insert([
                'name' => str_random( 10 ),
                'password' => sha1( str_random( 6 ) ),
                'email' => str_random( 10 ) . '@test.com',
            ]);
        }
    }
}

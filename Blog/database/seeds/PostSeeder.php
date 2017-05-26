<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use Carbon\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo 'creating posts for each user...' . PHP_EOL;
        $users = User::all();
        $users->each(function($user, $key) {
            $len = rand(1,10);
            echo 'creating: ' . $len . ' posts for user: ' . $user->id . PHP_EOL;
            
            for( $i = 0; $i < $len; $i++ ) {
                Post::insert([
                    'user_id' => $user->id,
                    'active' => true,
                    'title' => str_random( 10 ),
                    'body' => str_random( 100 ),
                    'published_at' => Carbon::now()
                ]);
            }
        });
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Link;
use APp\Models\Poll;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $polls = Poll::all();

        foreach ($polls as $poll) {
            Link::create([
                'link_admin' => false,
                'poll_id' => $poll->id,
                'token' => Str::random(16),
            ]);
            Link::create([
                'link_admin' => true,
                'poll_id' => $poll->id,
                'token' => Str::random(16),
            ]);  
        }
    }
}

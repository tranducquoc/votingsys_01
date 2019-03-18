<?php

use Illuminate\Database\Seeder;
use App\Models\Poll;

class PollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Poll::class, 6)->create();
    }
}

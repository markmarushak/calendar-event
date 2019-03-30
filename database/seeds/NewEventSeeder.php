<?php

use Illuminate\Database\Seeder;

class NewEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entity\NewEvent::class, 10)->create();

    }
}

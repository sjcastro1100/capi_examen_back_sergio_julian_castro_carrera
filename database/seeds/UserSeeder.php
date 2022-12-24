<?php

use Illuminate\Database\Seeder;
use App\UserDomicilio;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\UserDomicilio::class,100)->create();
    }
}

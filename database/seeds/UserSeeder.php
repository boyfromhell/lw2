<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bob Fix',
            'email' => 'bobfix@gmail.com',
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'password' => Hash::make(env('USER1')),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        User::create([
            'name' => 'Evonne Fix',
            'email' => 'evonne.fix@chsinc.com',
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'password' => Hash::make(env('USER2')),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
    }
}

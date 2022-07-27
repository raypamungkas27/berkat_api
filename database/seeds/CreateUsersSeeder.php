<?php

use App\User_api;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Aptikom_kaltim',
                'token' => bcrypt('aptikom_kaltim'),
            ],
        ];
        foreach ($user as $key => $value) {
            User_api::create($value);
        }
    }
}

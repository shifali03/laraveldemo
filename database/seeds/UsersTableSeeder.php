<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[];
        $faker = Factory::create();
        for($i=0; $i<10; $i++){
            $date = date('y-m-d h:i:s', strtotime("2018-08-09 00:00:00 +{$i} days"));
            $users[] = [
                name=> $faker->name,
                email=> $faker->email,
                password=> bcrypt(12345),
                created_at=> $date,
                updated_at=> $date
            ];
        }
        DB::table('users')->insert($users);
    }
}

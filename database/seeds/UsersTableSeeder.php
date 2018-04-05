<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Carlos',
            'lastname' => 'Anselmi',
            'phone' => '0414-1036041',
            'email' => 'carlosanselmi3@hotmail.com',
            'description' => 'Programador web | front-end & Back-end',
            'ci' => '19890710',
            'password' => bcrypt('19901020')
        ]);

        factory(App\User::class, 10)->create()->each(function($user){
            factory(App\Models\Address::class)->create(['user_id' => $user->id]);
            factory(App\Models\Bank_account::class)->create(['user_id' => $user->id]);
        });
    }
}

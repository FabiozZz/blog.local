<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'email' => 'master@g.g',
                'password' => bcrypt('admin')
            ]
        ];
        DB::table('users')->insert($data);
        User::factory()->count(4)->create();
        //
    }
}

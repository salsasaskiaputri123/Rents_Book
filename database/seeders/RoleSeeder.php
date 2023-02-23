<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Hash;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin', 'client'
        // ];

        // foreach($data as $value)
        // {
        //     Role::insert([
        //         'name' => $value
        //     ]);
        // }

        DB::table('users')->insert([
            [
                'name' => 'salsa',
                'email' => 'salsa@gmail.com',
                'password' => Hash::make('salsa123'),
                'no_hp' => '085888859369',
                'address' => 'bogor',
                'role_id' => 1
            ],
            [
                'name' => 'caca',
                'email' => 'caca@gmail.com',
                'password' => Hash::make('caca123'),
                'no_hp' => '085888859369',
                'address' => 'cicurug',
                'role_id' => 2
            ]
        ]);
        
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addCmsRoles();
        $this->addCmsUsers();
    }

    public function addCmsRoles()
    {
       \DB::table('user_groups')->insert([
            [
                'title'          => 'Super Admin',
                'slug'           => Str::slug('Super Admin'),
                'type'           => 'admin',
                'is_super_admin' => '1',
                'created_at'     => Carbon::now()
            ],[
                'title' => 'App User',
                'slug'  => 'app-user',
                'type'          => 'user',
                'is_super_admin'=> '0',
                'created_at' => Carbon::now()
            ]
        ]);
    }

    public function addCmsUsers()
    {
       \DB::table('users')->insert([
            [
                'user_group_id'       => '2',
                'user_type'           => 'user',
                'name'                => 'Herry',
                'username'            => 'herry',                
                'slug'                => Str::slug('herry'),
                'email'               => 'herry@yopmail.com',
                'mobile_no'           => '+1-1231234123',
                'password'            => Hash::make('Admin@123'),
                'created_at'          => Carbon::now()
            ],
            [
                'user_group_id'       => '2',
                'user_type'           => 'user',
                'name'                => 'Potter',
                'username'            => 'potter',                
                'slug'                => Str::slug('potter'),
                'email'               => 'potter@yopmail.com',
                'mobile_no'           => '+1-1231234623',
                'password'            => Hash::make('Admin@123'),
                'created_at'          => Carbon::now()
            ],
            [
                'user_group_id'       => '2',
                'user_type'           => 'user',
                'name'                => 'Alex',
                'username'            => 'alex',                
                'slug'                => Str::slug('alex'),
                'email'               => 'alex@yopmail.com',
                'mobile_no'           => '+1-1221234123',
                'password'            => Hash::make('Admin@123'),
                'created_at'          => Carbon::now()
            ],
            [
                'user_group_id'       => '2',
                'user_type'           => 'user',
                'name'                => 'Malina',
                'username'            => 'malina',                
                'slug'                => Str::slug('malina'),
                'email'               => 'malina@yopmail.com',
                'mobile_no'           => '+1-1234234123',
                'password'            => Hash::make('Admin@123'),
                'created_at'          => Carbon::now()
            ]
        ]);
    }
}

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
        $this->addCmsUser();
        $this->addCmsModules();
        $this->addApplicationSettings();
        $this->cms_widget();
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

    public function addCmsUser()
    {
        $role = \DB::table('user_groups')->where('title','Super Admin')->first();
        \DB::table('users')->insert([
            'user_group_id' => $role->id,
            'user_type'   => 'admin',
            'name'        => 'RetroCube',
            'username'    => 'retrocube',
            'slug'        => 'retrocube',
            'email'       => 'admin@retrocube.com',
            'mobile_no'   => '1-8882051816',
            'password'    => Hash::make('admin@123$'),
            'platform_type' => 'custom',
            'is_email_verify' => '1',
            'email_verify_at' => Carbon::now(),
            'is_mobile_verify' => '1',
            'mobile_verify_at' => Carbon::now(),
            'created_at'  => Carbon::now(),
        ]);
    }

    public function addCmsModules()
    {
        $data = [
            [
                'parent_id'    => 0,
                'name'         => 'Cms Roles Management',
                'route_name'   => 'cms-roles-management.index',
                'icon'         => 'fa fa-key',
                'status'       => '1',
                'sort_order'   => 1,
                'created_at'   => Carbon::now()
            ],
            [
                'parent_id'    => 0,
                'name'         => 'Cms Users Management',
                'route_name'   => 'cms-users-management.index',
                'icon'         => 'fa fa-users',
                'status'       => '1',
                'sort_order'   => 2,
                'created_at'   => Carbon::now()
            ],
            [
                'parent_id'    => 0,
                'name'         => 'Application Setting',
                'route_name'   => 'admin.application-setting',
                'icon'         => 'fa fa-cog',
                'status'       => '1',
                'sort_order'   => 3,
                'created_at'   => Carbon::now()
            ],
            [
                'parent_id'    => 0,
                'name'         => 'Users Management',
                'route_name'   => 'app-users.index',
                'icon'         => 'fa fa-users',
                'status'       => '1',
                'sort_order'   => 4,
                'created_at'   => Carbon::now()
            ],[
                'parent_id'    => 0,
                'name'         => 'Content Management',
                'route_name'   => 'content-management.index',
                'icon'         => 'fa fa-tasks',
                'status'       => '1',
                'sort_order'   => 5.0,
                'created_at'   => Carbon::now()
            ],[
                'parent_id'    => 0,
                'name'         => 'FAQ`s',
                'route_name'   => 'faq.index',
                'icon'         => 'fa fa-question-circle-o',
                'status'       => '1',
                'sort_order'   => 6.0,
                'created_at'   => Carbon::now()
            ]
        ];
        \DB::table('cms_modules')->insert($data);
    }


    public function addApplicationSettings()
    {
        $data = [
            [
                'identifier' => 'application_setting',
                'meta_key' => "favicon",
                'value' => uploadMediaByPath('app_setting',public_path('images/favicon.png')),
                'is_file' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'identifier' => 'application_setting',
                'meta_key' => "logo",
                'value' => uploadMediaByPath('app_setting',public_path('images/logo.jpg')),
                'is_file' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'identifier' => 'application_setting',
                'meta_key' => "application_name",
                'value' => 'RetroCube',
                'is_file' => 0,
                'created_at' => Carbon::now()
            ]
        ];
        \DB::table('application_setting')->insert($data);
    }

    public function cms_widget()
    {
        \DB::table('cms_widgets')
            ->insert([
                [
                    'title'            => 'Total User',
                    'slug'              => time(). uniqid(),
                    'description'      => NULL,
                    'icon'             => 'icon-user',
                    'color'            => '#4b71fa',
                    'div_column_class' => 'col-md-3',
                    'link'             => '/admin/app-users',
                    'widget_type'      => 'small_box',
                    'sql'              => 'Select count(*) from users limit 1',
                    'config'           => NULL,
                ],
                [
                    'title'       => 'Total Roles',
                    'slug'              => time(). uniqid(),
                    'description' => NULL,
                    'icon'        => 'icon-people',
                    'color'            => '#7bcb4d',
                    'div_column_class' => 'col-md-3',
                    'link'             => '/admin/app-users',
                    'widget_type'      => 'small_box',
                    'sql'              => 'Select count(*) from users limit 1',
                    'config'           => NULL,
                ],
                [
                    'title'       => 'Total User',
                    'slug'              => time(). uniqid(),
                    'description' => NULL,
                    'icon'        => 'icon-user',
                    'color'            => '#4b71fa',
                    'div_column_class' => 'col-md-3',
                    'link'             => '/admin/app-users',
                    'widget_type'      => 'small_box',
                    'sql'              => 'Select count(*) from users limit 1',
                    'config'           => NULL,
                ],
                [
                    'title'       => 'Total Roles',
                    'slug'              => time(). uniqid(),
                    'description' => NULL,
                    'icon'        => 'icon-people',
                    'color'            => '#7bcb4d ',
                    'div_column_class' => 'col-md-3',
                    'link'             => '/admin/app-users',
                    'widget_type'      => 'small_box',
                    'sql'              => 'Select count(*) from users limit 1',
                    'config'           => NULL,
                ],
                [
                    'title'       => 'Users',
                    'slug'              => time(). uniqid(),
                    'description' => NULL,
                    'icon'        => 'icon-user',
                    'color'            => '#fff',
                    'div_column_class' => 'col-md-12',
                    'link'             => '/admin/app-users',
                    'widget_type'      => 'line_chart',
                    'sql'              => 'SELECT count(id) AS value, MONTHNAME(created_at) as label FROM users where YEAR(created_at) = YEAR(now()) group by MONTH(created_at) order by MONTH(created_at) asc',
                    'config'           => NULL,
                ]
            ]);

    }
}

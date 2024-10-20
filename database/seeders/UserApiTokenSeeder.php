<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\UserApiToken;

class UserApiTokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $api_token1  = UserApiToken::generateApiToken('1','127.0.0.1','d8fd1732-582500-44fa-a03c-8d12aacc82de',Carbon::now());

        $api_token2  = UserApiToken::generateApiToken('2','127.0.0.1','d8fd1732-582500-44fa-a03c-8d12aacc82de',Carbon::now());

        $api_token3  = UserApiToken::generateApiToken('3','127.0.0.1','d8fd1732-582500-44fa-a03c-8d12aacc82de',Carbon::now());

        $api_token4  = UserApiToken::generateApiToken('4','127.0.0.1','d8fd1732-582500-44fa-a03c-8d12aacc82de',Carbon::now());

        \DB::table('user_api_token')
        ->insert(
            [
                'user_id'       => '1',
                'api_token'     => $api_token1,
                'refresh_token' => NULL,
                'udid'          => 'd8fd1732-582500-44fa-a03c-8d12aacc82de',
                'device_type'   => 'andriod',
                'device_token'  => 'DGSDGSDDD53F-GGD',
                'platform_type' =>  'custom',
                'platform_id'   => NULL,
                'ip_address'    => '127.0.0.1',
                'user_agent'    => 'PostmanRuntime/7.42.0',
                'created_at'    => Carbon::now()
            ],
            [
                'user_id'       => '1',
                'api_token'     => $api_token2,
                'refresh_token' => NULL,
                'udid'          => 'd8fd1732-582500-44fa-a03c-8d12aacc82de',
                'device_type'   => 'andriod',
                'device_token'  => 'DGSDGSDDD53F-GGD',
                'platform_type' =>  'custom',
                'platform_id'   => NULL,
                'ip_address'    => '127.0.0.1',
                'user_agent'    => 'PostmanRuntime/7.42.0',
                'created_at'    => Carbon::now()
            ],
            [
                'user_id'       => '1',
                'api_token'     => $api_token3,
                'refresh_token' => NULL,
                'udid'          => 'd8fd1732-582500-44fa-a03c-8d12aacc82de',
                'device_type'   => 'andriod',
                'device_token'  => 'DGSDGSDDD53F-GGD',
                'platform_type' =>  'custom',
                'platform_id'   => NULL,
                'ip_address'    => '127.0.0.1',
                'user_agent'    => 'PostmanRuntime/7.42.0',
                'created_at'    => Carbon::now()
            ],
            [
                'user_id'       => '1',
                'api_token'     => $api_token4,
                'refresh_token' => NULL,
                'udid'          => 'd8fd1732-582500-44fa-a03c-8d12aacc82de',
                'device_type'   => 'andriod',
                'device_token'  => 'DGSDGSDDD53F-GGD',
                'platform_type' =>  'custom',
                'platform_id'   => NULL,
                'ip_address'    => '127.0.0.1',
                'user_agent'    => 'PostmanRuntime/7.42.0',
                'created_at'    => Carbon::now()
            ]
        );
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: wuhui
 * Date: 16/3/15
 * Time: 下午2:51
 */
use Illuminate\Database\Seeder;
use App\Models\Admin\AdminUsers;

class AdminUserSeeder extends Seeder {

    public function run()
    {
        DB::table('admin_users')->delete();
        AdminUsers::create([
            'name'			    => 'admin',
            'email'			    => 'admin@admin.com',
            'password'		    => '99e392b7c1c960014e9fb5dd535d95e59cf1670a',
            'is_supper'         => 1,
            'remember_token'	=> '06b66d458d8eceaa24452cc59e33bd45',
            'created_at'	    => date('Y-m-d H:i:s' , time()),
            'updated_at'	    => date('Y-m-d H:i:s' , time()),
        ]);
    }
}
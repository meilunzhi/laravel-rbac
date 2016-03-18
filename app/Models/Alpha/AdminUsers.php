<?php

namespace App\Models\Alpha;

use DB;
use Illuminate\Database\Eloquent\Model;

class AdminUsers extends Model
{
    protected $_table = 'admin_users';

    /**
     * @param $tel
     * @return mixed
     */
    public function getAdminUserSalt($name){
        return DB::table($this->_table)
            ->select('salt')
            ->where('name' , $name)
            ->first();
    }

    /**
     * @param $name
     * @param $password
     * @return mixed
     */
    public function checkLogin( $name , $password ){

        $isLogin = DB::table($this->_table)
            ->where('name' , $name)
            ->where('password' , $password)
            ->first();

        return $isLogin;
    }

	/*
	 * 用户列表
	 * @author		wuhui
	 * @time		2016/01/18
	 * @params		
	 * @response
	 *				管理员列表或错误信息
	 */
	public function getAdminUserList(){
		$list = DB::table($this->_table)
			->orderBy('admin_users.created_at' , 'desc')
			->where('is_del' , 0)
			->get();
		
		$userIds = array();

		foreach($list as $l){
			$userIds[] = $l->id;
		}

		$roles = DB::table('admin_user_roles')
			->whereIN('admin_user_id' , $userIds)
			->leftJoin('roles' , 'roles.id' , '=' , 'admin_user_roles.role_id')
			->get();

		foreach($list as $l){
			$l->role = array();
			foreach($roles as $r){
				if($l->id == $r->admin_user_id){
					$l->role[] = $r;
				}
			}
		}

		return $list;
	}

	/*
	 * 用户总数
	 * @author		wuhui
	 * @time		2016/01/18
	 * @params		
	 * @response
	 *				管理员列表或错误信息
	 */
	public function getAdminUserTotalNum(){
		return DB::table('admin_users')
			->count();	
	}

	
	/*
	 * 添加管理员角色
	 * @author		wuhui
	 * @time		2016/01/31
	 * @params		
	 * @response
	 *				成功或错误信息
	 */
	public function addAdminUserRole( $userId , $roles ){
		$data = array();
		foreach($roles as $r){
			$data[] = array('role_id'=>$r , 'admin_user_id'=>$userId);
		}
		return DB::table('admin_user_roles')->insert($data);
	}

	/*
	 * 添加管理员
	 */
	public function addAdminUser($data){
		return DB::table($this->_table)->insertGetId($data);
	}

	/*
	 * 编辑管理员信息
	 * @author		wuhui
	 * @time		2016/01/18
	 * @params		
	 * @response
	 *				成功或错误信息
	 */
	public function editAdminUserInfo( $userId , $data ){
		return DB::table('admin_users')
			->where('id' , $userId)
			->update($data);
	}

	/*
	 * 删除管理员角色
	 * @author		wuhui
	 * @time		2016/01/31
	 * @params		
	 * @response
	 *				成功或错误信息
	 */
	public function delAdminUserRole( $userId ){
		return	DB::table('admin_user_roles')->where('admin_user_id' , $userId)->delete();
	}
}

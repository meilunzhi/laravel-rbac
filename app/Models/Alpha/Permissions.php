<?php
/**
 * Created by PhpStorm.
 * User: wuhui
 * Date: 16/3/17
 * Time: 上午9:38
 */

namespace App\Models\Alpha;

use DB;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $_table = 'permissions';

	/**
	 * 获取节点列表
	 */
	public function getPermissionsList() {
		$parent = DB::table($this->_table)->where('fid' , 0)->get();	
		$child	= DB::table($this->_table)->where('fid' , '<>' , 0)->get();	

		foreach($parent as $p){
			$p->child = array();
			foreach($child as $c){
				$c->url = '/' . implode('/' , explode('.' , $c->name));
				if($c->fid == $p->id){
					$p->child[] = $c;
				}
			}
		}

		return $parent;
	}

	/**
	 * 获取节点信息
	 */
	public function getPermissionInfo($id) {
		$child = DB::table($this->_table)->where('id' , $id)->get();
		if(!empty($child)){
			$child[0]->parent = '';
			$parent	= DB::table($this->_table)->where('id' , $child[0]->fid)->get();
			if(!empty($parent)){
				$child[0]->parent = $parent[0];
			}
			return $child[0];
		}

		return false;

	}

}

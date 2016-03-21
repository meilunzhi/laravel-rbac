<?php

namespace App\Http\Controllers;

use Session , Cookie , Config;

use App\Models\Alpha\Permissions;

class AdminController extends Controller
{
    protected $response = array();

    public function __construct(){

        $this->response['title']		= '标题';
        $this->response['menuactive']	= 'qxgl';

		$this->_isLogin();

    }

	//判断是否登录
	private function _isLogin(){
		$sessionkey = cookie::get(config::get('session.web_login_cookie'));
		$userInfo = session::get($sessionkey);
		if(!isset($userInfo->id)){
            return redirect('alpha/login');
		}
		$this->_getMenu($userInfo->id);
		$this->_isHaveAuth();
	}

	/**
	 * 判断是否有权限访问
	 */
	private function _isHaveAuth(){
		$sessionkey = cookie::get(config::get('session.web_login_cookie'));
		$userInfo = session::get($sessionkey);
		if(!isset($userInfo->id)){
            return redirect('/alpha/login');
		}

		$permissions = $userInfo->permissions;
		$nowUrl = $_SERVER['REQUEST_URI'];

		if(!in_array($nowUrl , $permissions)){
			return redirect('alpha/roles');
		}

	}

	//获取分页数据
	public function getPageData($page , $length , $totalNum){
        $pagedata               = new \stdClass;
        $pagedata->page         = $page;
        $pagedata->length       = $length;
        $pagedata->offset       = ($pagedata->page - 1) * $pagedata->length;
        $pagedata->totalPage    = ceil($totalNum/$length);
        $pagedata->totalNum     = $totalNum;
        $pagedata->isEndPage    = $page < $pagedata->totalPage ? 0 : 1;

        return $pagedata;
    }

	//获取菜单
	private function _getMenu($userId){
	
		$permissionModel = new Permissions;

		$permissionList = $permissionModel->getAdminUserMenu($userId);

        $this->response['menu'] = $permissionList;

	}
}

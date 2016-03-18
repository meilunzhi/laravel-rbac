<?php

namespace App\Http\Controllers;

use App\Models\Alpha\Permissions;

class AdminController extends Controller
{
    protected $response = array();

    public function __construct(){

        $this->response['title']		= '标题';
        $this->response['menuactive']	= 'qxgl';

		$this->_getMenu();

    }

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

	private function _getMenu(){
	
		$permissionModel = new Permissions;

		$permissionList = $permissionModel->getPermissionsList();

        $this->response['menu'] = $permissionList;

	}
}

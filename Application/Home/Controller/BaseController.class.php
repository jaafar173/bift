<?php
/**
 * Created by PhpStorm.
 * User: jaafar
 * Date: 6/3/15
 * Time: 17:31
 */

namespace Home\Controller;


use Common\Controller\CommonController;

class BaseController extends CommonController
{
   /* protected $countries;
    protected $classifies;
    public function _initialize()
    {
        parent::_initialize();
        $this->assign('classifies',C('classify'));
        $this->assign('countries',C('country'));
    }
    public function _empty($name = '')
    {
        $this->redirect('public/page404');
    }

    /**
     * 获取详情
     * @param $fields
     * @return mixed
     */
    public function itemInfo($fields = true)
    {
        $id = I('get.id',0);
        if ($id <= 0){
            $this->_empty();
        }
        $detail = $this->logic->itemInfo($id,$fields);
        $this->assign('item',$detail);
    }

    /**
     * @param $fields
     * @return mixed
     */
    //public function previous($fields = true);


}
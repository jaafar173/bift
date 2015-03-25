<?php
namespace Blog\Controller;

use Common\Controller\CommonController;

class BaseController extends CommonController
{
    public function _initialize()
    {
        //parent::_initialize();
    }
    /* 空操作，用于输出404页面*/
    public function _empty()
    {
        $this->redirect('/');
    }
    /**
     *
     */
    public function _after_detail()
    {
        $id = I('get.id',0);
        $this->logic->updateCountFields($id,'view_count');
    }

    /**
     * 获取详情
     * @param $fields
     * @return mixed
     */
    public function itemInfo($fields = true)
    {
        $id = I('get.id',0);
        if ($id <= 0) {
            $this->_empty();
        }
        $detail = $this->logic->itemInfo($id,$fields);
        if (empty($detail)){
            $this->_empty();
        }
        $this->assign('item',$detail);
        $this->seoTitle($detail['name']);
        $this->seoKeywords($detail['Keywords']);
        $this->seoDescription($detail['Description']);

    }
    public function previous($fields = true)
    {
        $id = I('get.id',0);
        if ($id <= 0){
            $this->_empty();
        }
        $detail = $this->logic->previous($id,$fields);
        $this->assign('previous',$detail);
    }

    public function next($fields = true)
    {
        $id = I('get.id',0);
        if ($id <=0){
            $this->_empty();
        }
        $detail = $this->logic->next($id,$fields);
        $this->assign('next',$detail);
    }





}
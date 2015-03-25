<?php
namespace Blog\Controller;

class PublicController extends BaseController
{
    protected $menu = '';
    protected $logicName = 'None';

    public function _initialize()
    {
        $this->assign('siteConf',C('SITE'));
    }
    /**
     * 升级时显示的页面
     */
    public function upgrade()
    {
        $this->display();
    }
    /**
     * 404页面
     */
    public function page404()
    {
        $this->display();
    }

}
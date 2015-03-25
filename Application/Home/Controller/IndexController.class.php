<?php
/**
 * 首页
 */
namespace Home\Controller;
use Company\Controller\BaseController;
use Think\Controller;
class IndexController extends BaseController
{
    //protected $menu ='/';
    //protected $logicName = 'Position';

    /**
     * 网站首页
     */
    public function index()
    {
        $this->display();
        /*$hots = $this->logic->getHottest();
        $this->assign('hots',$hots);
        $news = $this->logic->getNewest();
        $this->assign('news',$news);
        $this->seoTitle();
        $this->seoDescription();
        $this->seoKeywords();
        $this->display();*/
    }
}
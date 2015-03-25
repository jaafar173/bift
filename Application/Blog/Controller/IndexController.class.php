<?php
namespace Blog\Controller;

class IndexController extends BaseController
{
    protected $logicName = 'None';


    public function index()
    {
        $page = I('get.p',1);
        $listRows = 5;
        $BlogLogic = D('Blog',Logic);
        $lists     =$BlogLogic->getPage($page,$listRows);
        $this->assign('pagenation',$lists['pagenation']);
        $this->assign('items',$lists['items']);
        $this->seoTitle();
        $this->seoKeywords();
        $this->seoDescription();
        $this->display();
    }
}
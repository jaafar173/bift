<?php
/**
 * common controller
 * @author jaafar<huangjq173@qq.com>
 * @date: 2015-02-28
 * @version 0.1.0
 */
namespace Common\Controller;

use Think\Controller;

class CommonController extends Controller
{
   /* protected $id;  //
    protected $uid; // 用户uid
    protected $userType; // 用户类型
    protected $menu; // 菜单
    protected $logic;  // 逻辑对象
    protected $logicName; // 逻辑对象名字
    protected $language; // 客户端语言

    /**
     * construct function
     */
   /* protected function _initialize()
    {
        if (C('SITE_STATUS') == 'upgrade' && cookie('version') != 'preview') {
            $this->upgrade();
        }
        // 获取客户端语言
        $this->language = $this->getClientLanguage();
        // 自动登录
        $this->autoSignin();
        $userInfo = session('user_auth');
        var_dump($userInfo);
        $this->uid = !empty($userInfo['uid']) ? $userInfo['uid'] : 0;
        $this->id = !empty($userInfo['id']) ? $userInfo['id'] : 0;
        $this->userType = isset($userInfo['type']) ? $userInfo['type'] : 100;
        $this->assign('userType', $this->userType);
        $logicName = $this->logicName ? $this->logicName : CONTROLLER_NAME;
        if ($logicName != 'None') {
            $this->logic = D($logicName, 'Logic');
        }
        $this->assign('siteConf', C('SITE'));
        $this->assign('companyName', C('COMPANY_NAME'));
        $this->assign('menu', $this->menu);
        $this->assign('user', session('user_auth'));
    }

    // 自动登录
    public function autoSignin()
    {
        $UserLogic = D('User', 'Logic');
        $UserLogic->autoSignin();
    }

    // 登录
    public function gotoSignin()
    {
        if (!is_signin()) {
            $cookieRedirectUrl = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            set_redirect_url($cookieRedirectUrl);
            $this->redirect('user/signin@www');
        } else {
            $this->gotoInfo();
        }
    }

    // 用户反馈
    public function feedback()
    {
        if (IS_POST) {
            $data = I('post.');
            $FeedBackLogic = D('Feedback', 'Logic');
            $FeedBackLogic->add($data);
            redirect($_SERVER['HTTP_REFERER']);
        }
        $this->redirect('/');
    }

    /*
     * 获取客户端语言
     * 1 首先根据url的lang参数
     * 2 再根据cookie
     * 3 再根据客户端语言
     */
   /* protected function getClientLanguage()
    {
        $language = I('get.lang');
        if ($language) {
            $language = $language == 'cn' ? 'Simplified' : 'English';
            cookie('lang', $language);
        } else {
            $language = cookie('lang');
            if (!$language) {
                $language = get_client_language();
                cookie('lang', $language);
            }
        }
        return $language;
    }

    /*
     * 根据用户类型跳转到不同的首页
     */
    /*protected function gotoUCenter()
    {
        if ($this->userType == 0) {
            // 个人
            $this->redirect('index/index@i');
        } elseif ($this->userType == 1) {
            // 企业
            $this->redirect('company/index@hr');
        } else {
            $this->redirect('index/index@www');
        }
    }

    // 系统升级
    private function upgrade()
    {
        $version = I('get.v');
        if ($version != 'preview') {
            $this->redirect('public/upgrade');
        }
        cookie('version', 'preview');
    }

    //============== SEO start==============
    public function seoTitle($title = '')
    {
        $webName = C('SITE_TITLE');
        if (empty($title)) {
            $title = $webName;
        } else {
            $title = $title . ' | ' . $webName;
        }
        $this->assign('title', $title);
    }

    public function seoKeywords($keywords = '')
    {
        $webKeywords = C('SITE_KEYWORDS');
        if (empty($keywords)) {
            $seoKeywords = $webKeywords;
        } else {
            $seoKeywords = $keywords;
        }
        $this->assign('keywords', $seoKeywords);
    }

    public function seoDescription($description = '')
    {
        if (empty($description)) {
            $seoDescription = C('SITE_DESCRIPTION');
        } else {
            $seoDescription = $description;
        }
        $this->assign('description', $seoDescription);
    }*/

}
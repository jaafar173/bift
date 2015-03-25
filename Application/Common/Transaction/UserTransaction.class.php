<?php
/**
 * 用户注册登录
 * @author carl.wang<2009wpeng@gmail.com>
 * @date: 2014-07-16
 * @version 0.0.1
 */
namespace Common\Transaction;

class UserTransaction extends BaseTransaction
{
    protected $modelName = 'User';

    /**
     * 生产自动登录的token
     * @param $createTime
     * @param $email
     * @return string
     */
    protected function generateToken($uid, $ucUnique)
    {
        $len = $uid % 17;
        $salt1 = md5($ucUnique);
        $salt2 = md5($uid . $len);
        $len = $len >= 32 ? 16 : $len;
        return substr($salt1, 0, $len) . substr($salt2, $len);
    }

    /**
     * 生成用户中心的唯一表示，保存在cookie，用于验证登录
     * @param $uid
     * @param $email
     * @param $createTime
     * @return string
     */
    protected function generateUCUnique($uid, $email, $createTime)
    {
        $len = $uid % 17;
        $salt1 = md5($createTime);
        $salt2 = md5($email);
        $len = $len >= 32 ? 16 : $len;
        return substr($salt1, 0, $len) . substr($salt2, $len);
    }

    /**
     * 密码加密算法
     *  1 网页端的注册，登录密码都需要加密
     *  2 服务端密码采用动态加密，每个密码的盐值是不定的
     * @param $createTime
     * @param $pwd
     * @param $username  邮箱
     * @return string
     */
    protected function encryptPwd($createTime, $pwd, $username)
    {
        $usernameMode = strlen($username) % 4;
        $salt = md5($createTime + $usernameMode);
        $salt2Length = 18 - $usernameMode;
        $salt1 = substr($salt, 24, $usernameMode + 1);
        $salt2 = substr($salt, $usernameMode, $salt2Length);
        $md5Pwd = substr(md5($pwd . $salt2), 1);
        return  $salt1 . $md5Pwd . $salt2;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: jaafar
 * Date: 5/3/15
 * Time: 11:15
 */

namespace Common\Transaction;


class BaseTransaction
{
    protected $modelName = null;
    protected $model = null;
    protected $module = null;

    public function __construct()
    {
        if ($this->modelName){
            $this->model = D($this->modelName);
            $this->moudle = M($this->modelName);
        }
    }


    /********create**********/
    /**
     * @param array $fields
     * @return mixed
     */

     public function insert($fields)
     {
         $fields['creat_time'] = time();
         $fields['update_time'] = time();
         var_dump($fields);
         return $this->model->insert($fields);
     }


    /***udate *******/
      public function saveById($fields, $isRefreshUpdateTime = true)
      {
          if (empty($fields['id'])){
              return false;
          }
          if($isRefreshUpdateTime){
              $fields['update_time'] = time();
          }
          return $this->model->updateById($fields);
      }

        public function saveByCondition($condition,$fields,$isrefreshUpdateTime)
        {
            if ($isrefreshUpdateTime){
                $fields['update_time'] = time();
            }
            return $this->model->update($condition,$fields);
        }
    /**
     *
     * 更新状态字段的值
     * @param $id
     * @param $status
     * @return mixed
     */

    public function updateStatusFieldByCondition($condition, $status)
    {
        $fields = array(
            'status' => $status
        );
        return $this->model->update($condition, $fields);
    }

    /**
     * 更新状态字段的值
     * @param $id
     * @param $status
     * @return mixed
     */
    public function updateStatusFieldById($id, $status)
    {
        $condition = array(
            'id' => $id
        );
        $fields = array(
            'status' => $status
        );
        return $this->model->update($condition, $fields);
    }

    /**
     * 改变计数字段数量
     * @param $id
     * @param $field
     * @param int $step
     * @return mixed
     */
    public function updateCountField($id, $field, $step = 1)
    {
        return $this->model->incrField($id, $field, $step);
    }

    /******** retrieve ********/
    /**
     * @param $id
     * @param $fields
     * @return mixed
     */
    public function getOneById($id, $fields)
    {
        $condition = array(
            'id' => $id
        );
        return $this->model->getOne($condition, $fields);
    }

    /**
     * @param $condition
     * @param $fields
     * @return mixed
     */
    public function getOneByCondition($condition, $fields)
    {
        return $this->model->getOne($condition, $fields);
    }

    /**
     * @todo wrong
     * 获取单条信息
     *
     * @param $id
     * @param bool $fields
     * @return mixed
     */
    public function previous($id, $fields)
    {
        $condition = array(
            'id' => array('lt', $id),
            'status' => 1,
            'category' => 0
        );
        $order = 'id desc';
        return $this->model->getOneByOrder($condition, $fields, $order);
    }

    /**
     * @todo wrong
     * 获取单条信息
     *
     * @param $id
     * @param bool $fields
     * @return mixed
     */
    public function next($id, $fields)
    {
        $condition = array(
            'id' => array('gt', $id),
            'status' => 1,
            'category' => 0
        );
        $order = 'id asc';
        return $this->model->getOneByOrder($condition, $fields, $order);
    }

    /**
     * 获取前N条记录
     * @param int $count
     * @param string $order
     * @param bool $fields
     * @return mixed
     */
    public function getList($count = 10, $order = 'id desc', $fields = true)
    {
        return $this->model->getList($count, $order, $fields);
    }

    /**
     * 获取前N条记录
     * @param $condition
     * @param int $count
     * @param string $order
     * @param bool $fields
     * @return mixed
     */
    public function getListByCondition($fields, $count = 10, $order = 'id desc',  $condition)
    {
        return $this->model->getList($fields, $count, $order,  $condition);
    }

    /**
     * 获取所有记录
     * @param string $order
     * @param bool $fields
     * @return mixed
     */
    public function getAll($order = 'id desc', $fields = true)
    {
        return $this->model->getAll($fields, $order);
    }

    /**
     * 获取所有记录
     * @param $condition
     * @param string $order
     * @param bool $fields
     * @return mixed
     */
    public function getAllByCondition($condition, $order = 'id desc', $fields = true)
    {
        return $this->model->getAll($fields, $order, $condition);
    }

    /**
     * 分页获取数据
     * @param $pageNum
     * @param $listRows
     * @param bool $fields
     * @return mixed
     */
    public function getPage($pageNum, $listRows, $fields = true, $order = 'id desc')
    {
        return $this->model->pages($listRows, $pageNum, $fields, $order);
    }


    /**
     * 分页获取数据
     * @param $pageNum
     * @param $listRows
     * @param bool $fields
     * @return mixed
     */
    public function getPageByCondition($pageNum, $listRows, $condition, $order = 'id desc', $fields = true)
    {
        $lists    = $this->model->pages($listRows, $pageNum, $fields, $order, $condition);
        return $lists;
    }

    /**
     * 获取分类信息
     *
     * @param $pageNum
     * @param $listRows
     * @param $category
     * @param bool $fields
     * @return mixed
     */
    public function getCategoryPage($pageNum, $listRows, $category, $fields = true)
    {
        $cate = 'cate' . count($category);
        $condition = array(
            'status' => 1,
            $cate => end($category)
        );
        $Model = D($this->modelName, 'Model');
        $order    = 'id desc';
        $lists    = $Model->pages($listRows, $pageNum, $fields, $order, $condition);
        return $lists;
    }

    public function getCategory($categories)
    {
        $categoryInfos = array();
        $CategoryModel = D('Category', 'Model');
        $url = '';
        foreach ($categories as $key => $categoryId) {
            $categoryInfos[$key] = $CategoryModel->getById($categoryId);
            $url .= $categoryInfos[$key]['id'];
            $categoryInfos[$key]['url'] = $url;
            $url .= '-';

        }
        return $categoryInfos;
    }


    public function getTotal($condition)
    {
        return $this->model->getTotal($condition);
    }

    /******** delete ********/
    /**
     * @param $id
     * @return mixed
     */
    public function delById($id)
    {
        $condition = array(
            'id' => $id
        );
        return $this->model->del($condition);
    }

    /**
     * @param $condition
     * @return mixed
     */
    public function delByCondition($condition)
    {
        return $this->model->del($condition);
    }

    /**
     * 密码加密算法(50位)
     *  1 网页端的注册，登录密码都需要加密
     *  2 服务端密码采用动态加密，每个密码的盐值是不定的
     * @param $createTime
     * @param $pwd
     * @param $username
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
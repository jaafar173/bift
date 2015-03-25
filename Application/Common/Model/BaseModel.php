<?php
/**
 * Created by PhpStorm.
 * User: jaafar
 * Date: 10/3/15
 * Time: 19:39
 */
namespace Common\Model;
use Think\Model;
class BaseModel extends Model
{
    protected $dbConfigName = 'DEFAULT';

    /**
     * 覆盖父类的construct()
     */
    public function __construct()
    {

    }
    public function dbBase()
    {
        $dbConfig = C("DB_SERVER.{$this->dbConfigName}");
        $this->db($dbConfig['link_num'],$dbConfig);
    }
    //=======create========//
    public function insert($fields)
    {
        $db = $this->dbBase();
        unset($fields['id']);
        return $db->add($fields);
    }

    //=======update========//
    public function update($condition,$fields)
    {
        $db = $this->dbBase();
        return $db->where($condition)->save($fields);
    }
    public function updateByCondition($condition,$fields)
    {
        $db = $this->dbBase();
        return $db ->where($condition)->save($fields);
    }
    public function updateById($fields)
    {
        $db = $this->dbBase();
        return $db->save($fields);
    }


    /**
     * @param $id
     * @param string $fields
     * int $step
     *
     */
    public function incrField($id,$field ='view',$step = 1)
    {
        $db = $this->dbBase();
        $condition = array(
            'id' => $id
        );
        return $db->where($condition)->setInc($field,$step);
    }


    //==============  retrieve ===============//
    /**
     * 获取详情
     * @param $condition
     * @param $field
     */
    public function getOne($condition,$field)
    {
        $db = $this->dbBase();
        return $db->field($field)->where($condition)->find();
    }
    public function getOneByOrder($condition,$field,$order)
    {
        $db = $this->dbBase();
        return $db->field($field)->order($order)->where($condition)->find();
    }

    /**
     * 根据分页获取数据
     * @param $listRows
     * @param $pageNum
     * @param $fields
     * @param $string $order
     * @param array $condition
     * @return array
     *
     */
    public function pages($listRows,$pageNum,$fields,$order ='id desc',$condition = array())
    {
        $db = $this->dbBase();
        if ($condition){
            $lists = $db->field($fields)->where($condition)->page($pageNum,$listRows)->select();
            $total = $db->where($condition)->count(1);
        } else{
            $lists = $db->field($fields)->order($order)->page($pageNum,$listRows)->select();
            $total = $db->count(1);
        }
        $Pages  = new \Think\Page($total,$listRows);
        $pagination = $Pages->show();
        $page       = array(
            'items' =>$lists,
            'pagination'=>$pagination
        );
        return $page;
    }


    public function getAll($fields,$order = 'id desc',$condition = array())
    {
        $db = $this->dbBase();
        if ($condition){
            return $db->field($fields)->where($condition)->order($order)->select();
        } else {
            return $db->field($fields)->order($order)->select();
        }
    }
    public function isExists($condition)
    {
        $db = $this->dbBase();
        $db ->where($condition)->find();
    }
    public function getTotal($condition)
    {
        $db = $this->dbBase();
        $db->where($condition)->count(1);
    }
        //========= delete  ==========//
    public function del($condition)
    {
        $db = $this->dbBase();
        return $db->where($condition)->delete();
    }

}

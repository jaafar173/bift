<?php
/**
 * Created by PhpStorm.
 * User: jaafar
 * Date: 5/3/15
 * Time: 11:08
 */

namespace Common\Logic;

use Common\Transaction\BlogTransaction;

class BlogLogic extends BlogTransaction
{
    public function getPage($pageNum, $listRows)
    {
        $condition = array(
            'status' =>1

        );
        $result = $this->getPageByConditon($pageNum, $listRows);
        foreach ($result['items'] as $key => $item){
            $result['items'][$key]['content'] = htmlspecialchars_decode($item['content']);
            $result['items'][$key]['creat_time'] = date('M d,Y h:i A',$item['creat_time']);
            $result['items'][$key]['tags'] = explode(',',$item['keywords']);
        }
        return $result;
    }
    public function itemInfo($id,$fields)
    {
        $itemInfo = $this->getOneById($id, $fields);
        if ($itemInfo){
            $itemInfo['creat_time'] = date('M d,Y h:i A',$itemInfo['creat_time']);
            $itemInfo['content'] = htmlspecialchars_decode($itemInfo['content']);
            $itemInfo['tags'] = explode(',',$itemInfo['keywords']);
        }
        return $itemInfo;
    }
}
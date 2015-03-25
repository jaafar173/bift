<?php
namespace Company\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function Index(){
        $this->display();
    }
}
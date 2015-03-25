<?php
namespace Blog\Controller;

class BlogController extends BaseController {
    public function detail()
    {
        $this->itemInfo();
        $this->previous();
        $this->next();
        $this->display();
    }
}
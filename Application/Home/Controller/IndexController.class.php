<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){


        $count = M('article')->order("create_time desc")->count();

        $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig("next","next");
        $show       = $Page->show();// 分页显示输出
        $single_next = "";

        if ($Page->totalPages > 1) {
            $down_row  = $Page->nowPage + 1;
            $url = ($down_row <= $Page->totalPages) ? $Page->url($down_row) : '#';
            $single_next = "<a href='{$url}' class='button next single-next'>Next Page</a>";
        }

        $article = M('article')->order("create_time desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('page', $show);
        $this->assign("article", $article);
        $this->assign("single_next", $single_next);
        $this->display();
    }
}
<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //echo getCalendar(time());exit;



        $count = M('article')->order("create_time desc")->count();

        $Page       = new \Think\Page($count,5);
        $Page->setConfig("next","next");
        $show       = $Page->show();
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
        $this->assign("h", 'current');
        $this->assign("calendar", getCalendar(time()));
        $this->display();
    }
}
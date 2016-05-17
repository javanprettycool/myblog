<?php
namespace Home\Controller;
use Think\Controller;
class ArchiveController extends Controller {
    public function index(){

        $archive_id = I('get.id');
        $where = "1=1";
        $checked_archive = "";
        if (!empty($archive_id)) {
            $where = "pid=$archive_id";
            $checked_archive = M("archive")->where("a_id=$archive_id")->getField("a_name");
        }

        $archives = M('archive')->order("a_time desc")->select();

        $articles = M("article")->where($where)->order("create_time desc")->select();

        $result = array();
        foreach ($articles as $ar) {
            $time = $ar['create_time'];
            $year =  date("Y",$time);
            $month = date("F",$time);
            $result[$year][$month][] = $ar;
        }


        $this->assign("archive", $archives);
        $this->assign("archive_title", $checked_archive);
        $this->assign("article_list", $result);
        $this->assign("a", 'current');

        $this->display();
    }




}
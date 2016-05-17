<?php
namespace Home\Controller;
use Think\Controller;
class ArchiveController extends Controller {
    public function index(){

        $archive_id = I('get.id');
        $date = I('get.date');

        $where = "1=1";
        $checked_archive = "";
        if (!empty($archive_id)) {
            $where = "pid=$archive_id";
            $checked_archive = M("archive")->where("a_id=$archive_id")->getField("a_name");
        }

        if (!empty($date)) {

            $start = strtotime($date." 00:00:00");
            $end = strtotime($date." 23:59:59");

            $where = "create_time > $start and create_time < $end";
            $checked_archive = date("M,j,Y",$start);
        }

        $archives = M('archive')->order("a_time desc")->select();

        $articles = M("article")->where($where." and view>0")->order("create_time desc")->select();

        $result = array();
        $timetable = array();
        foreach ($articles as $ar) {
            $time = $ar['create_time'];
            $year =  date("Y",$time);
            $month = date("M",$time);
            $day = date("j", $time);
            $result[$year][$month][] = $ar;

            $timetable[$year][$month][] = $day;
        }


        $this->assign("archive", $archives);
        $this->assign("archive_title", $checked_archive);
        $this->assign("article_list", $result);
        $this->assign("a", 'current');
        $this->assign("calendar", getCalendar(time(), $timetable));

        $this->display();
    }





}
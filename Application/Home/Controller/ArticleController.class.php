<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function index(){
        $this->display();
    }


    public function articleAdd(){
        $rules = array (
            array('author','javan'),
            array('content','htmlspecialchars_decode', 3,'function') ,
            array('img','makeImg', 3,'function'),
            array('create_time','time', 1,'function')
        );

        if(!IS_AJAX){
            $this->error('提交方式不正确');
        }else {
            $article = M('Article');
            if ($article->auto($rules)->create()) {
                $article->add();
                $data = array("error" => 0, "msg" => "添加文章完成!");
            }
            else {
                $data = array("error"=>1,"msg"=>"添加时发生错误!");
            }

        }
        $this->ajaxReturn($data);
    }


}
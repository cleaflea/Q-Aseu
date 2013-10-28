<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
//	$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $usermodel = new Model('Users');
        $users = $usermodel->select();
        var_dump($users);
    }

    public function createQuestion(){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $category = $_POST['category'];

        var_dump($_POST);

        var_dump($title);
        var_dump($text);
        var_dump($category);

        $questionModel = new Model('Question');
        $savedata['title'] = $title;
        $savedata['body'] = $text;
        $savedata['user_id'] = 1;
        $savedata['category_id'] = $category+1;
        $savedata['date_entered'] = date_create()->format('Y-m-d H:i:s');;
        $result = $questionModel->add($savedata);
        var_dump($result);
    }

    function login(){

    }

    function logout(){

    }
}


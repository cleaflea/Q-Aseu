<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 13-10-27
 * Time: 下午5:26
 * To change this template use File | Settings | File Templates.
 */
class AskAction extends Action{
    Public function _initialize()
    {
        // 初始化的时候检查用户权限
        if (isset($_SESSION['username']) && $_SESSION['username'] != '') {
//            var_dump($_SESSION);
//            $this->display();
        } else {
            $this->redirect('__ROOT__/User/login');
        }

    }


    function ask(){
        $this->display();
    }

    function showall(){
        $questionModel = new Model('Question');
//        $questions = $questionModel->select();
        $questionModel = new Model();
        $questions = $questionModel->query('select q.title, q.date_entered, q.question_id, u.username, q.category_id from question as q inner join users as u using(user_id)');
//        var_dump($questions);
//        $questions = $questionModel->query('select q.title, q.question_id, q.date_entered, u.username, u.user_id, c.name from question as q inner join users as u using(user_id) inner join category as c using(category_id)');

        $this->assign('questions', $questions);
        $this->display();
    }

    function showsingle(){
        $question_id = $_GET['qid'];
//        var_dump($question_id);
        $questionModel = new Model();
//        $question = $questionModel->query('select title, body, question_id from question where question_id='.$question_id);
//        var_dump($question[0]);
        $question = $questionModel->query('select q.title, q.body, q.question_id, q.date_entered, u.username from question as q inner join users as u using(user_id) where q.question_id='.$question_id);
        $answer = $questionModel->query('select a.body, a.date_entered, u.username from answer as a inner join users as u using(user_id) where a.question_id='.$question_id);
        $this->assign('question', $question[0]);
        $this->assign('answer', $answer);
        $this->assign('answercount', count($answer));
        $this->display();
    }

    function getquestion(){
        $title = $_POST['title'];
        $text = $_POST['text'];
        $category = $_POST['category'];
//        var_dump($_POST);
        $questionModel = new Model('Question');
        $savedata['title'] = $title;
        $savedata['body'] = $text;
        $savedata['user_id'] = $_SESSION['id'];
        $savedata['category_id'] = $category+1;
        $savedata['date_entered'] = date_create()->format('Y-m-d H:i:s');
        $result = $questionModel->add($savedata);
//        var_dump($result);
        $this->redirect('__ROOT__/Ask/showall');
    }

    function testajax(){
        $qid = $_GET['qid'];
        $uid = $_SESSION['id'];
        $model = new Model();
        $result = $model->query('select a.body from answer as a inner join question as q using(question_id) where q.question_id='.$qid.' and a.user_id='.$uid);
//        var_dump($result);
        if($result == null){
            echo 'empty';
        }else{
            echo 'not empty';
        }

        $this->display();

    }

    function answervalidate(){
        $qid = $_GET['qid'];
        $uid = $_SESSION['id'];
        $model = new Model();
        $result = $model->query('select a.body from answer as a inner join question as q using(question_id) where q.question_id='.$qid.' and a.user_id='.$uid);
//        var_dump($result);
//        if(count($result) >= 1){
//            $this->ajaxReturn('bad', 'post', 0);
//        }else{
//            $this->ajaxReturn('good', 'post', 1);
//        }
        if($result == null){
            $this->ajaxReturn('good', 'post', 1);
        }else{
            $this->ajaxReturn('bad', 'post', 0);
        }

    }

    function answer(){
        $qid = $_POST['qid'];
        $text = $_POST['text'];
        $savedata['question_id'] = $qid;
        $savedata['body'] = $text;
        $savedata['user_id'] = $_SESSION['id'];
        $savedata['date_entered'] = date_create()->format('Y-m-d H:i:s');
        $answerModel = new Model('Answer');
        $result = $answerModel->add($savedata);
//        var_dump($result);
        $this->redirect('__ROOT__/Ask/showall');
    }

    function showuserall(){
        $model = new Model();
        $uid = $_SESSION['id'];
        $answers = $model->query('select q.title, q.question_id from question as q inner join answer as a using(question_id) where a.user_id='.$uid.' order by q.question_id');
//        var_dump($answers);
        if($answers == null){
//            echo 'empty';
            $this->assign('emptyflag', 1);
            $this->display();
        }else{
//            echo 'not empty';
            $this->assign('emptyflag', 0);
            $this->assign('answers', $answers);
            $this->display();
        }
    }

    function showusersingle(){
        $qid = $_GET['qid'];
        $uid = $_SESSION['id'];
//        var_dump($qid);
        $model = new Model();
        $answer = $model->query('select a.body, q.title, a.answer_id from answer as a inner join question as q using(question_id) where q.question_id='.$qid.' and a.user_id='.$uid);
//        var_dump($answer);
        $this->assign('answer', $answer[0]);
        $this->display();
    }

    function update(){
        $body = $_POST['text'];
        $aid = $_POST['answer_id'];
//        var_dump($body);
        $answerModel = new Model("Answer"); // 实例化User对象
//        $data['name'] = 'ThinkPHP';
//        $data['email'] = 'ThinkPHP@gmail.com';
        $savedata['body'] = $body;
        $condition['answer_id'] = $aid;
        $answerModel->where($condition)->save($savedata); // 根据条件保存修改的数据
        $this->redirect('__ROOT__/Ask/showall');
    }

    function delete(){
        $aid = $_GET['aid'];
//        var_dump($aid);
        $answerModel = new Model('Answer');
        $result = $answerModel->delete($aid);
        if($result > 0)
        {
            $this->assign('result', 'delete '.$aid.' user successful');
        }
        else
        {
            $this->assign('result', 'delete '.$aid.' user failed');
        }
        $this->display();
    }
}
?>
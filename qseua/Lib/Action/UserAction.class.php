<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 13-10-28
 * Time: 下午4:08
 * To change this template use File | Settings | File Templates.
 */
class UserAction extends Action{
    function login(){
        $this->display();
    }

    function do_login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $model = new Model('Users');
        $query['username'] = $username;
        $query['pass'] = md5($password);
        var_dump($query);
        $result = $model->where($query)->count();
        var_dump($result);
        $id = $model->field('user_id')->where($query)->find();
        var_dump($id);
        if($result>0){
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id['user_id'];
            $_SESSION['login'] = 'yes';
            $this->redirect('__ROOT__/Ask/showall');
//            $this->display();
        }else{
            $this->redirect('__ROOT__/User/login');
//            $this->display();
        }
    }

    public function logout(){
        $_SESSION['username'] = '';
        $this->redirect('__ROOT__/Ask/ask');
    }
    function register(){

    }
}
?>
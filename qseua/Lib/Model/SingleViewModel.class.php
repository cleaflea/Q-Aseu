<?php
/**
 * Created by JetBrains PhpStorm.
 * User: admin
 * Date: 13-10-27
 * Time: 下午11:20
 * To change this template use File | Settings | File Templates.
 */
class SingeViewModel extends ViewModel{
    public $viewFields = array(
        'question'=>array('title', 'body', 'date_entered'),
        'users'=>array('username','_on'=>'question.user_id=users.user_id'),
    );
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: tammy
 * Date: 17/2/22
 * Time: 21:22
 */

//header('Location:index.php');
session_start();
//如果用户未登录，即未设置$_SESSION['user_id']时，执行以下代码
if(isset($_SESSION['user_id'])){
    unset ($_SESSION['user_id']);
    header('Location:index.php');
}




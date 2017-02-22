<?php
/**
 * Created by PhpStorm.
 * User: tammy
 * Date: 17/2/22
 * Time: 21:32
 */
require_once "DBManager.php";
$con = DBManager::getInstance()->getConnection();

$flag_success=false;
$msg='';

$email=$_POST['email'];
$password=$_POST['password'];
$user_id=null;

$result=mysqli_query($con,"select * from USER where email='$email' and password='$password'");



if (mysqli_connect_errno($con)||$result->num_rows < 1){
    $msg='Login failed!';
}else{
    $flag_success=true;
    $user_id=$result->fetch_assoc()['id'];

    $msg= 'login Succeed!';
}

session_start();
//如果用户未登录，即未设置$_SESSION['user_id']时，执行以下代码
if(!isset($_SESSION['user_id'])){
    $_SESSION['user_id']=$user_id;
}

//echo $msg;

header('Location:index.php');
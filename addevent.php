<form action="addevent.php" method="post">
    <label>title:</label><input type="text" name="title" value="123"/><br/>
    <label>city:</label><input type="text" name="city" value="tokyo"/><br/>
    <label>location:</label><input type="text" name="location" value="station"/><br/>
    <label>start time:</label><input type="text" name="starttime" value="22-2-2017 8:15:23"/><br/>
    <label>end time:</label><input type="datetime" name="endtime" value="22-2-2017 23:55:59"/><br/>
    <label>number:</label><input type="number" name="number" value="100"/><br/>
    <label>price:</label><input type="number" name="price" value="100"/><br/>
    <label>introduction:</label><textarea name="introduction">introduction</textarea>
    <br/>

    <button type="submit">submit</button>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: tammy
 * Date: 17/2/22
 * Time: 22:01
 */
require_once "DBManager.php";
/**
 * Created by PhpStorm.
 * User: tammy
 * Date: 17/2/21
 * Time: 22:53
 */
$con = DBManager::getInstance()->getConnection();

$flag_success=false;
$msg='';

if($_SERVER['REQUEST_METHOD']=='POST'){


    $title=$_POST["title"];
    $city=$_POST["city"];
    $location=$_POST["location"];
//    mktime(hour,minute,second,month,day,year)
//Date for database
    $starttime = date ("Y-m-d H:i:s", strtotime($_POST['starttime']));
    $endtime = date("Y-m-d H:i:s", strtotime($_POST['endtime']));
    $number=$_POST["number"];
    $price=$_POST["price"];
    $introduction=$_POST["introduction"];

    $sql="INSERT INTO `Event`(`title`, `city`, `location`, `starttime`, `endtime`, `number`, `price`, `introduction`)
VALUES ('$title','$city','$location','$starttime','$endtime',$number,$price,'$introduction')";
    mysqli_query($con,$sql);

    echo 'test';
}




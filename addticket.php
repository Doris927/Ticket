<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="plugin/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2/22/17
 * Time: 10:32 PM
 */
require_once "DBManager.php";

$success_flag=false;

if(is_array($_GET)){
    if(isset($_GET["user_id"]) and isset($_GET["event_id"])){
        $user_id = $_GET["user_id"];
        $event_id = $_GET["event_id"];
        $conn = DBManager::getInstance()->getConnection();
        $event_query = "select endtime from Event where id = $event_id";
        $result = $conn->query($event_query) or die("No event found");
        if($result->num_rows > 0){
            $end_time = $result->fetch_assoc()["endtime"];
            $cur_time = date("Y-m-d H:i:s");
            $sql = "insert into EntryPass(user_id, event_id, time_buy, time_last)
                values($user_id, $event_id, '$cur_time', '$end_time')";
//            echo $sql;

            $conn->query($sql) or die("Fail to insert entry pass");
        }
    }
    else{
        echo "Unexpected parameters";
    }
} else{
    echo "Unexpected accessing!";
}

$success_flag=true;

$logged_flag=false;
session_start();
//如果用户未登录，即未设置$_SESSION['user_id']时，执行以下代码
if(isset($_SESSION['user_id'])){
    $logged_flag=true;
}

?>

<body>
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php
                    if ($logged_flag){
                        echo '<a href="#">My Page</a>';
                    }else{
                        echo '<a href="#">Sign In</a>';
                    }
                    ?>
                </li>
                <li>
                    <?php
                    if ($logged_flag){
                        echo '<a href="#">Log Out</a>';
                    }else{
                        echo '<a href="register.php">Sign Up</a>';
                    }
                    ?>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="main-container">
        <h1 class="title">Sign Up</h1>
        <hr/>
        <div class="col-md-2"></div>
        <div class="col-md-8" style="padding-left: 0px;">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 20px;">State</div>
                <div class="panel-body" style="text-align: center;">
                    <ul style="list-style-type: none;font-size: 20px">
                        <li>Event_id: <?php echo $event_id ?></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>

    </div>
</div>

<div style="padding-left: 80px;padding-right: 80px;">
    <hr/>
</div>

<footer>
    <ul class="share-group">
        <li>item1</li>
        <li>item2</li>
        <li>item3</li>
        <li>item4</li>
        <li>item5</li>
    </ul>
    <div class="copy">
        &copy;Contact Information: <a href="mailto:tammytangg@gmail.com">tammytangg@gmail.com</a>
    </div>
</footer>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugin/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>

</script>
</body>
</html>



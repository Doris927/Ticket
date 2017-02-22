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
    <link href="css/booking.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
//    $user_id=$_GET['user_id'];
//    $event_id=$_GET['event_id'];
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
            <a class="navbar-brand" href="#">Ticket</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Event<span class="sr-only">(current)</span></a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Log In</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<ol class="breadcrumb">
    <li><a href="#">Event</a></li>
    <li><a href="#">Book</a></li>
</ol>
<div class="book-container row">

    <h1>Book Sheet</h1>
    <hr/>
    <div class="col-md-8" style="padding-left: 0px">
        <div class="panel panel-default">
            <div class="panel-heading">Please enter your information</div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="inputName">Full Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="TANG CHENMIN">
                    </div>
                    <div class="form-group">
                        <label for="inputState">State</label>
                        <input type="text" class="form-control" id="inputState" placeholder="Shiga Ken">
                    </div>
                    <div class="form-group">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity" placeholder="Otsu Shi">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Matsugaoka 6-1-1 423">
                    </div>
                    <div class="form-group">
                        <label for="inputHolder">Card Holder</label>
                        <input type="text" class="form-control" id="inputHolder" placeholder="TANG CHENMIN">
                    </div>
                    <div class="form-group">
                        <label for="inputCard">Card Number</label>
                        <input type="text" class="form-control" id="inputCard" placeholder="1234567890">
                    </div>


                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    <button class="btn btn-default btn-lg">Back</button>
                </form>
            </div>
        </div>
    </div>

    <div style="padding-right: 0px;" class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Event Information</div>
            <div class="panel-body">
                <ul style="padding: 10px;list-style-type: none;">
                    <li><p>Event: XXX Concert 2017</p></li>
                    <li><p>City: Tokyo</p></li>
                    <li><p>Location: Tokyo Station </p></li>
                    <li><p>Date and Time: 2017/02/25 11:30 - 15:30</p></li>
                    <li><p>Price: $100</p></li>
                </ul>

            </div>
        </div>
    </div>




</div>
<div  class="row" style="padding-left: 80px;padding-right: 80px;">
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
    $(function(){
        $('.carousel').carousel();
    });

</script>
</body>
</html>
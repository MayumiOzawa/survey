<!doctype <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">	
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="descripthin"content
<meta name="author" content="">
<title>bootstrap練習</title>
 <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
<!--Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
<div class="container" >

<button type="button" class="btn btn-default btn-lg">
<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
</button>
</div>
</div>
	<div id="hello" class="takuya">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-lg-8 col-lg-offset-2 centered">
	    			<!-- <h1> bootstrap練習　</h1>
	    			<h2>free bootstrtrap </h2> -->
	    		<body>

        <?php  
    print 'welcome!!!!!!';
    print $_POST['nickname'];
    print  ' 様';
        ?>
    </body>
	    		</div><!-- /col-lg-8 -->
	    	</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /hello -->

</body>
</html>
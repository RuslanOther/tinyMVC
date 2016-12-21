<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
</head>
<body>
<div class="container">
  <h1>Note</h1>
  <div class="main-content">
    <div class="top-header">
        <div class="col-md-8 top-nav">
          <ul class="res">
            <li>
              <a href="#home">
                <i class="glyphicon glyphicon-user"></i> Account
              </a>
            </li>
            <li>
              <a class="active" href="#">
                <i class="glyphicon glyphicon-cog"></i> Settings
              </a>
            </li>
          </ul>
         </div>
      <div class="clearfix"></div>
    </div>

    <?php include $content_view; ?>

  </div>
   <!--//container-->
</body>
</html>

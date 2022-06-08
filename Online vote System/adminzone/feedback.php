

<!DOCTYPE html
<html>
<head>
	<title>feeedback</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/hover.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function()
      {
          $(".w").click(function()
          {
            var d=$(this).attr("data");
$("#txts").val(d);
            for(var i=1;i<=5;i++)
            {
              if(i<=d)
              {
                $("#img"+i).css("color","orange");
              }
              else
              {
                $("#img"+i).css("color","white");
              }
            }
          })
      })



    </script>
    <style>
    	.feed{
    		height: 540px;
    		width: 100%;
    	    background-image: url(for.jpg);
        }

    		.f1{
	min-height: 300px;
	position: relative;
	float: left;
    	}

    </style>
</head>
<body>
	<div class="container-fluid">

<!-----------headerr--------------->
<div class="row">

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: black;min-height: 40px;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" id="n1">Home</a></li>
        <li><a href="about.php" id="n1">About Us</a></li>
        
        <li><a href="contact.php" id="n1">Contact Us</a></li>
      <li><a href="logout.php"><button class="btn btn-danger">Log Out</button></a></li>
      
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
</div>


<!----------------Feedback masage---------------------->
<div class="row">
<div class="feed" style="margin-top: -1.5%;">
		
        <div class="col-sm-12">
        	<div class="col-sm-3"></div>
        	<div class="col-sm-6">


        	<form action="codes/feedbackcode.php" method="post">
			<b><h3 style="color: white;">Name</h3></b><input type="text" name="name" placeholder="your name" class="form-control" style="width: 100%;height: 50px;background-color: #f3f3f3;"><b><h3 style="color: white;">Comment</h3></b><input type="text" name="sub" placeholder="write your noyes or question here...." class="form-control" style="width: 100%;height: 150px;background-color: #f3f3f3;">

<input type="hidden" name="star" id="txts">
    
			<div class="col-sm-3"></div>
</div>
<div class="col-sm-12" style="margin-top: 2%;">
<div class="col-sm-5"></div>
<div class="col-sm-2">
  <b><h1 style="color: white;text-align: center;">Star Rating</h1></b>
<span class="fa fa-star fa-3x w" data="1" id="img1"></span>
<span class="fa fa-star fa-3x w" data="2" id="img2"></span>
<span class="fa fa-star fa-3x w" data="3" id="img3"></span>
<span class="fa fa-star fa-3x w" data="4" id="img4"></span>
<span class="fa fa-star fa-3x w" data="5" id="img5"></span>

  
</div>
<div class="col-sm-5"></div>

</div>
<div class="col-sm-12" style="height: 15px;"></div>
<input type="submit" value="submit" class="btn btn-success" style="margin-left: 35%;width: 30%">
</form></div>
</div>


<div class="row">
  
  <div class="col-sm-12" style="min-height: 70px;background-color: black">
<div class="col-sm-12" ><h2 style="color:white;text-align:center">Devloped by Vishal Singh & Our Team</h2></div>
         <div class="col-sm-12">
                                <marquee><h3 style="color:lightyellow;margin-top: 30px;">This webiste under Guided by Mr. Rahul Singh</h3></marquee>                  </div>

</div>

        
        
</div>


</div>
</body>
</html>
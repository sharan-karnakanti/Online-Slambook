<?php
	session_start();
	require_once '../config/dbcon.php';
  
	if ($_SESSION['uname']) {


		
	}
	else
	{
		header("Location: ../ ");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title> Hey <?php echo $_SESSION['uname']; ?></title>
	<?php require_once 'links.php'; ?>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
	<div class="container">
		<!--**************** Nav Bar Added *****************-->
			<?php require_once 'navbar.php'; ?>
		<!--************** Nav Bar Ended *******************-->

		<!--************** Add Friend's Card start *********-->	
  		<div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="../images/friends1.jpg">
              <span class="card-title" style="color:ghostwhite">Add New Friend</span>
            </div>
            <div class="card-content">
              <p>Adding a new friend to your life can be a rewarding and enriching experience. It starts with openness and a willingness to connect with others. Engage in activities or join groups where you can meet people who share your interests and values. Take the time to listen and learn about them, showing genuine interest and kindness. Building trust and sharing experiences will help solidify the bond. Remember, friendships grow with mutual respect, understanding, and effort. Embrace the journey of getting to know someone new, and enjoy the positive impact it brings to your life.</p>
            </div>
            <div class="card-action">
              <a href="addfriend.php">Click Here To Add New Friend</a>
            </div>
          </div>
        </div>
      </div>
      <!--************** Add Friend's Card End *************-->

      <!--************** View Friend's Card start *********-->
      
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="../images/friends.jpg">
              <span class="card-title" style="color:deeppink"><b>View Friend's</b></span>
            </div>
            <div class="card-content">
              <p>Love is the only force capable of transforming an enemy into friend.</p>
            </div>
            <div class="card-action">
              <a href="viewfriend.php">Click Here To View Friend's</a>
            </div>
          </div>
        </div>
    	<!-- </div> -->
      <!--************** View Friend's Card End *********-->

	</div>
</body>
</html>
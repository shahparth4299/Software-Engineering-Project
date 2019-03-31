<!DOCTYPE html>
<html>
<?php
	include 'add.html';
?>
	<body>
		<nav>
		    <div class="nav-wrapper cyan darken-4">
		      <a href="#" class="brand-logo">Attendance Management</a>
		      <?php
		      	if(!isset($_SESSION['username'])){
		      		echo '<ul id="nav-mobile" class="right hide-on-med-and-down">
		      <li><a href="#">Login</a></li>  
		      </ul>';
		      	}
		      	else
		      	{
		      		echo '<ul id="nav-mobile" class="right hide-on-med-and-down">
		     	 		<li><a href="#">'.$_SESSION["username"].'</a></li> 
		     	 		<li><a href="logout.php">Logout</a></li>  
		      			</ul>';	
		      	}
		      ?>
		    </div>
		  </nav>
	</body>
</html>
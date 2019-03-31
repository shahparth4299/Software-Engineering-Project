<?php
	include "add.html";
	include("admin_class.php");
	$aname = $_POST['aname'];
	$psw = $_POST['password'];
	$table = "admin";
	$admin = new Admin_Management;
	$admin->login($table,$aname,$psw);
	include 'navbar.php';
?>
<h4><center>Select Option</center></h4>
<div class="container">
<ul class="collection">

<li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="admin_option.php?option=Display Data">
      		<h6>Display Data</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
</li>
<li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">
      	<a href="admin_option.php?option=Send Mail">
      		<h6>Send Mail</h6>
  		</a>
      </span>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
</li>
</ul>
</div>
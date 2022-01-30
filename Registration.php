<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header.php');
include_once('link.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>Student Registration</h1>
  <!-- studentname -->
	<div class="form-group">
    <label class="control-label col-sm-2" for="studentname">Student Name:</label>
    <div class="col-sm-6">
      <input type="text" name="studentname" class="form-control" id="studentname" placeholder="Enter your name">
    </div>
  </div>
  <!-- studentid -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="studentid">Student ID:</label>
    <div class="col-sm-6">
      <input type="number" name="studentid" class="form-control" id="studentid" placeholder="Enter ID">
    </div>
  </div>
  <!-- studentcg -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="studentcg">Student CGPA:</label>
    <div class="col-sm-6">
      <input type="number" step="any" name="studentcg" class="form-control" id="studentcg" placeholder="Enter CGPA">
    </div>

  </div>
  <!-- studentdeptid -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="studentdeptid">Student Department:</label>
    <div class="col-sm-6">
      <input type="number" name="studentdeptid" class="form-control" id="studentdeptid" placeholder="Enter Dept. ID">
      <div class="input-group-append">
        <!--<span class="input-group-text">Check you dept number here</span>-->
        <a href="#" data-toggle="tooltip" title="1 Biology
2 Math
3 Computer Science
4 Electrical
5 Mechanical">Check you dept number here</a>
      </div>
    </div>
  </div>
  <!-- studentbatch -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="studentbatch">Student Batch:</label>
    <div class="col-sm-6">
      <input type="number" name="studentbatch" class="form-control" id="studentbatch" placeholder="Enter Student Batch">
    </div>
  </div>
  <!-- mothername -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="mothername">Mother Name:</label>
    <div class="col-sm-6">
      <input type="text" name="mothername" class="form-control" id="mothername" placeholder="Enter Mother name">
    </div>
  </div>
  
  <!-- fathername -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="fathername">Father Name:</label>
    <div class="col-sm-6">
      <input type="text" name="fathername" class="form-control" id="fathername" placeholder="Enter Father name">
    </div>
  </div>
  

  <!--<div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Gender:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
    </div>
  </div>-->

  <!-- email -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  <!-- password -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-6"> 
      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>


  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
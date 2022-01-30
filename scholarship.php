<?php 
include_once('link.php');
include_once('header1.php');
include_once('connection.php'); 
?> 

<!DOCTYPE html> 
<html> 
	<head> 
		<title> Merit-Cum-Need Scholarship </title> 
		
	</head> 
	<div id="frmRegistration">
<form class="form-horizontal" action="scholarship_code.php" method="POST">
	<h1>Scholarship Application</h1>
    <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Scholarship Type</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="sch_flag" value="0">MCN</label>
	    <label class="radio-inline"><input type="radio" name="sch_flag" value="1">Merit</label>
    </div>
  </div>
  <!-- motherincome -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="motherincome">Mother Income:</label>
    <div class="col-sm-6">
      <input type="number" name="motherincome" class="form-control" id="motherincome" placeholder="Enter Mother income">
    </div>
  </div>
  <!-- fatherincome -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="fatherincome">Father Income:</label>
    <div class="col-sm-6">
      <input type="number" name="fatherincome" class="form-control" id="fatherincome" placeholder="Enter Father income">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>


	</body> 
	</html>
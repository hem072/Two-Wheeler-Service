
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../bower_components/bootstrap/dist/css/two-wheeler.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

     <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.js"></script>
	  <!--Validate Plugin-->
        <script src="../dist/js/jquery.validate.js">  </script>
        <script src="../dist/js/additional-methods.js"></script>
    <!--Form Validation-->
    <script src="../dist/js/add-service.js"></script>

    <script>
    
    </script>
   
  

</head>
<body class="customlogin">
<!-- Page Content -->
	<div class="row">
	<div class="col-lg-1"></div>
            <div class="col-lg-10">
                <h1 class="page-header">Add Vehicle
                    <small></small>
                </h1>
              	<ol class="breadcrumb">
  					<li class="breadcrumb-item"><a href="#">Home</a></li>
  					<li class="breadcrumb-item active">Library</li>
				</ol>          
		</div>
        </div>
        <!-- /.row -->
        
    
        <!-- Content Row -->
        <div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">			
				<div class="panel panel-primary">
					 <div class="panel-heading">Add Vehicle</div>
	  					<div class="panel-body">
	    					<form class="form-horizontal" action="addvehicle.php" method="POST">
	    						 <div class="form-group">
      							<label for="inputEmail" class="col-lg-3 control-label">Name:</label>
									     <div class="col-sm-9">
									       <input type="text" class="form-control" id="inputEmail" placeholder="Enter Vehicle Name" name="name">
									     </div>
    							 </div>
	    					
	    						 <div class="form-group">
      							   <label class="col-lg-3 control-label">Chassis No:</label>
      									 <div class="col-sm-9">
        								   <input type="text" class="form-control" id="inputEmail" placeholder="Enter Chessis Number" name="chsno">
      									 </div>
    							 </div>
    							 
    							  <div class="form-group">
      								<label for="inputEmail" class="col-lg-3 control-label">Vehicle No:</label>
      									 <div class="col-sm-9">
        								   <input type="text" class="form-control" id="inputEmail" placeholder="Enter Vehicle Number" name="vno">
      									 </div>
    							 </div>
    							 
    							 <div class="form-group">
								    <label for="select" class="col-lg-3 control-label">Branch:</label>
								      <div class="col-lg-9">
								        <select class="form-control" id="select"  name="bno">
								          <option>1</option>
								          <option>2</option>
								          <option>3</option>
								          <option>4</option>
								          <option>5</option>
								        </select>
								      </div>
    							 </div>
								 <div class="form-group">
								    <label for="select" class="col-lg-3 control-label">User Name:</label>
								      <div class="col-lg-9">
									   <select class="form-control" id="select" name="uname">
    							<?php
								include_once 'database_connect.php';
								$query="SELECT username from login";
								$rs=mysql_query($query);
								while($row=mysql_fetch_array($rs))
								{
								
								
								
								
							
								
								
								
								
								
								?>
    							 
								       
								<option><?php echo $row['username']; ?>	</option> <?php } ?>
										  

								          
								        </select>
								      </div>
    							 </div>
    							 
    							  <div class="form-group">
								      <div class="col-lg-10 col-lg-offset-3">
								        <button type="reset" class="btn btn-default">Cancel</button>
								        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
								      </div>
								  </div>
	    					</form>
	    					
	  					</div>
				</div>		
			</div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2017</p>
                </div>
            </div>
        </footer>

  
    </body>
    
    </html>
	<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$chs=$_POST['chsno'];
	$vno=$_POST['vno'];
	$bno=$_POST['bno'];
	$uname=$_POST['uname'];
	$qur="Insert into addvehicle values('".$name."','".$chs."','".$vno."','".$bno."','".$uname."')";
	if(mysql_query($qur))
	{
	  ?>
	  <script>  alert("ADDED");</script>
		<?php
	}
echo "Nor";
	
}

	
	
	?>
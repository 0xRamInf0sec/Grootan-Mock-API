<?php
$id=$_POST['id'];
$string = "https://usersgroot.free.beeceptor.com/userid=".$id;
$data = json_decode(file_get_contents($string),true);
?>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style>


.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  padding: 5px 10px;
  background: #555;
  color: #f1f1f1;
  text-align:center;
}
.container
{
	padding-top:80px;
	padding-bottom:80px;
	padding-left:250px;
	
}

</style>
<body>
<div class="header" id="myHeader">
  <h2>User Details</h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="https://i.pinimg.com/originals/7c/c7/a6/7cc7a630624d20f7797cb4c8e93c09c1.png" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <?php echo $data['name']; ?></h4>
                        
                        <p>
						
                            <b> User ID   :</b> <?php echo $data['userid']; ?>
                      
							<hr>
							<b> DOB       :</b> <?php echo $data['dob']; ?>
                            <hr>
				
							<b> Age       :</b> <?php echo $data['age']; ?>
                            <hr>
							<b> Address   :</b> <?php echo $data['more']['address_line1'].','.$data['more']['address_line2'].','.$data['more']['address_line3']; ?>
                            <hr>
							<b> Phone number: </b> <?php echo $data['more']['phone']; ?>
                           <hr>
						</p>
						<?php
						if($id==1)
						{
						echo "<form action='users.php' method='POST'>
					   <input type='hidden' name='id' value=".($id+1)."><button type='submit' class='btn btn-primary'>Next</i></button>
					   </form>";
						}
						else
						{
							echo "<form action='users.php' method='POST'>
					   <input type='hidden' name='id' value=".($id-1)."><button type='submit' class='btn btn-primary'>Previous</i></button>
					   </form>";
					   echo "<form action='users.php' method='POST'>
					   <input type='hidden' name='id' value=".($id+1)."><button type='submit' class='btn btn-primary'>Next     </i></button>
					   </form>";
						}
						?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>
<div class="jumbotron">
 <h1 class="display-4">GROOTAN USERS</h1>
<ul class="list-group pmd-list pmd-card-list">
<?php
$string = "https://usersgroot.free.beeceptor.com/users";
$data = json_decode(file_get_contents($string),true);
 foreach($data as $val)
 {
	 echo "<li class='list-group-item d-flex align-items-center'>
        <div class='media-body'>
            ".$val['name']."
        </div>
		<form action='users.php' method='POST'>
		<input type='hidden' name='id' value='".$val['userid']."'>
        <button type='submit' class='btn btn-default'><i class='fa fa-eye'></i></button>
		</form>
    </li>";
 }
?>
</ul>
</div>
</body>
</html>

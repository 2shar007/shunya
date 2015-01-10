<?php
include_once("static.php");

// Add and manipulate DB from below
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$resume=$_POST['resume'];
	$aadhaar=$_POST['aadhaar'];
	$designation=$_POST['designation'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$dob = $_POST['dobd']."-".$_POST['dobm']."-".$_POST['$doby'];
	
	$q = "INSERT INTO `agent` (name, dob, email, gender, designation, resume, address, phone, aadhaar) VALUES ('".$name."','".$dob."','".$email."','".$gender."','".$designation."','".$resume."','".$address."','".$phone."','".$aadhaar."')";
	
	query($q);
} else {
?>
<html>
	<head>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="assets/shunya.ico">
	</head>
<body>
	<div class="col-lg-4">
		<form role="form" method="post" action="static.php">
			<div class="form-group">
				<label>Name</label>
				<input class="form-control" placeholder="Enter full name" name="name">
				<p class="help-block">As mentioned in Aadhaar</p>
			</div>
                            
            <div class="form-group">
				<label>Aadhaar Number</label>
				<input class="form-control" name="aadhaar" placeholder="Enter Aadhaar number" size="12" maxlength="12">
				<p class="help-block">As mentioned in Aadhaar</p>
            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" name="phone" placeholder="Enter phone number" size="10" maxlength="10">
                            </div>

                            <div class="form-group">
                                <label>Resume</label>
                                <input name="resume" type="file">
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline1" value="male" checked>Male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline2" value="female">Female
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline3" value="other">Other
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Designation</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="designation" id="optionsRadios1" value="junior" checked>Junior
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="designation" id="optionsRadios2" value="associate">Associate
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="designation" id="optionsRadios3" value="senior">Senior
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
								
                                <label>Date of Birth</label>
                                <select name="dobd" class="form-control-inline">
									<?php for($i=1;$i<=31;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                </select>
                                
                                <select name="dobm" class="form-control-inline">
                                    <?php for($i=1;$i<=12;$i++) { echo "<option value='".$i."'>".$i."</option>"; } ?>
                                </select>
                                
                                <input class="form-control-inline" name="doby" placeholder="YYYY" size="4" maxlength="4">
                                
                            </div>
                                
                            <div class="form-group">
								<label>Fingerprint</label>
								<p class="form-control-static">Initiate scanning</p>
							</div>

                            <button type="submit" class="btn btn-primary">Add</button>
                            <button type="reset" class="btn btn-default">Clr</button>

                        </form>

		</div>
	</body>
</html>
<?php
}

$res = get_agents();
while($r = mysql_fetch_assoc($res)){
	echo $r['id']."::".$r['name']."::".$r['dob']."::".$r['email']."::".$r['gender']."::".$r['designation']."::".$r['resume']."::".$r['address']."::".$r['phone']."::".$r['aadhaar']."<br />";
}
?>

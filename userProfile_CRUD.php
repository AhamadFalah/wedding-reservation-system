<?php
include_once 'header.php';
include_once 'includes/databasehandle.inc.php';
$id= $_SESSION["UID"];
//$id=4;
$sql="SELECT * FROM signupdata WHERE UserID=$id;";
$result=mysqli_query($con,$sql);

if($result){
   $row=mysqli_fetch_assoc($result);
   $fname=$row["userF_Name"];
   $lname=$row["userL_Name"];
   $gender=$row["user_Gender"];
   $dob=$row["DOB"];
   $username=$row["userUID"];
   $email=$row["UserEmail"]; 
   $phoneno=$row["user_PhoneNo"];
}
if(isset($_POST["update"])){

    $Fname=$_POST["user_name1"];
    $Lname=$_POST["user_name2"];
    $Gender=$_POST["gendervalue"];
    $Dob=$_POST["age"];
    $Username=$_POST["Uid"];
    $Email=$_POST["user_Email"]; 
    $Phoneno=$_POST["user_phoneNumber"];
    $image=$_FILES["profile_image"];
    $imagename=$image["name"];
    $imagetmp=$image["tmp_name"];
    $imageseperate=explode(".",$imagename);
    $imageextention=strtolower($imageseperate[1]);
    $extention=array("jpeg","jpg","png");

    if(in_array($imageextention,$extention)){
    $newImagename=uniqid("",true).".".$imageextention;
    $upload_image='profileimages/'.$newImagename;
    move_uploaded_file($imagetmp,$upload_image);
    $update=updateUserProfile($con,$id,$Fname,$Lname,$Gender,$Dob,$Username,$Email,$Phoneno,$upload_image);
    }
}
?>
<?php
/*function uploadImage($con,$upload_image){
    $id= $_SESSION["UID"];
    $sql="INSERT INTO signupdata (profileImage) VALUES ('$upload_image') WHERE UserID=$id ;";
    $result=mysqli_query($con,$sql);
}*/
function updateUserProfile($con,$id,$fname,$lname,$gender,$dob,$username,$email,$phoneno,$upload_image){
    $sql = "UPDATE signupdata SET  userF_Name='$fname',userL_Name='$lname',user_Gender='$gender',DOB='$dob',userUID='$username',UserEmail='$email',user_PhoneNo='$phoneno',profileimage='$upload_image' WHERE UserID = $id ;";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"<script>alert('Details updated');</script>";
    }
    else{
        echo "<script>alert('Error in updating values');</script>";
    }
    /*$stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: userProfile_CRUD.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssis" ,$fname,$lname,$gender,$dob,$username,$email,$phoneno,$id,$upload_image);
    mysqli_stmt_execute($stmt);
    //session_regenerate_id(true);
    /*if(mysqli_stmt_execute($stmt)){
        header("location:includes/logout.inc.php");
    }
    mysqli_stmt_close($stmt);*/
}?>
<center><img src="images/LOGO.png" alt=""></center>
<h1>Edit user profile</h1>
<div class="registraionform">
    <script src="Javascript/SignUpValidateusercredentials.js"></script>
<form action="" method="post" onsubmit="return validateUserCredentails()" enctype="multipart/form-data">
    <label for="Name">Enter full name</label>
    <input type="text" id="fname" name="user_name1" placeholder="First name" value=<?php echo $fname?>>     
    <input type="text" id="lname" name="user_name2" placeholder="Last name" value=<?php echo $lname?>>
    <label for="age">Enter date of birth</label>
    <input type="date" id="age" name="age" placeholder="Age" value=<?php echo $dob?>>
    <label for="gender">Gender</label>
    <select name="gendervalue" id="genderselect" value=<?php echo $gender?>>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
    <label for="Email">Enter Email</label>
    <input type="email" id="email" name="user_Email" placeholder="Email" value=<?php echo $email?>>
    <label for="Email">Enter Phonenumber</label>
    <input type="text" id="phonumber" name="user_phoneNumber" placeholder="number" value=<?php echo $phoneno?>>
    <label for="Username">Enter Username</label>
    <input type="text" id="username" name="Uid" placeholder="Enter Username" value=<?php echo $username?>>
    <label for="Username">Upload Profile image:</label>
    <input type="file" style="margin-bottom: 20px;" name="profile_image">
    <input type="submit" id="submitbtn" name="update" value="Update User profile"> <input type="reset" id="resetbtn" value="reset">
</form>
</div>




<?php
include_once 'footer.php';
?>
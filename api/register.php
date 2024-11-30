<?php
include("connect.php");

$name = $_POST['name'];
$nid = $_POST['number'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$role = $_POST['role'];

if($password==$cpassword){
    move_uploaded_file($tmp_name,"../uploads/$image");
    $insert = mysqli_query($connect,"INSERT INTO user(name,nid,password,address,photo,role,status,votes)
    VALUES('$name','$nid','$password','$address','$image','$role',0,0)
    ");
    if($insert){
        echo'
        <script>
        alert("Registation successful");
        window.location = "../";
        </script>
        ';

    }else{
        echo'
        <script>
        alert("Some error occured!");
        window.location = "../routs/register.html";
        </script>
        ';

    }

}else{
    echo'
    <script>
    alert("password do not match!");
    window.location = "../routs/register.html";
    </script>
    ';
}



?>
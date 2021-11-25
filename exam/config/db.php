<?php
$conn =mysqli_connect('localhost','root','','lauben');
if(isset($_POST['name'],$_POST['number'],$_POST['email'],$_POST['password'])){
    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $number =mysqli_real_escape_string($conn,$_POST['number']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);

    $query="INSERT INTO mpairwe(name,number,email,password) values('$name ','$number','$email','$password')";
    if(mysqli_query($conn,$query)){
        echo 'it worked';
} 
    else{
        echo "it failed";
    }
}
else{
    echo"it sure worked";
}
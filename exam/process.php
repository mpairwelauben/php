<?php
echo 'javas.hphphp';
$conn =mysqli_connect('localhost','root','','poseidon');

if(isset($_POST['name'],$_POST['number'],$_POST['email'],$_POST['password'])){
    // echo 'your name is '.$_POST['name'];
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $number=mysqli_real_escape_string($conn,$_POST['number']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $query="INSERT INTO lau(name,number,email,password) VALUES('$name','$number','$emal','$password')";
    if(mysqli_query($conn,$query)){
        echo 'submiteed succesfully';

    }else{
        echo "failed ma peeps";
    }
}else{
    echo "error loading files";
}

// if(isset($_POST['title'] 
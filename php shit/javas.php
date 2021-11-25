<?php
//making a connection to the backend in the database
$conn =mysqli_connect('localhost','root','','poseidon');
// echo "damn your shit is up \n";
//checking if variables are set in php we use the isset function
if(isset($_POST['title'] , $_POST['email'] , $_POST['password'])==True){
    // if(isset($_POST['title'])){
        //declaring variables
        //mysqli_real_escape_string escapes special characters when strings are passed 
        //in the query
    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
// echo 'POST:your title is'.$_POST['title'];

// $query="INSERT INTO userz(title,email,password) VALUES('$title','$email','$password')";
//the query variable used to query objects in the database
$query ="INSERT INTO mus(title,email,password) VALUES('$title','$email','$password')";
// $query="INSERT INTO user(title) VALUES('$title')";

    if (mysqli_query($conn,$query)){
        // header('Location:'..ROOT_URL..'');
        echo 'user added successfully......';
      }
        else{
            echo 'error:'.mysqli_error($conn);
        }
        
    }


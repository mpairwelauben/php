<?php
$conn =mysqli_connect('localhost','root','','lauben');
if(isset($_POST['submit'])){
    $name =mysqli_real_escape_string($conn,$_POST['name']);
    $number =mysqli_real_escape_string($conn,$_POST['number']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);

    $query="UPDATE mpairwe SET
    name='$name',
    number='$number'
    email='$email'
    WHERE id={update}";
    
    
    ;
    if(mysqli_query($conn,$query)){
        echo 'it updated';
} 
    else{
        echo "it failed to update";
    }
}
else{
    echo"it sure worked";
}
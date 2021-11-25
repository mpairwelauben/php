<?php
$conn =mysqli_connect('localhost','root','','lauben');
if(isset($_POST['delete'])){
    $delete =mysqli_real_escape_string($conn,$_POST['delete']);

    $query="DELETE FROM mpairwe where id={$delete}";
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

foreach ($variable as $key => $value) {
    # code...
}

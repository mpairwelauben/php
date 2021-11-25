<?php include_once "header.php" ;?>
<?php
$conn =mysqli_connect('localhost','root','','poseidon');
$sql ='SELECT * from mus';

$result = mysqli_query($conn,$sql);
$resultCheck =mysql_num_rows($result);

//fetching data
if($resultCheck >0){
while($row=mysqli_fetch_assoc($result));
echo $row['title'];
}
?>



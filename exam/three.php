<?php
require('config/db.php');
require('config/delete.php');
$query ='SELECT * FROM mpairwe ';
$result=mysqli_query($conn,$query);
$posts =mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>
<body>

  <h1>posts</h1>
<?php foreach($posts as $post):?>
<div>
<table class="table table-sm table-stripped containercard card-body">
    <tr>
        <th>name</th>
        <th>number</th>
        <th>email</th>
    </tr>  
    <tr>
    <td>name is <?php echo $post['name'];?></td>
    <td>number is <?php echo $post['number'];?></td>
    <td>email is <?php echo $post['email'];?></td>
    <td><button>update</button></td>
    <form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>">
       <td><input type="hidden" name="delete" value="<?php echo $post['id'];?>"/><td>
<input type="submit" name="delete" value="Delete"/>
   </form>
    </tr>
</div>
    <?php endforeach;?>

</body>

</html>


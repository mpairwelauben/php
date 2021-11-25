<?php
echo "let the dance begin";
if(isset($_POST['title'])){
    echo "it worked";
    $title =($_POST['title']);
    echo $_POST['title'];
}
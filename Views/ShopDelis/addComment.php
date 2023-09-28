<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=webquan2', 'root', '');

$error = '';

$comment_content = $_POST["comment_content"];
$productID = $_POST["productID"];
$userID = $_POST["userID"];

if($error == '')
{
 $query = "INSERT INTO comments(productID,userID,content) VALUES($productID,$userID,'$comment_content')";
 $statement = $connect->prepare($query);
 $statement->execute();
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>


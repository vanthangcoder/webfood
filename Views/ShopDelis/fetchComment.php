<?php

//fetch_comment.php

$dsn = 'mysql:host=localhost;dbname=webquan2';
$username = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);
$id = $_GET['id'];

$query = "SELECT cmt.*, us.* FROM comments as cmt, tbl_user as us WHERE cmt.userID = us.user_id AND cmt.productID = $id ORDER BY commentID DESC";

$statement = $db->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <ul class="cmt-item">
    <img class="cmt-img" src="https://pdp.edu.vn/wp-content/uploads/2021/01/hinh-anh-cute-de-thuong.jpg" alt="">
    <div class="cmt-content">
        <h3 class="cmt-name">'.$row["name"].' <span class="cmt-date">'.$row["dateCreated"].'</span></h3>
        <p class="cmt-desc">'.$row["content"].'</p>
    </div>
</ul>
 ';
}
echo $output;



?>

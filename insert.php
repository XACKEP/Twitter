<?php 

 $connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_pn_10');
						mysqli_query($connect, "INSERT INTO tweeet (logo, title, text, img, id) VALUES ('images/avatar.jpg', '@kaka','" . $_POST['twit'] . "', 'images/roscosmos.jpg', '')");
header('Location: http://aaaapple/Twitter/index.php');
?>
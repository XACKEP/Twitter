<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_pn_10');
						$id = mysqli_real_escape_string($connect, $_POST['id']);
						$sqldelete = "DELETE FROM tweeet WHERE id = '$id'";
						echo $connect->query($sqldelete);
						

?>
<script>
someTimeout = 10; // редирект через 4 секунды
window.setTimeout("document.location = 'http://aaaapple/Twitter/index.php';", someTimeout);
</script>

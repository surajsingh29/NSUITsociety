<?php

include('connection.php');

$sql = "select * from events order by event_no desc limit 3";
$result = mysqli_query($link, $sql);

?>

<?php
  $entityBody = file_get_contents('php://input');
  $txtphp = json_decode($entityBody, true);
  $query = "INSERT INTO `nhatki` (`id`, `ngay`, `noidung`) VALUES (NULL, '".$txtphp['ngay']."', '".$txtphp['noidung']."')";

  $conn = mysqli_connect('localhost', 'root', '', 'dtn');
  mysqli_set_charset($conn,"utf8");
  $myArray = array();
    mysqli_query($conn, $query);

?>
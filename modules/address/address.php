<?php
$sql="SELECT*FROM footer";
$query=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($query);
?>
<h3><?php echo $row['Address']?></h3>
<p><?php echo $row['content_Address']?></p>
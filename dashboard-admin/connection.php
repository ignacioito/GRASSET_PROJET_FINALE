
<?php $link = mysqli_connect("127.0.0.1", "root", "", "BF21");
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
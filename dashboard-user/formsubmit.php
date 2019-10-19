<?php
$link = mysqli_connect("127.0.0.1", "root", "", "BF21");
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$birthdate = mysqli_real_escape_string($link, $_REQUEST['birthdate']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']);
$weight = mysqli_real_escape_string($link, $_REQUEST['weight']);
$height = mysqli_real_escape_string($link, $_REQUEST['height']);
// $bloodpressure = mysqli_real_escape_string($link, $_REQUEST['bloodpressure']);

// Attempt insert query execution
$sqlUser = "INSERT INTO utilisateurs (nom, dateNaissance, genre, adresse, eMail, telephone, poid, taille) VALUES 
('$name', '$birthdate', '$gender', '$address', '$email', '$telephone', '$weight', '$height')";
if (mysqli_query($link, $sqlUser)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sqlUser. " . mysqli_error($link);
}
// $sqlHabits = "INSERT INTO habitudesDeVie (pressionSanguine) VALUES 
// ('$bloodpressure')";
// if (mysqli_query($link, $sqlHabits)) {
//     echo "Records added successfully.";
// } else {
//     echo "ERROR: Could not able to execute $sqlHabits. " . mysqli_error($link);
// }
// // Close connection
// mysqli_close($link);

<?php

$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
$sql = "
CREATE TABLE IF NOT EXISTS Home (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    genre VARCHAR(50) NOT NULL,
    release_year INT NOT NULL,
    duration VARCHAR(20) NOT NULL,
    image_url VARCHAR(255),
    trailer_url VARCHAR(255),
    description TEXT
);
";
$sql = "SELECT id, title, description, genre, release_year, duration, image_url, trailer_url FROM Home";
$result = $conn->query($sql);

?>
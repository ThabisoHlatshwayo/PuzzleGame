<?php
$conn = mysqli_connect("localhost", "root", "", "puzzle_game");
            
// Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// creates a session or resumes the current one based on a session identifier 
//passed via a GET or POST request, or passed via a cookie.
session_start();
//creates connection to the database.
$conn = mysqli_connect("localhost", "root", "", "healthyme", 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


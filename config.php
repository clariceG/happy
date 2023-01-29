<?php
// creates a session or resumes the current one based on a session identifier 
//passed via a GET or POST request, or passed via a cookie.
session_start();
//creates connection to the database.
$conn = mysql_connect("localhost", "root", "", "healthyme", 3307);


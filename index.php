<?php


?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HomePage</title>
<head>
    <style>
        .dropdown {
  position: absolute;
  top: 0;
  left: 0;
}

.dropbtn {
  background-color: #f2f2f2;
  color: #333;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #f2f2f2;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #f2f2f2;
}

    </style>
</head>
<body>
<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="#">Home</a>
    <a href="#">Meal Plan</a>
    <a href="#">Workouts</a>
    <a href="#">Challenges</a>
    <a href="#">Contact-Us</a>
    <a href="logout.php">LogOut</a>
  </div>
</div>
</body>
</html>
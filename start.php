<?php?>
<!DOCTYPE html>
<html >
<title>Welcome </title>

  <head>
    <style>
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        text-align: center;
      }

      h1 {
        font-size: 36px;
        margin-top: 100px;
        color: #333;
      }

      h2 {
        font-size: 24px;
        margin-top: 50px;
        color: #333;
      }

      h3 {
        font-size: 18px;
        margin-top: 50px;
        color: #333;
      }

      .links {
        display: flex;
        justify-content: center;
        margin-top: 100px;
      }

      .btn:active{
        transition: 0.7s;
        background-color: white;
        color: grey;
      }

      a {
        font-size: 18px;
        text-decoration: none;
        margin: 0 20px;
        color: #fff;
        background-color: #333;
        padding: 10px 20px;
        border-radius: 5px;
      }

      img{
        float: right;
      }
    </style>
  </head>
  <body>
    <img src="start.jpg" alt="">
    <h1>Welcome to Healthy-Me</h1> 
    <h2>A Weight Control Application<br>At the tap of a button<br>Get a meal plan customised just for you</h2>
    <h3>This is an application website<br>that helps you to calculate your BMI,<br>calorie deficit and get a customised meal plan.</h3>
    <p>To get your customised meal plan, click the Get Started button</p>
    <p>To measure your Body Mass Index, click the BMI Calculator button</p>
    <div class="links">
      <a class="btn" href="register.php">Get Started</a>
      <a class="btn" href="bmi.php">BMI Calculator</a>
    </div>
  </body> 
</html>

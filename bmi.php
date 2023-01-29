<php?>
<!DOCTYPE html>
<html>
<head>
  <style>
    .container {
      background-color: #f2f2f2;
      padding: 30px;
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-size: 18px;
      color: #333;
    }

    input[type="text"] {
      width: 50%;
      padding: 10px;
      font-size: 18px;
      margin-bottom: 20px;
    }

    button {
      padding: 10px 20px;
      font-size: 18px;
      background-color: #333;
      color: #f2f2f2;
      border: none;
      cursor: pointer;
    }

    #result {
      margin-top: 20px;
      font-size: 18px;
      color: #333;
      display: none;
    }
    a {
        font-size: 18px;
        text-decoration: none;
        margin: 0 20px;
        color: #fff;
        background-color: #333;
        padding: 10px 10px;
        border-radius: 5px;
      }
  </style>
</head>
<body>
  <div class="container">
    <h1>BMI Calculator</h1>
    <div class="form-group">
      <label for="weight">Weight (kg):</label>
      <input type="text" id="weight">
    </div>
    <div class="form-group">
      <label for="height">Height (cm):</label>
      <input type="text" id="height">
    </div>
    <button onclick="calculateBMI()">Calculate</button>
    <p id="result"></p>
    <button><a href="start.php">Back</a></button>
  </div>
   

  <script>
    function calculateBMI() {
      var weight = document.querySelector("#weight").value;
      var height = document.querySelector("#height").value;
      var result = document.querySelector("#result");
      
      height = height / 100;
      var bmi = weight / (height * height);
      bmi = bmi.toFixed(2);

      if (bmi < 18.5) {
        result.innerHTML = "Your BMI is " + bmi + ", you are underweight.";
      } else if (bmi >= 18.5 && bmi <= 24.9) {
        result.innerHTML = "Your BMI is " + bmi + ", you have a healthy weight.";
      } else if (bmi >= 25 && bmi <= 29.9) {
        result.innerHTML = "Your BMI is " + bmi + ", you are overweight.";
      } else if (bmi >= 30) {
        result.innerHTML = "Your BMI is " + bmi + ", you are obese.";
      } else {
        result.innerHTML = "Invalid data.Please input your weight and height."
      }
      result.style.display = "block";
    }
  </script>
</body>
</html>

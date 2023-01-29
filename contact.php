<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == 'POST'){
   $username=$_POST['username'];
   $email=$_POST['email'];
   $message=$_POST['message'];

   $sql_insert = "INSERT INTO contact(`username`, `email`,`message`)VALUES ('$username','$email','$message')"; 
   mysqli_query($conn, $sql_insert); 
   echo '<script>alert("Message Sent")</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.contact
{
    position: relative;
    min-height: 100;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #f2f2f2;
}
.contact .content
{
    max-width: 800px;
    text-align: center;
}
.contact .content h2
{
    font-size: 36px;
    font-weight: 500;
    color: #333;
}
.contact .content p
{
    font-weight: 300;
    color: #333;
}
.container
{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}.container .contactInfo
{
    width: 50%;
    display: flex;
    flex-direction: column;
}
.container .contactInfo .box
{
    position: relative;
    padding: 20px 0;
    display: flex;
}
.container .contactInfo .box .icon
{
    min-width: 60px;
    height: 60px;
    background:#fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 22px;
}
.container .contactInfo .box .text
{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: black;
    flex-direction: column;
    font-weight: 300;
}
.container .contactInfo .box .text h3
{
    font-weight: 500;
    color: #00bcd4;
}
.contactForm
{
    width: 40%;
    padding: 40px;
    background: #333;
}

.contactForm h2
{
    font-size: 30px;
    color: #333;
    font-weight: 500;
}
.contactForm .inputBox
{
    position: relative;
    width: 100%;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea
{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #333;
    outline: none;
    resize: none;
}
.contactForm .inputBox span
{
    position: absolute;
    left: 0;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:valid ~ span
{
    color: #e91e63;
    font-size: 12px;
    transform: translate(-50px);
}
.contactForm .inputBox input[type="submit"]
{
    width: 100px;
    background: #00bcd4;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}
@media (max-width: 991px)
{
    .contact
    {
        padding: 50px;
    }
    .container
    {
        flex-direction: column;
    }
    .container .contactInfo
    {
        margin-bottom: 40px;
    }
    .container .contactInfo
    {
        width: 100%;
    }
}label {
    display: block;
    margin: 0 auto;
    width: 100%;
    color: #828282;
    font-family: 'Poppins',
        sans-serif;
}
    </style>
</head>

<body>
<section class="contact" >
        <div class="content">
            <h2>Contact Us</h2>
            <p>Feel Free to contact us at anytime as we will get back to you as 
                soon as possible.
            </p>
        </div>
        <div class="container">
            <div class = "contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>4885 Nyayo Highrise, <br>Odinga Oginga Road, Nairobi <br>36690</p>
                    </div>
                </div>
            
       
                <div class="box">
                    <div class="icon"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>0200000001</p>
                    </div>
                </div>
            
       

                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>WeightControl@gmail.com</p>
                    </div>
                </div>
            </div>
       
        
        
                <div class="contactForm">
                    <form action="" method="POST" >
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <label for="username">Name:</label>
                            <input type="text" name="username" required="required">
                        </div>
                        <div class="inputBox">
                            <label for="email">Email:</label>
                            <input type="text" name="email" required="required">
                        </div>
                        <div class="inputBox">
                            <label for="message">Message</label>
                            <textarea required="required" name="message" placeholder="Type Your Message..."></textarea>
                            </div>

                            <button type="submit">Send</button>
                    </form>
                </div>
        </div>

    </section>
</body>
</html>

<?php
  require('./connection.php');
  if( isset($_POST['name'] )&& isset($_POST['email']) ){
    echo "Hello";
    $name = $_POST["name"];
    echo $_POST["name"];
      $email = $_POST["email"];
      $message = $_POST["message"];
      // Insert data into ContactForm table
      $sql = "INSERT INTO ContactForm (Name, Email, Message) VALUES ('$name', '$email', '$message')";
  
      if ($conn->query($sql) === TRUE) {
          echo "Form submitted successfully!";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }

    // Close the connection
    // $conn->close();

?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solara</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="./CSS/phone.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
   <nav id="navbar">
    <div id="logo">
        <img src="./Images/Logos/solara-logo.png" alt="Solara">
    </div>
    <ul> 
      <li class="item"><a href="#home">Home</a></li>
      <li class="item"><a href="#services-container">Services </a></li>
      <li class="item"><a href="#client-section">Clients</a></li>
      <li class="item"><a href="#contact">Contact</a></li>
    </ul>

   </nav>

   <section id="home">
    <h1 class="h-prime">Welcome to Soloara</h1>
    <p>Discover Timeless Elegance and Precision with Solara Watches:</p>
    <p> Where Every Second Counts.</p>
    <button class="btn">Order Now</button>
   </section>

   <section id="services-container">
    <h1 class="h-prime center">Our Sevices</h1>
    <div id="services">
      <div class="box">
        <img src="./Images/expert-repairs.jpg" alt="">
        <h2 class="h-sec center">Watch Repair and Maintenance</h2>
        <p class="center">Trust your treasured watch to our skilled experts for meticulous restoration, ensuring enduring precision and aesthetic appeal. From delicate mechanics to intricate designs, we honor every facet. With utmost care, we revive its legacy, allowing its elegance to transcend generations.</p>
      </div>

      <div class="box">
        <img src="./Images/Watch-sales.jpg" alt="">
        <h2 class="h-sec center">Watch Sales</h2>
        <p class="center">Explore our exquisite collection of timepieces that blend craftsmanship and style, offering a range of choices to suit every taste. From classic designs to modern innovations, our watch sales feature curated selections that exemplify precision and elegance. Discover the perfect companion to mark every moment and make a statement of timeless sophistication.</p>
      </div>

      
      <div class="box">
        <img src="./Images/watch-costumization.jpg" alt="">
        <h2 class="h-sec center">Watch Customization</h2>
        <p class="center">Elevate your timepiece into a personalized masterpiece with our watch customization services. Unleash your creativity and transform your watch into a unique expression of your style and individuality. Our experts collaborate with you to incorporate custom elements, ensuring your watch becomes a reflection of your personality. Experience the joy of wearing a one-of-a-kind piece that captures both time and essence.</p>
      </div>
      
  </div>
   </section>
   <section id="client-section">
    <h1 class="h-prime center">Our Clients</h1>
      <div id="clients">
        <div class="client-item">
           <img src="./Images/Logos/okhar-logo.png" alt="Our Client">
        </div>
        <div class="client-item">
         <img src="./Images/Logos/Rollex-logo.png" alt="Our Client">
        </div>
        <div class="client-item">
          <img src="./Images/Logos/omega-logo.png" alt="Our Client">
        </div>
        <div class="client-item">
          <img src="./Images/Logos/Sonam-logo.png" alt="Our Client">
        </div>
      </div>

   </section>

   <section id="contact">
      <h1 class="h-prime center">Contact Us</h1>
      <div id="contact-box">
        <form action="./index.php" method="post"> 
          <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="Enter your Name">
          </div>
          <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Enter your Email">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number: </label>
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
          </div>
          <div class="form-group">
            <label for="message">Message: </label>
            <textarea name="message" id="messege" cols="30" rows="10"></textarea>
          </div>
          <input type="Submit">
        </form>
      </div>
   </section>

   <footer>
    <div class="center">
      Copyright &copy; www.Solara.com All rights reeserved!
    </div>
   </footer>
</body>
</html>                                                

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='contact_style.css'>
    <title>Contact Us </title>
</head>
<body>

    <div>
        <?php
            if(isset($_REQUEST['er'])){
                if($_REQUEST['er'] == 1){
                    echo "<p> Upload successfully </p>";
                }
            }
            
        ?>
    </div>

    <hr>
    <div class="logo">
        <img src="images/euroflora-logo.png" alt="">
    </div>
    <br><br>
    <div class="paragraph">
        We are Online! Welcome to Instant Answer Messaging. During the opening hours of the shop, your
    request will be read and managed in real time. If you have already placed an order you can call the
    phone number dedicated to the customers, you received in the summary email.
    </div>
            <br><br>
    <div class="container">
        <form class="contact_form" action="contactdb.php" method="post" enctype="multipart/form-data">

          <div class="row">
              <label for="name">Name*</label>
              <input type="text" id="name" name="name"><br><br>
          </div>
              <label for="email">E-mail*</label>        
              <input type="text" id="email" name="email"><br><br>
          
              <label for="phone">Phone*</label>
           
              <select id="phone" name="phone">
                <option value="sri lanka">Sri Lanka +94</option>
                <option value="india" >India  +91</option>
              </select>
              <input type="number" id="phone" name="phone" placeholder="Mobile Number"><br><br>
            
              <label for="order_code">Order Code</label>
               <input type="text" id="email" name="email" placeholder="Enter the code recieved by email if available"><br><br>
         
              <label for="message">Message*</label>
              <textarea id="message" name="message" placeholder="Describe your request accurately to recieve better info." rows="4" cols="50"></textarea><br><br>
            
              <label for="attachment">Attachment</label>
         
              <input type="file" value="file1" name="file1"><br><br>

              <input type="submit" value="Start">       

        </form>

        
      </div>
   
</body>
</html>
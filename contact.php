<?php
include "includes/config.php";

// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $websiteErr = "";
$name = $email = $phone = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["message"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["message"]);
  }
 

  if (empty($_POST["phone"])) {
    $phoneErr = "phone is required";
  }
else{
  $phone= test_input($_POST["phone"]);
  if(!preg_match('/^[0-9]{10}+$/', $phone)) {
  
    $phoneErr = "phone is required"; 

    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,100,300' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,400,700" rel="stylesheet">
  <link rel="stylesheet" href="./assests/css/style.css">
  <link rel="stylesheet" href="./assests/css/contact.css">
  <style>
.error {color: #FF0000;}
</style>
</head>
<body>

   <?php
include "includes/header.php";
?>


<!-- cards starts -->
<div class="cards">
  <h1 class="section-header">Contact Us</h1>
  <div class="card-section">
   <div class="card ">
     <div class="card-content">
       <div class="card-icon">
         <img src="https://imgs.search.brave.com/s3298wg_tBxi_e1kXhpHdeFsQZ3k5VEpywI2bYuG2Jo/rs:fit:256:256:1/g:ce/aHR0cHM6Ly93d3cu/aWNvbnNkYi5jb20v/aWNvbnMvcHJldmll/dy9wdXJwbGUvbWFw/LW1hcmtlci0yLXh4/bC5wbmc" alt="icon">
       </div>
       <div class="card-info">
          <h2>our main office</h2>
          <p>Lorem ipsum dolor sit amet.</p>
          <p>Lorem, ipsum.</p>
        </div>
      </div>
   </div>
   <div class="card">
    <div class="card-content">
      <div class="card-icon">
        <img src="https://imgs.search.brave.com/0kcmLWEyZYUd37rOOYCe_1zNZuc3bVxDCPAjQkG7Ato/rs:fit:256:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5I/QmgyMkxjYjVYUDFK/OWhwZEd5NHNnQUFB/QSZwaWQ9QXBp" alt="icon">
      </div>
      <div class="card-info">
         <h2>Phone Number</h2>
         <p>+91 254727723</p>
       </div>
     </div>
  </div>

  <div class="card ">
    <div class="card-content">
      <div class="card-icon">
        <img src="https://imgs.search.brave.com/dKIxkFApe954dYCIZYlURhX04RnqO5Zej-RvF4aHaOQ/rs:fit:512:512:1/g:ce/aHR0cHM6Ly93d3cu/aWNvbnNkYi5jb20v/aWNvbnMvZG93bmxv/YWQvcHVycGxlL3Bo/b25lLTQ2LTUxMi5w/bmc" alt="icon">
      </div>
      <div class="card-info">
         <h2>Fax</h2>
         <p>+001 5289 3255</p>
       </div>
     </div>
  </div>

  <div class="card ">
    <div class="card-content">
      <div class="card-icon">
        <img src="https://imgs.search.brave.com/DJpdzdhi2bSCxhTF7bSlpcgSYcExA0RJevymr9_5j-s/rs:fit:920:920:1/g:ce/aHR0cHM6Ly9jbGlw/YXJ0Y3JhZnQuY29t/L2ltYWdlcy9lbWFp/bC1jbGlwYXJ0LXB1/cnBsZS05LnBuZw" alt="icon">
      </div>
      <div class="card-info">
         <h2>Email</h2>
         <p>abc123@gmail.com</p>
       </div>
     </div>
  </div>
</div>
</div>
<!-- cards ends  -->


<div class="contact-container">  

  <!-- left side  -->
  <form id="contact" action="" method="post">
    <h3>Contact Form</h3>
    <fieldset>
      <input placeholder="Your name" type="text" name="name"  value="<?php echo $name;?>" tabindex="1" required autofocus>
      <span class="error"> <?php echo $nameErr;?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" value="<?php echo $email;?>" type="email" tabindex="2" required>
      <span class="error"> <?php echo $emailErr;?></span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" name="phone" value="<?php echo $phone;?>"  type="tel" tabindex="3" required>
      <span class="error"> <?php echo $phoneErr;?></span>
     </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" name="website" value="<?php echo $website;?>"  type="url" tabindex="4" >
      <span class="error"> <?php echo $websiteErr;?></span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="message" tabindex="5" ></textarea>
        </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
   
  <!-- right side  -->

  <div class="rightside">
    <div class="contact-content">
      <img src="https://imgs.search.brave.com/Uvr6x3_mCv3qobvB21AMZlqQpvE6d1p0MJQVpvwtvKk/rs:fit:711:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5S/QVRLalNPaDRVUVgw/LUxvSURaMzd3SGFF/OCZwaWQ9QXBp" alt="">
    </div>
  </div>   
</div>


<?php
 include "./includes/footer.php";
 ?>

<!-- link to jquery  -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <!-- link to js -->
  <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
  <script src="./assests/js/main.js"></script>

</body>
</html>

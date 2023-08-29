<?php


//start session
session_start();

require_once('php/header.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NurtureU Technologies</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare/ajax/libs/font-awesome/5.8.2/css/all.css"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
 

</head>
<body>

<a id="contactus">
    <section class="my-1 mb-5">
      <div class="py-1">
        <h2 class="text-center">Get in touch</h2><br>
               
        <div class="w-50 m-auto">
        <form action="about.php" method="post">
          <div class="form-group ">
          <label class="d-block">Name</label>
              <input type="text" id="Name" name="Name" class="form-control" autocomplete="name"></label>
          </div>
          <div class="form-group">
            <label class="d-block">Email</label>
              <input type="email" id="Email" name="Email" class="form-control" autocomplete="email"></label>
          </div>
          <div class="form-group">
            <label class="d-block">PhoneNumber</label>
              <input type="tel" id="PhoneNumber" name="PhoneNumber" class="form-control" autocomplete="tel"></label>
          </div>
          <div class="text-center"> <!-- Center the button using text-center class -->
    <button type="submit" class="btn btn-success">Submit</button>
  </div>
         
        </form>
      </div>
    </section>
  </a>

  <?php include 'php/footer.php'; ?>





  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!--Page displayed to users if the website has an error-->
<!doctype html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <meta name="author" content="Gray Mros">

  <title>Error | Ace in the Hole Multisport Events</title>
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Montserrat:300,400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css" type="text/css">
  <link rel="stylesheet" href="css/helper.css" type="text/css">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <script src="https://kit.fontawesome.com/dfee4bf98b.js" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>

</head>

<body id="error-body"> 
<?php include 'includes/header.inc.html.php' ?>
  <section id="error-section">
    <p>
      <?php echo $error; ?>
    </p>
    <p>Sorry about that! It seems you have run into an error.</p>
    <p><button><a href="../aceinthehole/index.php">Return to Home</a></button></p>
  </section>
</body>

</html>
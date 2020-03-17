<!--Page displayed after user submits registration form-->
<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Gray Mros">

    <title>Success | Ace in the Hole Multisport Events</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Montserrat:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/helper.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/dfee4bf98b.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</head>

<body id="success-body">
    <?php include 'includes/header.inc.html.php' ?>
    <main>
        <section id="success-section">
            <h2>Success!</h2>
            <h4> Our records show you registered the following:</h4>
            <ul>
                <li><h5>Registered As:</h5> <?php echo HTMLSPECIALCHARS($registerAs, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>First Name:</h5> <?php echo HTMLSPECIALCHARS($firstName, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Last Name:</h5> <?php echo HTMLSPECIALCHARS($lastName, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Age:</h5> <?php echo HTMLSPECIALCHARS($myAge, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Email:</h5> <?php echo HTMLSPECIALCHARS($myEmail, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Emergency Contact Phone Number:</h5> <?php echo HTMLSPECIALCHARS($emerPhone, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Emergency Contact Name:</h5> <?php echo HTMLSPECIALCHARS($emerName, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Gender:</h5> <?php echo HTMLSPECIALCHARS($myGender, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Saturday Event:</h5> <?php echo HTMLSPECIALCHARS($mySatEvent, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Sunday Event:</h5> <?php echo HTMLSPECIALCHARS($mySunEvent, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li><h5>Special Accomodations:</h5> <?php echo HTMLSPECIALCHARS($myAccommodations, ENT_QUOTES, 'UTF-8') ?>
                </li>
                <li> <button><a href="../aceinthehole/registration-database.php">Back</a></button>
                </li>
            </ul>
        </section>
    </main>

</body>

</html>
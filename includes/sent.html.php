<!--Page confirming the users message was sent-->
<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="author" content="Gray Mros">

    <title>Sent | Ace in the Hole Multisport Events</title>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Montserrat:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/helper.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://kit.fontawesome.com/dfee4bf98b.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

</head>

<body id="sent-body">
    <?php include 'includes/header.inc.html.php' ?>

    <main>
        <section id="sent-section">
            <h2>Message Sent!</h2>
            <h4>You will be hearing back from one of our team members shortly!</h4>
            <ul>
                <li>
                    <h5>Name:</h5>
                    <p><?php echo HTMLSPECIALCHARS($myName, ENT_QUOTES, 'UTF-8') ?></p>
                </li>
                <li>
                    <h5>Email:</h5>
                    <p><?php echo HTMLSPECIALCHARS($myEmail, ENT_QUOTES, 'UTF-8') ?>
                    </p>
                </li>
                <li>
                    <h5>Involvement:</h5>
                    <p><?php echo HTMLSPECIALCHARS($myParticipant, ENT_QUOTES, 'UTF-8') ?>
                    </p>
                </li>
                <li>
                    <h5>Comment:</h5>
                    <p><?php echo HTMLSPECIALCHARS($myQuestion, ENT_QUOTES, 'UTF-8') ?>
                    </p>
                </li>

                <li> <button><a href="../aceinthehole/contact-database.php">Back</a></button>
                </li>
            </ul>
        </section>
    </main>
</body>

</html>
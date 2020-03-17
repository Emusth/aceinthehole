<?php

try {
  $pdo = new PDO('mysql:host=localhost;dbname=graymros_aceinthehole_db', 'graymros_aceinthehole_user', 'YouShouldToDoThat');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['firstName']) && empty($_POST['honeypot'])) {
  // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
  $honeypot = $_POST['honeypot'];
  $registerAs = $_POST['registerAs'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $myAge = $_POST['myAge'];
  $myEmail = $_POST['myEmail'];
  $emerPhone = $_POST['emerPhone'];
  $emerName = $_POST['emerName'];
  $myGender = $_POST['myGender'];
  $mySatEvent = $_POST['mySatEvent'];
  $mySunEvent = $_POST['mySunEvent'];
  $myAccommodations = $_POST['myAccommodations'];

  // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
  try {
    $sql = 'INSERT INTO registration SET
            registeras = :registerAs,
            fname = :firstName,
            lname = :lastName,
            myage = :myAge,
            myemail = :myEmail,
            emerphone = :emerPhone,
            emername = :emerName,
            gender = :myGender,
            satsportevent = :mySatEvent,
            sunsportevent = :mySunEvent,
            mycomments = :myAccommodations';

    $s = $pdo->prepare($sql);
    $s->bindValue(':registerAs', $_POST['registerAs']);
    $s->bindValue(':firstName', $_POST['firstName']);
    $s->bindValue(':lastName', $_POST['lastName']);
    $s->bindValue(':myAge', $_POST['myAge']);
    $s->bindValue(':myEmail', $_POST['myEmail']);
    $s->bindValue(':emerPhone', $_POST['emerPhone']);
    $s->bindValue(':emerName', $_POST['emerName']);
    $s->bindValue(':myGender', $_POST['myGender']);
    $s->bindValue(':mySatEvent', $_POST['mySatEvent']);
    $s->bindValue(':mySunEvent', $_POST['mySunEvent']);
    $s->bindValue(':myAccommodations', $_POST['myAccommodations']);
    $s->execute();
  } catch (PDOException $e) {
    $error = 'Sorry! There was an error submitting your registration: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
  }
  // load the thank you page after the INSERT runs
  include 'includes/success.html.php';
}

// Add an else to load the initial page if the initial if statement is false
else {
  include 'includes/register.html.php';
}

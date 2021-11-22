<?php
//  Connect to the database
$PDO = new PDO("mysql:host=localhost;dbname=scarab", "root", "");

// set the PDO error mode to exception
$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_GET['id']) && is_numeric($_GET['id']))
   {
       // query
       $query = "SELECT * FROM topmenu WHERE ID =" . $_GET["id"] . "ORDER BY id ASC";
       $row = $PDO->query($query);
   }
   else
   {
     $id = 1;
   }

?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta name="title" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="30 days">
        <meta name="author" content="Ben Peters">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Site Title here</title>
        <link rel="stylesheet" href="css/pagestyles.css" type="text/css">
    </head>
<body>
    <table class="topmenu">
        <tr>
            <td>
                <h1 class="siteName">Site Name here</h1>
            </td>
            <?php
              foreach($row as $data) {
            ?>
            <td><a href="index.php?id=".<?php echo $data['id']; ?>."</a">
              <?php echo $data['menuheader']; ?>
            </a></td>
            <?php
              }
            ?>
        </tr>
    </table>

    <hr>

    <?php echo $data['pagecontent']; ?>
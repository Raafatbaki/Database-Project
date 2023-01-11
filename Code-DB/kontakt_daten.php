<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Schulen in Berlin
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow" data-background-color="black" data-image="../assets/img/sidebar-6.jpg">

      <div class="logo"><a href="#" class="simple-text logo-normal">
        Schulen in Berlin
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">  <!--active when visit-->
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Übersicht</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="Statestik.php">
              <i class="material-icons">book</i>
              <p>Statestik der Schulen</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="schulen.php">
              <i class="material-icons">school</i>
              <p>Schulen in Berlin</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="kontakt_daten.php">
              <i class="material-icons"></i>
              <p>Schulen Kontakt Daten</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" >

      <!------------------------------------------------------------- End Menu --------------------------------------------------------->

<link rel="stylesheet" href="style1.css">
<div class="logoname" ><h3>Hier finden Sie Kontaktdaten aller Schulen</h3></div>

<div class="body12">
    
 <?php

include 'db_connect.php';//Hier wird die verbindung zur Datenbank hergestellt

$stmt =$conn ->prepare(" select Schule.Name as Schule_Name,Kontaktdaten.Telefonnummer As Telefonnummer,Kontaktdaten.Fax As Fax,Kontaktdaten.eMail as eMail from Kontaktdaten inner JOIN Schule WHERE Kontaktdaten.BSN=Schule.BSN");
$stmt->execute();

$result =$stmt->get_result();

echo "<table border='2'>";
echo "<tr><td>Schule_Name</td><td>Telefonnummer</td><td>Fax</td><td>eMail</td></tr>";

while($row=$result->fetch_assoc())
{

    echo"<tr><td>$row[Schule_Name]</td><td>$row[Telefonnummer]</td><td>$row[Fax]</td><td>$row[eMail]</td></tr>";
}
wordwrap($row, 10, "\n", 1); 
echo "</table>";
?>
</div>
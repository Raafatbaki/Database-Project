<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Statestik
  </title>
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
              <i class="material-icons">connect</i>
              <p>Schulen Kontakt Daten</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" >
      
      <!----------------------------- End menu-------------------------------------------------------------------------->

<body>
<link rel="stylesheet" href="style1.css">
<div class="logoname" ><h3>Anzahl der Schulen pro Bezirk</h3></div>

<div class="b_table">
<?php

//Hier wird die verbindung zur Datenbank hergestellt

include 'db_connect.php';
//SQL Statment Anzahl der Schulen pro Bezirk .

$stmt =$conn ->prepare(" select Bezirk_Name, count(BSN) AS Anzahl_der_Schulen from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id
group by Bezirk_Name order by Anzahl_der_Schulen");
$stmt->execute();

$result =$stmt->get_result();


echo "<table border='2'>";
echo "<tr><td>Bezirk_Name</td><td>Anzahl_der_Schulen</td></tr>";

while($row=$result->fetch_assoc())
{
    
    echo "<tr><td>$row[Bezirk_Name]</td><td>$row[Anzahl_der_Schulen]</td></tr>";
}
wordwrap($row, 10, "\n", 1); 
echo "</table>";
?>
</div>

<div id="piechart"></div> 



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
//da wir kleine unlösbare problem in Java script htten haben wir nur für die Diagramm die Daten manuel hinzugefügt!
  var data = google.visualization.arrayToDataTable([
    ['Bezirk', 'Anzahl der Schulen in %'],
    ['Charlottenburg-Wilmersdorf' , 83],
    ['Friedrichshein-Kreuzberg' ,	74],
    ['Lichtenberg' , 67],
    ['Marzahn - Hellersdof', 60],
    ['Mitte' ,	86],
    ['Neukölln'	, 73],
    ['Pankow' ,	104],
    ['Reinickendorf' , 73],
    ['Spandau' , 59],
    ['Steglitz-Zehlendorf' , 77],
    ['Tempelhof-Schöneberg' , 75],
    ['Treptow-Köpenick' , 64]
  ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Diagramm visualisiert Anzahl der Schulen pro Bezirk', 'width':550, 'height':375};


  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}

</script>
</body>

<body>
<link rel="stylesheet" href="style1.css">
<!--<div class="logoname" ><h3>Anzahl der Schüle</h3></div>-->

<div class="b_table1">
<?php

//Hier wird die verbindung zur Datenbank hergestellt

include 'db_connect.php';
//SQL Statment Anzahl der Schüler pro Schultyp .

$stmt =$conn ->prepare(" select Schultyp, SUM(Schüler) As 'Schüler_Anzahl' from Schule inner JOIN Statestik WHERE Schule.BSN=Statestik.BSN GROUP BY Schultyp ");
$stmt->execute();

$result =$stmt->get_result();


echo "<table border='2'>";
echo "<tr><td>Schultyp</td><td>Schüler_Anzahl</td></tr>";

while($row=$result->fetch_assoc())
{
    
    echo "<tr><td>$row[Schultyp]</td><td>$row[Schüler_Anzahl]</td></tr>";
}
wordwrap($row, 10, "\n", 1); 
echo "</table>";
?>
</div>

 


<div id="piechart1"></div> 



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
//da wir kleine unlösbare problem in Java script htten haben wir nur für die Diagramm die Daten manuel hinzugefügt!
  var data = google.visualization.arrayToDataTable([
    ['Schultyp', 'Anzahl der Schüler in %'],
    ['Andere Schule' , 4119],
    ['Berufliche Schule' ,	65711],
    ['Gemeinschaftsschule' , 26941],
    ['Grundschule', 165087],
    ['Gymnasium' ,	71628],
    ['Integrierte Sekundarschule'	, 61494],
    ['Private Schule' ,	51767],
    ['Schule mit sonderpädagogischem Förderschwerpunkt' , 8789],
    
  ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Diagramm visualisiert Anzahl der Schüler pro Schultyp', 'width':550, 'height':375};


  // Display the chart inside the <div> element with id="piechart1"
  var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
  chart.draw(data, options);
}
</script>
</body>
</html>

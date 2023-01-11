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
          <li class="nav-item ">
            <a class="nav-link" href="Statestik.php">
              <i class="material-icons">book</i>
              <p>Statestik der Schulen</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Schulen.php">
              <i class="material-icons">school</i>
              <p>Schulen in Berlin</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Kontakt_Daten.php">
              <i class="material-icons"></i>
              <p>Schulen Kontakt Daten</p>
            </a>
          </li>
          
          
        </ul>
      </div>
    </div>
    <div class="main-panel" >
   

    <title> Schulen in Berlin</title></head>
    <link rel="stylesheet" href="style.css">
    
    <h1>Schulen in Berlin </h1>
    
    <body>
         <div id="image">
          <img src="b_Schulen.jpg" alt="vw bild"> 
        </div> 
    </body>
      
  <h2 style="color:green;">
      Filtern nach Bizerken
  </h2>
      
<form method="post">
        <input type="submit" name="Spandau"
                class="button" value="Spandau" />
        <input type="submit" name="Marzahn-Hellersdorf"
                class="button" value="Marzahn-Hellersdorf" />
        <input type="submit" name="Treptow-Köpenick"
                class="button" value="Treptow-Köpenick" />
        <input type="submit" name="Lichtenberg"
                class="button" value="Lichtenberg" />
        <input type="submit" name="Neukölln"
                class="button" value="Neukölln" />
        <input type="submit" name="Reinickendorf"
                class="button" value="Reinickendorf" />
        <input type="submit" name="Friedrichshein-Kreuzberg"
                class="button" value="Friedrichshein-Kreuzberg" />
        <input type="submit" name="Tempelhof-Schöneberg"
                class="button" value="Tempelhof-Schöneberg" />
        <input type="submit" name="Steglitz-Zehlendorf"
                class="button" value="Steglitz-Zehlendorf" />
       <input type="submit" name="Charlottenburg-Wilmersdorf"
                class="button" value="Charlottenburg-Wilmersdorf" />
        <input type="submit" name="Mitte"
                class="button" value="Mitte" />
                <input type="submit" name="Pankow"
                class="button" value="Pankow" />
        <input type="submit" name="Filteren-Nach"
                class="button" value="Filteren-Nach" />

    </form>

    <body style="text-align:center;">
      
    <h2 style="color:green;">
        Filtern nach Schultyp
    </h2>
      
    <form method="post">
        <input type="submit" name="Integrierte-Sekundarschule"
                class="button" value="Integrierte-Sekundarschule" />
        <input type="submit" name="Berufliche-Schule"
                class="button" value="Berufliche-Schule" />
        <input type="submit" name="Private-Schule"
                class="button" value="Private-Schule" />
        <input type="submit" name="Gymnasium"
                class="button" value="Gymnasium" />
        <input type="submit" name="Grundschule"
                class="button" value="Grundschule" />
        <input type="submit" name="Andere"
                class="button" value="Andere" />
       
    </form>

  
      
    <?php

        if(array_key_exists('Mitte', $_POST)) {
            button1();
        }
        else if(array_key_exists('Pankow', $_POST)) {
            button2();
        }
        else if(array_key_exists('Spandau', $_POST)) {
            button3();
        }
        else if(array_key_exists('Marzahn-Hellersdorf', $_POST)) {
            button4();
        }

        else if(array_key_exists('Treptow-Köpenick', $_POST)) {
            button5();
        }
        else if(array_key_exists('Lichtenberg', $_POST)) {
            button6();
        }
        else if(array_key_exists('Neukölln', $_POST)) {
            button7();
        }
        else if(array_key_exists('Reinickendorf', $_POST)) {
            button8();
        }
        else if(array_key_exists('Friedrichshein-Kreuzberg', $_POST)) {
            button9();
        }
        else if(array_key_exists('Tempelhof-Schöneberg', $_POST)) {
            button10();
        }
        else if(array_key_exists('Steglitz-Zehlendorf', $_POST)) {
            button11();
        }
        else if(array_key_exists('Charlottenburg-Wilmersdorf', $_POST)) {
            button12();
        }
        else if(array_key_exists('Filteren-Nach', $_POST)) {
            button13();
        }
        
        function button1() {

            $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Mitte";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Mitte'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
          }
        function button2() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Pankow";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Pankow'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
        }
        function button3() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Spandau";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Spandau'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
        }
        function button4()  
        {
           $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Marzahn-Hellersdorf";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Marzahn-Hellersdorf'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
        }
        function button5() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Treptow-Köpenick";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Treptow-Köpenick'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
        }
        function button6() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Lichtenberg";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Lichtenberg'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
        }
        function button7() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Neukölln";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Neukölln'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
        }
        function button8() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Reinickendorf";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Reinickendorf'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
        }
        function button9() {
            $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Friedrichshein-Kreuzberg";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name= 'Friedrichshein-Kreuzberg'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
          }
        
        function button10() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Tempelhof-Schöneberg";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Tempelhof-Schöneberg'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
          }
    
        function button11() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Steglitz-Zehlendorf";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Steglitz-Zehlendorf'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
          }
        
        function button12() {
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
            echo "Charlottenburg-Wilmersdorf";
            $stmt =$conn ->prepare("select Name,Adresse,PLZ,Internet,Schultyp from Schule INNER JOIN Bezirk ON Schule.Bezirk_id = Bezirk.Bezirk_id WHERE Bezirk_Name='Charlottenburg-Wilmersdorf'
            ");
            $stmt->execute();
            $result =$stmt->get_result();
            echo "<table border='2'>";
            echo "<tr><td>Name</td><td>Adresse</td><td> PLZ </td><td>Internet</td><td>Schultyp</td></tr>";
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
            }
            wordwrap($row, 10, "\n", 1); 
            echo "</table>";
          }
        
        function button13() {
            echo "Filtern nach";
           
        }

        if(array_key_exists('Grundschule', $_POST)) {
          button14();
      }
      else if(array_key_exists('Integrierte-Sekundarschule', $_POST)) {
          button15();
      }
      else if(array_key_exists('Berufliche-Schule', $_POST)) {
          button16();
      }
      else if(array_key_exists('Private-Schule', $_POST)) {
          button17();
      }
      else if(array_key_exists('Gymnasium', $_POST)) {
          button18();
      }
      else if(array_key_exists('Andere', $_POST)) {
          button19();
      }
     
      
     
      function button14()
      {
          echo "Grundschule";
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
          $stmt =$conn ->prepare("select * from Schule where Schultyp = 'Grundschule' ");
          $stmt->execute();
          $result =$stmt->get_result();
          echo "<table border='2'>";
          echo "<tr><td>BSN</td><td>Name</td><td> Adresse </td><td>PLZ</td><td>Internet</td><td>Schultyp</td></tr>";
          while($row=$result->fetch_assoc())
          {
              echo "<tr><td>$row[BSN]</td><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
          }
          wordwrap($row, 10, "\n", 1); 
          echo "</table>";
      }
   
      function button15()
      {
          echo "Integrierte Sekundarschule";
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
          $stmt =$conn ->prepare("select * from Schule where Schultyp = 'Integrierte Sekundarschule' ");
          $stmt->execute();
          $result =$stmt->get_result();
          echo "<table border='2'>";
          echo "<tr><td>BSN</td><td>Name</td><td> Adresse </td><td>PLZ</td><td>Internet</td><td>Schultyp</td></tr>";
          while($row=$result->fetch_assoc())
          {
              echo "<tr><td>$row[BSN]</td><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
          }
          wordwrap($row, 10, "\n", 1); 
          echo "</table>";
      }
      function button16() 
      {
          echo "Berufliche Schule";
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
          $stmt =$conn ->prepare("select * from Schule where Schultyp = 'Berufliche Schule' ");
          $stmt->execute();
          $result =$stmt->get_result();
          echo "<table border='2'>";
          echo "<tr><td>BSN</td><td>Name</td><td> Adresse </td><td>PLZ</td><td>Internet</td><td>Schultyp</td></tr>";
          while($row=$result->fetch_assoc())
          {
              echo "<tr><td>$row[BSN]</td><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
          }
          wordwrap($row, 10, "\n", 1); 
          echo "</table>";
      }
      function button17() 
      {
          echo "Private Schule";
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
          $stmt =$conn ->prepare("select * from Schule where Schultyp = 'Private Schule' ");
          $stmt->execute();
          $result =$stmt->get_result();
          echo "<table border='2'>";
          echo "<tr><td>BSN</td><td>Name</td><td> Adresse </td><td>PLZ</td><td>Internet</td><td>Schultyp</td></tr>";
          while($row=$result->fetch_assoc())
          {
              echo "<tr><td>$row[BSN]</td><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
          }
          wordwrap($row, 10, "\n", 1); 
          echo "</table>";
      }
      function button18()
      {
          echo "Gymnasium";
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
          $stmt =$conn ->prepare("select * from Schule where Schultyp = 'Gymnasium' ");
          $stmt->execute();
          $result =$stmt->get_result();
          echo "<table border='2'>";
          echo "<tr><td>BSN</td><td>Name</td><td> Adresse </td><td>PLZ</td><td>Internet</td><td>Schultyp</td></tr>";
          while($row=$result->fetch_assoc())
          {
              echo "<tr><td>$row[BSN]</td><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
          }
          wordwrap($row, 10, "\n", 1); 
          echo "</table>";
      }
      function button19()
      {
          echo "Andere";
          $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');
          $stmt =$conn ->prepare("select * from Schule where Schultyp != 'Gymnasium' AND Schultyp != 'Private Schule' AND Schultyp !=  'Berufliche Schule' AND Schultyp != 'Integrierte Sekundarschule' AND Schultyp !=  'Grundschule'");
          $stmt->execute();
          $result =$stmt->get_result();
          echo "<table border='2'>";
          echo "<tr><td>BSN</td><td>Name</td><td> Adresse </td><td>PLZ</td><td>Internet</td><td>Schultyp</td></tr>";
          while($row=$result->fetch_assoc())
          {
              echo "<tr><td>$row[BSN]</td><td>$row[Name]</td><td>$row[Adresse]</td><td>$row[PLZ]</td><td>$row[Internet]</td><td>$row[Schultyp]</td></tr>";
          }
          wordwrap($row, 10, "\n", 1); 
          echo "</table>";
      }
    ?>
  
   
</html>
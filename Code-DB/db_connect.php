

<?php

    $conn = mysqli_connect('db.f1.htw-berlin.de','s0575928', '093334103232Raafat', 's0575928_Schule');  // connect to Data Base
    if( !$conn )
    {
    echo 'Error: ' . mysqli_connect_error(); // show Errors
    }

?>
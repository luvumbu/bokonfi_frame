<?php
header("Access-Control-Allow-Origin: *");
$intervention_ND_VALUE =$_POST["ND_VALUE"] ;
$intervention_SAV_VALUE =$_POST["SAV_VALUE"] ;
$intervention_AERIEN_VALUE =$_POST["AERIEN_VALUE"] ;
$intervention_FACADE_VALUE =$_POST["FACADE_VALUE"] ;
$intervention_SOUS_TERRAIN_VALUE =$_POST["SOUS_TERRAIN_VALUE"] ;
$intervention_IMMEUBLE_VALUE =$_POST["IMMEUBLE_VALUE"] ;
$intervention_PLP_VALUE =$_POST["PLP_VALUE"] ;
$intervention_COMPLEXE_VALUE =$_POST["COMPLEXE_VALUE"] ;
$intervention_SAV_INSTALL_VALUE =$_POST["SAV_INSTALL_VALUE"] ;
$intervention_BINOME_VALUE =$_POST["BINOME_VALUE"] ;
$intervention_DATE_VALUE = $_POST["DATE_VALUE"] ;
  
echo "1 : ".$intervention_DATE_VALUE ; 
echo "2 : ".$intervention_ND_VALUE ; 
echo "3 : ".$intervention_SAV_VALUE ; 
echo "4 : ".$intervention_AERIEN_VALUE ; 
echo "5 : ".$intervention_FACADE_VALUE ; 
echo "6 : ".$intervention_SOUS_TERRAIN_VALUE ; 
echo "7 : ".$intervention_IMMEUBLE_VALUE ; 
echo "8 : ".$intervention_PLP_VALUE ; 
echo "9 : ".$intervention_COMPLEXE_VALUE ; 
echo "10 : ".$intervention_SAV_INSTALL_VALUE ; 
echo "11 : ".$intervention_BINOME_VALUE ; 
echo "12 : ".$intervention_DATE_VALUE ; 

$servername = "localhost";
$username = "u510206436_bokonzi";
$password = "v3p9r3e@59A";
$dbname = "u510206436_bokonzi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO intervention (
    intervention_ID_USER,
    intervention_ND_VALUE,
    intervention_SAV_VALUE,
    intervention_AERIEN_VALUE,
    intervention_FACADE_VALUE,
    intervention_SOUS_TERRAIN_VALUE,
    intervention_IMMEUBLE_VALUE,
    intervention_PLP_VALUE,
    intervention_COMPLEXE_VALUE,
    intervention_SAV_INSTALL_VALUE,
    intervention_BINOME_VALUE,
    intervention_DATE_VALUE

)
VALUES ('1','$intervention_ND_VALUE','$intervention_SAV_VALUE','$intervention_AERIEN_VALUE','$intervention_FACADE_VALUE','$intervention_SOUS_TERRAIN_VALUE','$intervention_IMMEUBLE_VALUE','$intervention_PLP_VALUE','$intervention_COMPLEXE_VALUE','$intervention_SAV_INSTALL_VALUE','$intervention_BINOME_VALUE','$intervention_DATE_VALUE')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

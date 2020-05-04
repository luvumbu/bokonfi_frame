<?php
$servername = "localhost";
$username = "u510206436_bokonzi";
$password = "v3p9r3e@59A";
$dbname = "u510206436_bokonzi";


$intervention_ND_VALUE = array();
$intervention_SAV_VALUE = array();
$intervention_AERIEN_VALUE = array();
$intervention_SOUS_TERRAIN_VALUE = array();
$intervention_IMMEUBLE_VALUE = array();
$intervention_PLP_VALUE = array();
$intervention_COMPLEXE_VALUE = array();
$intervention_SAV_INSTALL_VALUE = array();
$intervention_BINOME_VALUE = array();
$intervention_DATE_VALUE = array();
$intervention_FACADE_VALUE = array();

$intervention_ID_USER_VALUE= array();



$intervention_id =array();



















// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT * FROM `intervention` WHERE 1';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        //$row["intervention_ND_VALUE"
        array_push($intervention_ND_VALUE,$row["intervention_ND_VALUE"]);
         
        
        
        
        //$row["intervention_SAV_VALUE"
        array_push($intervention_SAV_VALUE,$row["intervention_SAV_VALUE"]);
        
        
       
        //$row["intervention_AERIEN_VALUE"
        array_push($intervention_AERIEN_VALUE,$row["intervention_AERIEN_VALUE"]);
        
        
        
        //$row["intervention_SOUS_TERRAIN_VALUE"
        array_push($intervention_SOUS_TERRAIN_VALUE,$row["intervention_SOUS_TERRAIN_VALUE"]);
        
        
        
        
        //$row["intervention_IMMEUBLE_VALUE"
        array_push($intervention_IMMEUBLE_VALUE,$row["intervention_IMMEUBLE_VALUE"]);
        
        
        
        
        //$row["intervention_PLP_VALUE"
        array_push($intervention_PLP_VALUE,$row["intervention_PLP_VALUE"]);
        
        
        
        
        //$row["intervention_COMPLEXE_VALUE"
        array_push($intervention_COMPLEXE_VALUE,$row["intervention_COMPLEXE_VALUE"]);
        
        
        
       
        //$row["intervention_SAV_INSTALL_VALUE"
        array_push($intervention_SAV_INSTALL_VALUE,$row["intervention_SAV_INSTALL_VALUE"]);
        
        
        
       
        //$row["intervention_BINOME_VALUE"
        array_push($intervention_BINOME_VALUE,$row["intervention_BINOME_VALUE"]);
        
        
        
        //$row["intervention_DATE_VALUE"
        array_push($intervention_DATE_VALUE,$row["intervention_DATE_VALUE"]);
        array_push($intervention_FACADE_VALUE,$row["intervention_FACADE_VALUE"]);
        
        

        array_push($intervention_id,$row["intervention_id"]);
        
      
        
    }
} else {
    echo "0 results";
}
$conn->close();
 
$quantite =count($intervention_ND_VALUE) ; 











// $intervention_ND_VALUE;
// $intervention_SAV_VALUE;
// $intervention_AERIEN_VALUE;
// $intervention_SOUS_TERRAIN_VALUE;
// $intervention_IMMEUBLE_VALUE;
// $intervention_PLP_VALUE;
// $intervention_COMPLEXE_VALUE;
// $intervention_SAV_INSTALL_VALUE;
// $intervention_BINOME_VALUE;
// $intervention_DATE_VALUE;
//$intervention_FACADE_VALUE
?>





<table>
   <caption>Aujourd'hui</caption>

   <thead> <!-- En-tête du tableau -->
       <tr>
           <th>Inter</th>
           <th>ND:</th>
           <th>DATE</th>
           <th>PTS</th>
           <th>x25</th>
           <th>BINOME</th>
           <th>SUPPR</th>
         
           
       </tr>
   </thead>

   <tfoot> <!-- Pied de tableau -->
       <tr>
           <th>TOTAL</th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
          
          
       </tr>
   </tfoot>

   <tbody> <!-- Corps du tableau -->
    
     
        

<?php 
      $SAV_points=0 ;
      $AERIEN_points=0 ;
      $SOUS_TERRAIN_points=0 ;
      $IMMEUBLE_points=0 ;
      $PLP_points=0 ;
      $FACADE_points=0 ;
for($i = 0 ; $i<$quantite ;$i++)
{
    ?>   <tr>
    <td>
        <?php 
        
       

        if($intervention_SAV_VALUE[$i]!="none")
        {
                echo "SAV" ;
                $SAV_points =0.35; 
        }
   
        if($intervention_AERIEN_VALUE[$i]!="none")
        {
                echo "AERIEN" ;
                $AERIEN_points = 2.35 ; 
        }
 
        if($intervention_SOUS_TERRAIN_VALUE[$i]!="none")
        {
                echo "SOUS_TERRAIN" ;
                $SOUS_TERRAIN_points =1.5 ; 
        }
        if($intervention_IMMEUBLE_VALUE[$i]!="none")
        {
                echo "IMMEUBLE" ;
                $IMMEUBLE_points  = 0.7; 
        }
        if($intervention_PLP_VALUE[$i]!="none")
        {
                echo "PLP" ;
                $PLP_points = 0.35 ; 
        }
        if($intervention_FACADE_VALUE[$i]!="none")
        {
                echo "FACADE" ;
                $FACADE_points =1.5 ; 
        }
        if($intervention_COMPLEXE_VALUE[$i]!="none")
        {
                echo "<a class='complexe'>-COMPLEXE</a>" ; 
        }
   

        // ajout ici 





  










        // fin de lajout

   

     
        
        
        
        
        ?>
    
    </td>
    <td><?php echo $intervention_ND_VALUE[$i] ?></td>
    <td><?php echo $intervention_DATE_VALUE[$i] ?></td>
    <td><?php 
    
    
 
    echo  
    $SAV_points+
    $AERIEN_points+
    $SOUS_TERRAIN_points+
    $FACADE_points+
    $PLP_points +
    $IMMEUBLE_points 
    ; 
 
    
    
    ?></td></td>
    <td><?php
    
    echo  
    $SAV_points*1*25+
    $AERIEN_points*1*25+
    $SOUS_TERRAIN_points*1*25+
    $FACADE_points*1*25+
    $PLP_points*1*25 +
    $IMMEUBLE_points*1*25 
    
    
    
    
    ?></td></td>
    <td><?php echo $intervention_BINOME_VALUE[$i] ?></td></td>

    <td class="remove" style="margin-left:0">
   
    <div class="del" onclick="removTab(this)" id="<?php echo $intervention_id[$i] ?>">
   X
   <?php 
 
   
   ?>
    </div>
</i></td>
    
 
     
    </tr>
    <?php 
    $SAV_points = 0 ; 
    $AERIEN_points = 0 ; 
    $SOUS_TERRAIN_points = 0 ; 
    $FACADE_points = 0 ; 
    $PLP_points = 0 ;
    $IMMEUBLE_points = 0  ;  
}


?>
          
      
 
      
   </tbody>
</table>

<style>
tr 
{
   
    text-align: center ;
    width: 100% ; 
    
}
table
{
    width:80%; 
 
    margin: auto ; 
}
caption ,td,th
{
    border : 1px solid rgba(0, 0, 0, 0.1);
  
}
th 
{
   
    color :rgba(0, 0, 0, 0.6) ; 
    background-color: #d2e4ea ; 
}
caption 
{
    background-color: #c6dae2 ; 
}
.complexe 
{
    background-color: #acf7cf;
}
</style>
<?php
 
$stack = array("");
if($stack[0]=="")
{
    $stack[0]  = "COOL" ; 
}
array_push($stack, "YALOO","oui");
//echo count($stack); 

?>
 

 
 <style>
     .del 
     {
         padding: 10px; 
         background-color: #f71e23 ; 
         color:white ; 
         transition : 1s all ; 
     }
     .del:hover 
     {
       
         transition : 1s all ; 
         cursor: pointer ; 
         background-color: #ec8285 ; 
 
     }
     .del:active 
     {
        background-color:#e08dc2 ; 
        transition : 0.1s all ; 
        
     }
 </style>
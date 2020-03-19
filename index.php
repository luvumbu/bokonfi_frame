<!DOCTYPE html>
<html>
<body>
<?php
$homepage = file_get_contents('http://bokonzi.com/bokonfi_frame/bkz.js');
echo "<script>" ; 
echo $homepage ; 
echo "</script>";
?>
<script>
ok = new IdentificationHtml("button","Debut");
document.getElementById("Debut").innerHTML="ok" ; 
ok.set_attribute("onclick","alert('le test fonctionne')") ; 
ok.get_attribute("onclick");
</script>
</body>
</html>

</script>
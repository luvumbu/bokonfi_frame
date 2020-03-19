<!DOCTYPE html>
<html>
<body>
<?php 
$homepage = file_get_contents('http://bokonzi.com/bokonfi_frame/bkz.js');
echo "<script>" ; 
echo $homepage ; 
echo "</script>" ; 
?> 
<script>
                var el =new IdentificationHtml("ok","test") ;
                el.set_text("Mon text") ; 
</script>
</body>
</html>
</script>

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
</script>
</body>
</html>

</script>
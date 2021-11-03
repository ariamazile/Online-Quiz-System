<?php
include "../conn/connection.php";
$quiz_id=$_GET["id"];
mysqli_query($link,"DELETE from quiz where quiz_id=$quiz_id");


?>
<script type="text/javascript">
    window.location="../admin/editquiz.php"
</script>
<?php

?>
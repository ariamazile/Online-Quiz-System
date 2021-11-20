<?php
include "../conn/connection.php";
$question_id=$_GET["id"];
$id1=$_GET["id1"];

mysqli_query($link,"DELETE from questions where question_id=$question_id");
?>
<script type="text/javascript">
    window.location="questionnaire.php?id=<?php echo $id1 ?>";
</script>

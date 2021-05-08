<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "practice";

$con = mysqli_connect($server, $username, $password, $db);
if($con){
    ?>
  <!-- <script>
        alert('CONNECTED');
    </script> -->

<!-- <div class="alert alert-success" role="alert">
  <strong>successfully connected!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
-->

    <?php
}else{
?>
<script>
    alert('FAILED');
</script>
<?php
}

?>
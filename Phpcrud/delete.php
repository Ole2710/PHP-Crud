<?php include 'Connection.php'; 
$id=$_GET['id']; 
$query="DELETE FROM student WHERE id='$id'"; 
$data=mysqli_query($con, $query); 

if ($data) {
    ?>
<script type="text/javascript">
alert("Date Deleted Successfully")
window.open("./view.php")
</script>
<?php
}
else{
    ?>
    <script type="text/javascript">
        alert("Please try again!");
    </script>
    <?php
}
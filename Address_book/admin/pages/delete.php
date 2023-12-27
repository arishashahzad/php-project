<?php
include "config.php";
include "header.php";

if(isset($_GET["id"])){
    $del_id = $_GET["id"];
    
    $delete = "DELETE FROM `product` WHERE `id` = $del_id";

    $delete_run = mysqli_query($conn, $delete);
    if($delete_run){
        $_SESSION['status'] = "Data Deleted Successfully";
        $_SESSION['status_code'] = "success";
       
    } else {
        $_SESSION['status'] = "Data Not Deleted";
        $_SESSION['status_code'] = "error";
    }
}
?>
<script>
    setTimeout(function(){
  window.location = "allproducts.php";
}, 0);
</script>
<?php include "footer.php"; ?>
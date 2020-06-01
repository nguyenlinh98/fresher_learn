<?php
session_start();
if(isset($_POST['btn_sb'])){
    echo $_SESSION['name'];
}
?>
<html>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
     <?php
      if(isset($_SESSION['name'])){
          echo $_SESSION['name'];
      }

     ?>
    <label>First name</label>
    <input type="text" name="name">
    <input type="submit" name="btn_sb">
</form>
</html>
<?php
 if($_SERVER['REQUEST_METHOD']=="POST"){
     $name =$_REQUEST['name'];
     $_SESSION['name']=$_POST['name'];
      if(empty($_REQUEST['name'])){

      }
       else{
           echo $name;
       }

 }

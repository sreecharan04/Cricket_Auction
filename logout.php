

<?php 
   session_start();
      unset($_SESSION['sess_user']);
   
      echo "<script>window.location.href='owner_login.php'</script>";
   ?>

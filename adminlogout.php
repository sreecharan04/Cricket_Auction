

<?php 
   session_start();
      unset($_SESSION['sess_user1']);
   
      echo "<script>window.location.href='admin_login.php'</script>";
   ?>

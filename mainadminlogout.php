

<?php 
   session_start();
      unset($_SESSION['sess_user2']);
   
      echo "<script>window.location.href='main.php'</script>";
   ?>

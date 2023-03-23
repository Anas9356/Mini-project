<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


	  <!-- For Admin -->
      	<?php if ($_SESSION['role'] == 'admin') {
  
  header("Location: table.php");
  
exit;



			}else { 
      		
      		

				header("Location: form.php");
  
  
 
exit;






			
			    
      	} ?>
      

<?php }else{
	header("Location: index.php");
} ?>
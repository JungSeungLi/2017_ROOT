<?php
     require_once('../DB_conn.php');
     $search = $_POST['search'];
    
     $sql = "select student_id from succ where student_id=:search";
     $DB_q = $pdo->prepare($sql);
     $DB_q -> bindValue(":search",$search);
     $DB_q -> execute();
     $result = $DB_q -> fetch();
     $result ? $_SESSION['check'] = "good" : $_SESSION['check'] = "bad";

     echo "<script>
                location.href='succ.php';   
           </script>";
     exit;         
     

?>
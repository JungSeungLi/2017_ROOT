<?php
    include "DB_conn.php";  //pwd change
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    
    $sql = "select * from user_imf where email=:email and passwd=:passwd";      // ID, PASSWORD CHECK QUERY  
    
    $DB_q = $pdo->prepare($sql);
    $DB_q -> bindValue(':email',$email);
    $DB_q -> bindValue(':passwd',$passwd);
    $DB_q -> execute(); 
    
    $result = $DB_q->fetch();
    $check = $result ? true : false;
    
    if($check)
    {
       $_SESSION['email'] = $email;
       $_SESSION['name'] = $result['name'];
       $_SESSION['student_number'] = $result['student_number'];
    }
    else
    {
        echo "<script>
                alert('Incorrect username or password.');
              </script>";
    }
    
    $pdo = null;
    echo "<script> history.go(-1); </script>";
    exit;
?>
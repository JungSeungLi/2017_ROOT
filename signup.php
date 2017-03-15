<?php
    include "DB_conn.php";  //pwd change
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $phone = $_POST['phone'];
    $student_number = $_POST['student_number'];
    $name = $_POST['name'];
    $major = $_POST['major'];
    
    
    $sql = "select * from user_imf where email=:email";      // ID, CHECK QUERY  
    
    $DB_q = $pdo->prepare($sql);
    $DB_q -> bindValue(':email',$email);
    $DB_q -> execute(); 
    
    $result = $DB_q->fetch();
    $check = $result ? true : false;
    
    if($check)
    {
      echo "<script>
                alert('이메일 중복');
            </script>";
      $pdo = null;
      echo "<script> history.go(-1); </script>";
      exit;
    }
    else
    {
        $sql = "insert into user_imf (email, passwd, phone, student_number, name, major) values (:email, :passwd, :phone, :student_number, :name, :major)";
        $DB_in = $pdo->prepare($sql);
        $DB_in -> bindValue(':email',$email);
        $DB_in -> bindValue(':passwd',$passwd);
        $DB_in -> bindValue(':phone',$phone);
        $DB_in -> bindValue(':student_number',$student_number);
        $DB_in -> bindValue(':name',$name);
        $DB_in -> bindValue(':major',$major);
        $DB_in -> execute(); 
        
        $pdo = null;
        echo "<script>
                alert('회원가입 성공');
            </script>";
        echo "<script> location.href='index.php'; </script>";
        
    }
?>
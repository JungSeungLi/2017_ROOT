 <?php 
            require_once('DB_conn.php'); 
            $bNo = $_GET['bno'];

            $sql = "select b_id from board_free where b_no=:bNo";
            
            $DB_q = $pdo->prepare($sql);
            $DB_q -> bindValue(':bNo',$bNo);
            $DB_q -> execute();
            
            $result = $DB_q -> fetch();

            if(($_SESSION['name'] != $result['b_id']) && ($_SESSION['name'] != "root"))
            {
                 echo "<script>
                window.close(); // 일반적인 현재 창 닫기
      window.open('about:blank','_self').self.close();  // IE에서 묻지 않고 창 닫기  
      alert('부적절한 접근이 감지됨.');
                </script>";
                exit;
            }

            $sql = "delete from board_free where b_no=:bNo";
            
            $DB_q = $pdo->prepare($sql);
            $DB_q -> bindValue(':bNo',$bNo);
            $DB_q -> execute();
            
            $check = $DB_q ? true : false;

            if($check)
            {
               echo 
                "<script>
                alert('삭제 완료 ');
                window.close(); // 일반적인 현재 창 닫기
      window.open('about:blank','_self').self.close();  // IE에서 묻지 않고 창 닫기  
              </script>";
            }

            
            exit;

        ?>
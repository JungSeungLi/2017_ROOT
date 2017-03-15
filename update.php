<html>
    <head>
        <meta charset="utf-8">
        <link href="css/borardview.css" rel="stylesheet">
        
        <title>Root Page</title>
        <?php 
            require_once('DB_conn.php'); 
            $bNo = $_GET['bno'];

            $sql = "select b_title, b_content, b_date, b_hit, b_id from board_free where b_no=:bNo";
            
            $DB_q = $pdo->prepare($sql);
            $DB_q -> bindValue(':bNo',$bNo);
            $DB_q -> execute();
            
            $result = $DB_q -> fetch();
        
            if(($_SESSION['name'] != $result['b_id']) && ($_SESSION['name'] != "root"))
            {
                 echo "<script>
                window.close(); // 일반적인 현재 창 닫기
      window.open('about:blank','_self').self.close();  // IE에서 묻지 않고 창 닫기  
      alert('작성자만 볼수 있습니다');
                </script>";
                exit;
            }
                         

        ?>
    </head>
    
    <body>
              <div class="boardview" style="padding-top:15px; ">
                  <center>
                       
                    <form action="updatequ.php" name="upd" method="post" onsubmit="return update_check()">
                       
                        <input type="hidden" name="b_no" value=" <?php echo $bNo ?>" >
                      
                        
                        <input type="text" name="title_up" value="<?php echo $result['b_title'] ?>" class="inputtitle" style="height:50px;">
                        
                        <br>
                        <textarea  name="content_up" class="inputtitle" style="height:350px;"><?php echo nl2br($result['b_content']); ?> </textarea>
                        
                        <div>
                        <input type="submit" class="tag" value="확인">
                    
                        </div>
                        
                  </form>
                        
                    </center>
                     
              </div>
              
              <script src="js/mine.js"></script>
              <script src="js/val_check.js"></script>
    </body>
</html>



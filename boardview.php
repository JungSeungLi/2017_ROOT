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
        <div class="layoutgood">
             <center>
              <div class="boardview">
                        <div class="boardbottom">
                            <?php echo $result['b_title'] ?>
                        </div>
                        
                        <div class="writeview">
                            <div class="write">글쓴이</div>
                            <div class="writename">
                                <?php echo $result['b_id'] ?>
                            </div>
                            
                            <div class="write">날짜</div>
                            <div class="writename1">
                                <?php echo $result['b_date'] ?>
                            </div>
                        </div>
                        

                        
                        <div class="content">
                        <?php echo nl2br($result['b_content']); ?>
                        </div>
                            
                        <div class="substring">
                                
                                <div>
                                    <?php
                                    
                                    $sql2 = "select * from sub_string where idx=:bNo";
            
                                    $DB_q2 = $pdo->prepare($sql2);
                                    $DB_q2 -> bindValue(':bNo',$bNo);
                                    $DB_q2 -> execute();

                                    $result2 = $DB_q2 -> fetchAll();
                       
                                    foreach($result2 as $row2)
                                    {
                                    ?>
                                        <div align="left" style="padding:5px;"><?php echo $row2['name']; ?> : 
                                            <?php echo $row2['string']; ?>
                                        </div>
            
                                    <?php
                                    }
                                    ?>
                                </div>
                            
                            
                                <form action="substring.php" method="post" name="sub_s" onsubmit="return sub_string_check()">
                                    <input type="hidden" name="bNo" value="<?php echo $bNo ?>">
                                    <input type="text" name="string" class="tag">
                                    <input type="submit" value="확인" class="tag">
                                </form>
                        </div>
                                  
              </div>
       
  
      
              
              
                        <div>
                                         
                        <a href="delete.php?bno=<?php echo $bNo ?>" class="tag">삭제</a>
                        
                        <a href="javascript:popupOpen2(<?php echo $bNo; ?>);" class="tag">수정</a>
                                             
                        </div>
             </center>
             </div>
              
              <script src="js/mine.js"></script>
              <script src="js/val_check.js"></script>
    </body>
</html>



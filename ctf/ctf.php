<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SDHSROOT</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/tag.css">

  
    <?php
        require_once('../DB_conn.php');
    
        if(!isset($_SESSION['name']))
        {
             echo "<script>
                        alert('로그인 하세요!.');
                        history.go(-1);
                </script>";
            
            exit;
        }
        else
        {
            $date = date("Y-m-d");
                            
            if($date=="2017-03-21")
            {
                $sql = "select * from succ where email=:email";
                $DB_q = $pdo->prepare($sql);
                $DB_q -> bindValue(":email",$_SESSION['email']);
                $DB_q -> execute();
                $result = $DB_q -> fetch();
                $check = $result ? true : false;

                if(!$check)
                {
                     echo "<script>
                            alert('1차 합격자가 아닙니다.');
                            history.go(-1);
                    </script>";

                    exit;
                }
            }
            else
            {
                 echo "<script>
                            alert('CTF 기간이 아닙니다');
                            history.go(-1);
                    </script>";

                    exit;
            }
        }
    
        $sql = "select * from succ ORDER BY score DESC";
        $DB_q = $pdo->query($sql);
        $result = $DB_q -> fetchAll();
    
    
        $sql = "select category, que_name, score from question where 1";
        $DB_q = $pdo->query($sql);
        $result2 = $DB_q -> fetchAll();
    
    
    
    
    ?>
    
    
</head>

<body>
    
  
    <center>
        <span class="ctf">Root CTF</span>
  </center>
    
    
<div class="screen glitch">
  <div class="clock is-off"><span class="time" data-time=""></span></div>
  <div class="figure"></div>
  <div class="figure-mask"></div>
</div>
   
  <center>
       
        <form method="post" action="answer_check.php">
            <input type="text" class="answer" required name="answer" placeholder="Answer Input">
        </form>   
      
      <table>
        <thead>
            <tr>
                <th class="thd">Rank</th>
                <th class="thd">Name</th>
                <th class="thd">Score</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rank = 1;
            foreach($result as $row)
            {
            ?>
            <tr>
                <td class="imroot"><?php echo $rank; ?></td>
                <td class="imroot"><?php echo $row['name']?></td>
                <td class="imroot"><?php echo $row['score'] ?></td>
            </tr>
            <?php
            $rank++;
            }
            ?>
           
        </tbody>
      </table>
      
      
      
      
     <div class="que_list">
        <ul>
             <li class="menu">
                 
                 <div class="question_title">Question Point</div>
                 
                <a><img src="" alt="Crypto" class="mgin"/></a>
                <ul class="hide">
                    <?php
                    foreach($result2 as $row2)
                    {
                 ?>
                    <li>
                        <?php
                    if($row2['category'] == "Crypto")
                    {
                    ?>
                         <li><?php echo $row2['que_name']; ?>  [ <?php echo $row2['score']; ?> ]
                        </li>
                    <?php
                    }
                    ?>
                    </li>
                 <?php
                  }
            ?>
                </ul>
         <br>
         <a><img src="" alt="Forensic" class="mgin"/></a>
                <ul class="hide">
                    <?php
                    foreach($result2 as $row2)
                    {
                 ?>
                    <li>
                        <?php
                    if($row2['category'] == "Forensic")
                    {
                    ?>
                         <li><?php echo $row2['que_name']; ?>  [ <?php echo $row2['score']; ?> ]
                        </li>
                    <?php
                    }
                    ?>
                    </li>
                 <?php
                  }
            ?>
                </ul>
         <br>
      
              <a><img src="" alt="MISC" class="mgin"/></a>
                <ul class="hide">
                    <?php
                    foreach($result2 as $row2)
                    {
                 ?>
                    <li>
                        <?php
                    if($row2['category'] == "MISC")
                    {
                    ?>
                         <li><?php echo $row2['que_name']; ?>  [ <?php echo $row2['score']; ?> ]
                        </li>
                    <?php
                    }
                    ?>
                    </li>
                 <?php
                  }
            ?>
                </ul>
    
    <br>
                  <a><img src="" alt="Programming" class="mgin"/></a>
                <ul class="hide">
                    <?php
                    foreach($result2 as $row2)
                    {
                 ?>
                    <li>
                        <?php
                    if($row2['category'] == "Programming")
                    {
                    ?>
                         <li><?php echo $row2['que_name']; ?>  [ <?php echo $row2['score']; ?> ]
                        </li>
                    <?php
                    }
                    ?>
                    </li>
                 <?php
                  }
            ?>
                </ul>
    <br>
    <a><img src="" alt="Pwnable" class="mgin"/></a>
                <ul class="hide">
                    <?php
                    foreach($result2 as $row2)
                    {
                 ?>
                    <li>
                        <?php
                    if($row2['category'] == "Pwnable")
                    {
                    ?>
                         <li><?php echo $row2['que_name']; ?>  [ <?php echo $row2['score']; ?> ]
                        </li>
                    <?php
                    }
                    ?>
                    </li>
                 <?php
                  }
            ?>
                </ul>

<br>

  <a><img src="" alt="Reversing" class="mgin"/></a>
                <ul class="hide">
                    <?php
                    foreach($result2 as $row2)
                    {
                 ?>
                    <li>
                        <?php
                    if($row2['category'] == "Reversing")
                    {
                    ?>
                         <li><?php echo $row2['que_name']; ?>  [ <?php echo $row2['score']; ?> ]
                        </li>
                    <?php
                    }
                    ?>
                    </li>
                 <?php
                  }
            ?>
                </ul>
    
<br>
<a><img src="" alt="Web" class="mgin"/></a>
                <ul class="hide">
                    <?php
                    foreach($result2 as $row2)
                    {
                 ?>
                    <li>
                        <?php
                    if($row2['category'] == "Web")
                    {
                    ?>
                         <li><?php echo $row2['que_name']; ?>  [ <?php echo $row2['score']; ?> ]
                        </li>
                    <?php
                    }
                    ?>
                    </li>
                 <?php
                  }
            ?>
                </ul>
    
    
         
                
         
         
         
         
            </li>
        </ul> 
    </div>
  </center>
    
    
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/menu.js"></script>
    <script src="js/index.js"></script>

</body>
</html>

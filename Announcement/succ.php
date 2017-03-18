<html>
<head>
    <title>Root Page</title>
    <link rel="stylesheet" href="../css/acc.css">
    <?php
        if(!(isset($_SESSION['name'])))
        {
             echo "<script>
                        alert('로그인 하세요!.');
                        history.go(-1);
                </script>";
            
             exit;
        }
        else
        {
            $date1 = date("Ymd");
            if((strcmp($date1 , "20170320")))
            {
                 echo "<script>
                            alert('아직 확인하실수 없습니다1.');
                             history.go(-1);
                    </script>";

                 exit; 
            }
        }
    ?>
</head>
<body>
    
<center>

    <?php
    if($_SESSION['check'] == "default")
    {
    ?>
    <video autoplay loop poster="img.jpg">
        <source src="yourname.mp4" type="video/mp4">
    </video>
    
    <div class="good"><span class="haha">
        1st Announcement<br>Check</span></div>
      <form  action="search.php" method="post">
        <input type="text" placeholder="학번 입력 <8시 10분 이후 입력가능>" class="answer" name="search" disabled/>
      </form>

    <?php
    }
    else if($_SESSION['check'] == "good")
    {
    ?>
    <video autoplay loop poster="img.jpg">
        <source src="good.mp4" type="video/mp4">
    </video>
    
    <div class="good"><span class="haha" style="color:#86E57F;">Congratulation!</span></div>
    <?php
    }
    else if($_SESSION['check'] == "bad")
    {
    ?>
    <video autoplay loop poster="img.jpg">
        <source src="bad.mp4" type="video/mp4">
    </video>
    
     <div class="good"><span class="haha" style="color:red;">Sorry...</span></div>
    <?php
    }
    ?>
    
</center>
</body>
</html>
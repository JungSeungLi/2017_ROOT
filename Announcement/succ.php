<html>
<head>
    <title>Root Page</title>
    <link rel="stylesheet" href="../css/acc.css">
</head>
<body>
    
<center>

    <?php
    if($_SESSION['check'] == "default")
    {
    ?>
    <video autoplay loop poster="img.mp4">
        <source src="yourname.mp4" type="video/mp4">
    </video>
    
    <div class="good"><span class="haha">Primary successful<br> candidate check</span></div>

    <?php
    }
    else if($_SESSION['check'] == "good")
    {
    ?>
    <video autoplay loop poster="img.mp4">
        <source src="good.mp4" type="video/mp4">
    </video>
    
    <div class="good"><span class="haha" style="color:#86E57F;">Congratulation!</span></div>
    <?php
    }
    else if($_SESSION['check'] == "bad")
    {
    ?>
    <video autoplay loop poster="img.mp4">
        <source src="bad.mp4" type="video/mp4">
    </video>
    
     <div class="good"><span class="haha" style="color:red;">Sorry...</span></div>
    <?php
    }
    ?>
    
    <form  action="search.php" method="post">
        <input type="text" placeholder="학번 입력" class="answer" name="search">
    </form>
    
</center>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Root Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/borard.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php
        require_once("DB_conn.php");
                        
        $sql = "select * from board_free order by b_no desc";            
        $DB_q = $pdo->query($sql);
        $result = $DB_q->fetchAll();
    ?>
    
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">2017 Root</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Track</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#about">Download</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#fake-por">Portfolio</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#freebod">Question</a>
                    </li>
          
                    <?php 
                        if(isset($_SESSION['name']))
                        {?>
                    <li class="page-scroll">
                        <a href='#' data-target='#send' data-toggle='modal'>submission
</a>
                    </li>
                    
                    <?php
                        }
                    ?>
                    
                     <?php
                                        
                        if(isset($_SESSION['name']))
                        {?>
                    <li class="page-scroll">
                        <a 
                           
                        <?php 
                             $date1 = date("Ymd");
    
                        if(!(strcmp($date1 , "20170321")))
                       {
                       ?>
                        href="ctf/ctf.php"
                       <?php
                       }
                       else
                       {
                       ?>
                       href="javascript:alert('
CTF 기간이 아닙니다')"
                       <?php
                       }
                       ?>
                           >CTF
                        </a>
                    </li>
                    
                    <?php
                        }
                          
                        if(isset($_SESSION['name']))
                        {?>
                    <li class="page-scroll">
                        <a 
                           
                        <?php 
                             $date2 = date("Ymd");
    
                        if(!(strcmp($date2 , "20170320")))
                       {
                       ?>
                        href="Announcement/succ.php"
                       <?php
                       }
                       else
                       {
                       ?>
                       href="javascript:alert('
아직 확인하실수 없습니다.')"
                       <?php
                       }
                       ?>
                           >1ST_CHECK
                        </a>
                    </li>
                    
                    <?php
                        }
                    ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    

                    
                    
                    
                    
                    
                    
                    <?php 
                        if(isset($_SESSION['name']))
                        {
                            echo "<li class='page-scroll'>";
                            echo    "<a href='logout.php'>Logout</a>";
                            echo "</li>";
                        }
                        else
                        {
                            echo "<li class='page-scroll'>";
                            echo "<a href='#' data-target='#sign-in' data-toggle='modal'>Login</a>";
                            echo "</li>";
                        }
                    ?>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Root</span>
                        <hr class="star-light">
                        
                        <span class="skills">Welcome to Hacking Security Club, Seoul Digitech High School.
                        <br><br>
                        ChairMan<br>
                        1-이지운 | 2-이지운 | 3-김성현 | 4-이지훈 | 5-황주현 | 6-오경제<br></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
        
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Track</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>동아리 지원서</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>
                 1차 - 서류<br>2차 - CTF<br>3차 - 심층면접
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>
                    각각의 1, 2, 3차 합격자들은 본 페이지에서 학번으로 조회 가능합니다.<br>로그인 후 우측상단의 SUBMISSON 버튼을 사용하여 지원서 업로드가 가능합니다.
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a 
                       <?php
                       if(isset($_SESSION['name']))
                       {
                       ?>
                        href="filedown.php"
                       <?php
                       }
                       else
                       {
                       ?>
                       href="javascript:alert('
Please login')"
                       <?php
                       }
                       ?>
                       class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    
<section id="fake-por">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                

                <div class="col-sm-4 portfolio-item">
                    <a href="https://www.youtube.com/embed/A23OhD61pgA" class="portfolio-link" >
                      
                        <img src="img/youtube.png" class="img-responsive" alt="">
                    </a>
                </div>
                
                <div class="col-sm-4 portfolio-item">
                    <a href="https://www.youtube.com/embed/g6z-YS2DxMY" class="portfolio-link" >
                      
                        <img src="img/youtube.png" class="img-responsive" alt="">
                    </a>
                </div>
                
                <div class="col-sm-4 portfolio-item">
                    <a href="https://www.youtube.com/embed/bve7cNVigK4" class="portfolio-link" >
                      
                        <img src="img/youtube.png" class="img-responsive" alt="">
                    </a>
                </div>
                
                
                
            </div>
        </div>
    </section>
    
    
    <section id="freebod">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Question board</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <center>
                <table class="board">
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>제목</th>
                            <th>작성자</th>
                            <th>작성일</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($result as $row)
                            {
                                $datetime = explode(' ', $row['b_date']);
                                
                                $date = $datetime[0];
                                $time = $datetime[1];
                                if($date == Date('Y-m-d'))
                                    $row['b_date'] = $time;
                                else
                                    $row['b_date'] = $date;
                                
                        ?>
                        
                        <tr>
                            <td class="no"><?php echo $row['b_no']; ?></td>
                            <td class="title">
                                <a href="javascript:popupOpen(<?php echo $row['b_no']; ?>);">
                                
                                <?php echo $row['b_title']; ?>
                                
                                </a>
                                
                            </td>
                            <td class="id"><?php echo $row['b_id']; ?></td>
                            <td class="date"><?php echo $row['b_date']; ?></td>
                        </tr>
                        
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                </center>
                <div class="paging">
			
			</div>
                <?php
                if(isset($_SESSION['name']))
                {
                ?>
                
                <a href='#' class="btn btn-default" data-target='#write' data-toggle='modal' style="margin-left:83%">Write
</a>
                <?php } ?>
            </div>
        </div>
    </section>
    
    
  
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Dying Message</h3>
                        <p>كنت أشاهد لك. لا يكون في الطريق الخطأ.<br>As it giet om dizze klup folle en sliep. Kill my</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/sdhsroot/" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/113239232273926400982" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/SDHS_ROOT" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCtXoLWhBnLQXCYmLLP5Y8Lg" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://osu.ppy.sh/" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Site</h3>
                        <p>본 사이트를 공격할시 정보통신망 이용촉진 및 정보보호 등에 관한 법률에 의거하여 민형사상 처벌을 받을 수 있습니다.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; SDHS ROOT 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    

    

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Web</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Web Service의 전반적인 구성요소와 동작방법에 대해 학습하고<br> 연관된 타 서비스의 취약점 분석 혹은 침투테스트를 하는 분야이다.<br>
                            <strong>트랙 대표 : 김종현</strong></p>
                            <ul class="list-inline item-details">
                               
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Forensic</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>컴퓨터 공학 지식을 기반으로 범죄에 사용되거나 현장에 있는 디지털 기기에서<br> 범죄자 혹은 범죄에 대한 단서 혹은 증거를 수집하는 기술을 공부하는 분야이다.<br><strong>트랙 대표 : 한지혁</strong></p>
                            <ul class="list-inline item-details">
                               
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Reversing</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>소프트웨어 시스템의 구성요소를 알아 내고, 구성요소들 간의 관계를<br> 식별하며, 대상(object) 시스템을 분석하는 기술을 공부하는 분야이다.<br><strong>트랙 대표 : 오경제</strong>
</p>
                            <ul class="list-inline item-details">
                              
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="modal fade" id="sign-in" >
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- header -->
          <div class="modal-header">
            <!-- 닫기(x) 버튼 -->
            <button type="button" class="close" data-dismiss="modal">×</button>
            <!-- header title -->
            <h4 class="modal-title">Login</h4>
          </div>
          <!-- body -->
          <form action="login.php" method="post" name="login" onsubmit="return blank_check()">
          <center>
              <div class="modal-body">
                        <input type="text" name="email" placeholder="Email" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
                        <input type="password" name="passwd" placeholder="Password" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
              </div>
          </center>
          <!-- Footer -->
          <div class="modal-footer">
            <input type="submit" class="btn btn-default" value="로그인">
            </form>
            <a href='#' data-target='#sign-up' data-toggle='modal' class="btn btn-default">회원가입</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    <div class="modal fade" id="sign-up" >
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- header -->
          <div class="modal-header">
            <!-- 닫기(x) 버튼 -->
            <button type="button" class="close" data-dismiss="modal">×</button>
            <!-- header title -->
            <h4 class="modal-title">sign up</h4>
          </div>
          <!-- body -->
          <form action="signup.php" method="post" name="sign_up" onsubmit="return sign_up_check()">
          <center>
              <div class="modal-body">
                        <input type="text" name="email" placeholder="Email" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
                        <input type="password" name="passwd" placeholder="Password" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
                        <input type="password" name="passwd2" placeholder="Password check" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
                        <input type="text" name="phone" placeholder="Phone Number ex)xxx-xxxx-xxxx" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
                        <input type="text" name="student_number" placeholder="Student_number ex)20517" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
                        <input type="text" name="name" placeholder="name" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
                        <select name="major" style="width:70%; height:3em; border-radius:5px; margin:4px;">
                            <option value="유비쿼터스">유비쿼터스과</option>
                            <option value="게임영상">게임 영상과</option>
                            <option value="공간정보">공간 정보과</option>
                        </select>
                        <br>
              </div>
          </center>               
          <!-- Footer -->
          <div class="modal-footer">
              <input type="submit" class="btn btn-default" value="완료">
                </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="modal fade" id="send" >
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- header -->
          <div class="modal-header">
            <!-- 닫기(x) 버튼 -->
            <button type="button" class="close" data-dismiss="modal">×</button>
            <!-- header title -->
            <h4 class="modal-title">지원서 제출</h4>
          </div>
          <!-- body -->
            <form enctype="multipart/form-data" action="upload.php" method="post">
          <div class="modal-body">
                    <input type="file" name="myfile" class="btn btn-default">
          </div>
          <!-- Footer -->
          <div class="modal-footer">
              <button class="btn btn-default">보내기</button>
                </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
          </div>
        </div>
      </div>
    </div>

    
    <div class="modal fade" id="write" >
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- header -->
          <div class="modal-header">
            <!-- 닫기(x) 버튼 -->
            <button type="button" class="close" data-dismiss="modal">×</button>
            <!-- header title -->
            <h4 class="modal-title">Write</h4>
          </div>
          <!-- body -->
          <form action="write.php" method="post" name="soda" onsubmit="return write_check()">
          <center>
              <div class="modal-body">
                        <input type="text" name="godsoda" placeholder="Title" style="width:70%; height:3em; border-radius:5px; margin:4px;"><br>
                        <textarea placeholder="Content" name="godsoda2" style="width:70%; height:20em; border-radius:5px; margin:4px;"></textarea>
                        <br>
              </div>
          </center>
          <!-- Footer -->
          <div class="modal-footer">
            <input type="submit" class="btn btn-default" value="확인">
        </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
          </div>
            
        </div>
      </div>
    </div>
    
     
    
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    
    <script src="js/val_check.js"></script>
    
    <script src="js/mine.js"></script>

</body>

</html>

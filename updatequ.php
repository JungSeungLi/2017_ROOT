<?php

if(isset($_SESSION['name']))
{
    require_once('DB_conn.php');
    require_once('xssfilter.php');
    $b_no = $_POST['b_no'];
    $title =  RemoveXSS($_POST['title_up']);
    $content = RemoveXSS($_POST['content_up']);

    $sql = "update board_free set b_title=:title, b_content=:content where b_no=:b_no";

    $DB_q = $pdo->prepare($sql);
    $DB_q -> bindValue(':title',$title);
    $DB_q -> bindValue(':content',$content);
    $DB_q -> bindValue(':b_no',$b_no);
    $DB_q -> execute();

    $check = $DB_q ? true : false;

    if($check)
    {
        echo "<script>
                alert('Success');
                window.close(); // 일반적인 현재 창 닫기
      window.open('about:blank','_self').self.close();  // IE에서 묻지 않고 창 닫기  
            </script>";
    }
    else
    {
        echo "<script>
                alert('Please try again');
                history.go(-1);
            </script>";
    }
}
else
{
    echo "<script>
                alert('Detected');
                window.close(); // 일반적인 현재 창 닫기
      window.open('about:blank','_self').self.close();  // IE에서 묻지 않고 창 닫기  
            </script>";
}
?>
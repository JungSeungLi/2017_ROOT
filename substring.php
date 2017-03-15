<?php

if(isset($_SESSION['name']))
{
    require_once('DB_conn.php');
    require_once('xssfilter.php');
    $name = $_SESSION['name'];
    $content = RemoveXSS($_POST['string']);
    $bNo = $_POST['bNo'];
    

    $sql = "insert into sub_string (idx,name,string) values(:idx,:name,:string)";

    $DB_q = $pdo->prepare($sql);
    $DB_q -> bindValue(':idx',$bNo);
    $DB_q -> bindValue(':name',$name);
    $DB_q -> bindValue(':string',$content);
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
                history.go(-1);
            </script>";
}
?>
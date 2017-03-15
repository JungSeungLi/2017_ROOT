<?php

if(isset($_SESSION['name']))
{
    require_once('DB_conn.php');
    require_once('xssfilter.php');
    $id = $_SESSION['name'];
    $title = RemoveXSS($_POST['godsoda']);
    $content = RemoveXSS($_POST['godsoda2']);
    $date = date('Y-m-d H:i:s');

    $sql = "insert into board_free (b_no, b_title, b_content, b_date, b_hit, b_id) values(null,:title,:content,:date,0,:id)";

    $DB_q = $pdo->prepare($sql);
    $DB_q -> bindValue(':title',$title);
    $DB_q -> bindValue(':content',$content);
    $DB_q -> bindValue(':date',$date);
    $DB_q -> bindValue(':id',$id);
    $DB_q -> execute();

    $check = $DB_q ? true : false;

    if($check)
    {
        echo "<script>
                alert('Success');
                location.href='index.php';
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
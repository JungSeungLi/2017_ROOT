<?php

if(isset($_SESSION['name']))
{
    require_once('../DB_conn.php');
    require_once('../xssfilter.php');
    $id = $_SESSION['name'];
    $answer = RemoveXSS($_POST['answer']);
    $date = date('Y-m-d H:i:s');
    
    
    
    
    
    
    /*#################################################*/
    //로그 등록
    $sql = "INSERT INTO log(id, name, time, log_answer) VALUES (:id,:name,:time,:log_answer)";
    $DB_q = $pdo->prepare($sql);
    $DB_q -> bindValue(":id",$_SESSION['student_number']);
    $DB_q -> bindValue(":name",$_SESSION['name']);
    $DB_q -> bindValue(":time",$date);
    $DB_q -> bindValue(":log_answer",$answer);
    $DB_q -> execute(); 
    /*#################################################*/

    
    
    
    $sql = "select * from question where 1";

    $DB_q = $pdo->query($sql);
    $result = $DB_q->fetchAll();

    foreach($result as $row)
    {
        if(!(strcmp($row['answer'] , $answer)))
        {  
            $sql = "select checkanswer from succ where name='{$_SESSION['name']}'";
            $DB_q1 = $pdo->query($sql);
            $su1_check = $DB_q1->fetch();
            $str_ch = explode(',', $su1_check[0]);
            foreach($str_ch as $su_check2)
            {
                if($su_check2 == $row['que_name'])
                {
                    echo "<script>
                           alert('이미 정답을 입력했습니다.');
                           location.href='ctf.php';
                         </script>";
                    exit;
                }
            }
            
// location.href='ctf.php';
            /*#################################################*/
            $sql = "select name,score,checkanswer from succ";
            $DB_q = $pdo->query($sql);
            $suu_que = $DB_q->fetchAll();           //푼 문제 조회
            /*#################################################*/
    
            /*#################################################*/
            //답을 맞추었을때 기존에 푼 사람들 점수 30점 감점
            foreach($suu_que as $check)
            {
                $str2 = explode(',', $check['checkanswer']);
                
                foreach($str2 as $check2)
                {
                    if($check2 == $row['que_name'])
                    {
                        if($check['score'] > 30)
                        {
                            $repoint = $check['score'] - 30;
                        }
                        else
                        {
                            $repoint = $check['score'];
                        }
                        
                        $sql = "update succ set score=:repoint where name=:name";
                        $DB_q = $pdo->prepare($sql);
                        $DB_q -> bindValue(":repoint",$repoint);
                        $DB_q -> bindValue(":name",$check['name']);
                        $DB_q -> execute(); 
                    }
                }
                
            }                                    
            /*#################################################*/
            
        
            /*#################################################*/
            $sql = "SELECT * FROM succ WHERE name='{$_SESSION['name']}'";
            //점수를 올리기 위해 닉네임 조회, 동시에 푼문제 조회
            $DB_q = $pdo->query($sql);
            $pointAdd = $DB_q -> fetch();
            print_r($pointAdd);
            $point = $pointAdd['score'] + $row['score'];
            //기존에 있던 점수에서 새점수 더함
            $succ_que = $pointAdd['checkanswer'].",".$row['que_name'];
            //푼 문제 문자열로 합치기
                
            /*#################################################*/
            $sql = "update succ set score=:point, checkanswer=:succ_que where name=:name";
            //이름과 같은곳에 점수 재정의 및 푼 문제 등록
            $DB_q = $pdo->prepare($sql);
            $DB_q -> bindValue(":point",$point);
            $DB_q -> bindValue(":succ_que",$succ_que);
            $DB_q -> bindValue(":name",$_SESSION['name']);
            $DB_q -> execute();
         
            /*#################################################*/
            
            /*#################################################*/
            if($row['score'] > 30)
            {
                $que_repoint = $row['score'] - 30; //문제 점수 재정의
                $sql2 = "UPDATE question set score=:que_repoint where que_name=:que_name";
                $DB_q = $pdo->prepare($sql2);
                $DB_q -> bindValue(":que_repoint",$que_repoint);
                $DB_q -> bindValue(":que_name",$row['que_name']);
                $DB_q -> execute();
            }
            /*#################################################*/
            echo "<script>
                  alert('정답입니다.');
                      location.href='ctf.php';
                </script>";
            exit;
            
        }
    }
    
    echo "<script>
                        alert('오답입니다.');
                        location.href='ctf.php';
                </script>";
             exit;
    
    
}
?>
<?php
    // 설정
$uploads_dir = './uploads';
$allowed_ext = array('doc','docx');
 
// 변수 정리
$error = $_FILES['myfile']['error'];
$name = $_FILES['myfile']['name'];
$ext = array_pop(explode('.', $name));
 
// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			 echo "<script>
                alert('파일이 너무 큽니다.');
              </script>";
            echo "<script> history.go(-1); </script>";
			break;
		case UPLOAD_ERR_NO_FILE:
			 echo "<script>
                alert('파일이 첨부되지 않았습니다');
              </script>";
            echo "<script> history.go(-1); </script>";
			break;
		default:
			echo "<script>
                alert('파일이 업로드 되지 않았습니다');
              </script>";
            echo "<script> history.go(-1); </script>";
	}
	exit;
}
 
// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
	echo "<script>
                alert('기본 신청서를 제출 해주세요');
              </script>";
            echo "<script> history.go(-1); </script>";
	exit;
    return false;
}
$name = $_SESSION['student_number'].".doc";
// 파일 이동
if(move_uploaded_file( $_FILES['myfile']['tmp_name'], "$uploads_dir/$name"))
{
        echo "<script>
                alert('정상적으로 완료');
              </script>";
    echo "<script> location.href='index.php'; </script>";
}
else
{
        echo "<script>
                alert('실패 다시 시도해주세요');
              </script>";
    echo "<script> location.href='index.php'; </script>";
}

// 파일 정보 출력

?>
function popupOpen(bno){
	var popUrl = "boardview.php?bno="+bno;
    var popOption = "width=670, height=650, resizable=no, scrollbars=no, status=no;";    //팝업창 옵션(optoin)
		window.open(popUrl,"",popOption);
	}


function popupOpen2(bno){
	var popUrl = "update.php?bno="+bno;
    var popOption = "width=670, height=650, resizable=no, scrollbars=no, status=no;";    //팝업창 옵션(optoin)
    
    window.close(); // 일반적인 현재 창 닫기
      window.open('about:blank','_self').self.close();  // IE에서 묻지 않고 창 닫기  
    
    
		window.open(popUrl,"",popOption);
	}

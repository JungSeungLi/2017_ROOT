function blank_check() 
{
  if(login.email.value == "") 
  {
    alert("이메일을 입력해 주세요.");
    login.email.focus();
    return false;
  }
  else if(login.passwd.value == "")
  {
    alert("비밀번호를 입력해 주세요.");
    login.passwd.focus();
    return false;
  }
  else return true;
}


function write_check() 
{
   
        if(soda.godsoda.value == "")
        {
            alert("제목을 입력해주세요.");
            soda.godsoda.focus();
            return false;
        }
         else if(soda.godsoda2.value == "")
        {
            alert("내용을 입력해주세요.");
            soda.godsoda2.focus();
            return false;
        }
}


function sub_string_check() 
{
   
        if(sub_s.string.value == "")
        {
            alert("내용을 입력해주세요.");
            sub_s.string.focus();
            return false;
        }
       
}


function update_check() 
{
   
        if(upd.title_up.value == "")
        {
            alert("제목을 입력해주세요.");
            upd.title_up.focus();
            return false;
        }
         else if(upd.content_up.value == "")
        {
            alert("내용을 입력해주세요.");
            upd.content_up.focus();
            return false;
        }
}
        


function sign_up_check()
{
    var email = /^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i;
    var phone = /^01([0|1|6|7|8|9]?)-?([0-9]{3,4})-?([0-9]{4})$/;
    var passwd = /^[a-z0-9_]{4,20}$/; 
    var name = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
    var regNumber = /^[0-9]*$/;
    
    if(sign_up.email.value == "")
    {
        alert("이메일을 입력해 주세요");
        sign_up.email.focus();
        return false;
    }
    else if(sign_up.passwd.value == "")
    {
        alert("비밀번호를 입력해 주세요");
        sign_up.passwd.focus();
        return false;       
    }
    else if(sign_up.passwd2.value == "")
    {
        alert("비밀번호 확인을 입력해주세요");
        sign_up.passwd.focus();
        return false;    
    }
    else if(sign_up.phone.value == "")
    {
        alert("휴대전화 번호를 입력해주세요");
        sign_up.phone.focus();
        return false;    
    }
    else if(sign_up.student_number.value == "")
    {
        alert("학번을 입력해주세요");
        sign_up.student_number.focus();
        return false;    
    }
     else if(sign_up.name.value == "")
    {
        alert("이름을 입력해주세요");
        sign_up.name.focus();
        return false;    
    }
    

    
    if(!email.test(sign_up.email.value))
    {
        alert("Email format is invalid");
        sign_up.email.focus();
        return false;
    }
    else if(!passwd.test(sign_up.passwd.value))
    {
        alert("Password format is invalid");
        sign_up.passwd2.focus();
        return false;       
    }
    else if(!((sign_up.passwd.value) == (sign_up.passwd2.value)))
    {
        alert("Passwords do not match");
        sign_up.passwd2.focus();
        return false;    
    }
    else if(!phone.test(sign_up.phone.value))
    {
        alert("The format is not valid.");
        sign_up.phone.focus();
        return false;    
    }
    else if(!regNumber.test(sign_up.student_number.value))
    {
        alert("The format is not valid.");
        sign_up.student_number.focus();
        return false;    
    }
    else if(!name.test(sign_up.name.value))
    {
        alert("The format is not valid.");
        sign_up.name.focus();
        return false;    
    }
    else return true;
    
}
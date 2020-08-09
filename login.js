function check_input(){
    if(!document.login.login_id.value){
        alert("아이디를 입력하세요");
        document.login.login_id.focus();
        return;
    }
    if(!document.login.login_pw.value){
        alert("비밀번호를 입력하세요");
        document.login.login_pw.focus();
        return;
    }
    document.login.submit();
}
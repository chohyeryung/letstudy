function check_input(){
    if(!document.modify.id.value){
        alert("변경할 아이디를 입력하세요");
        document.modify.id.focus();
        return;
    }
    if(!document.modify.pw.value){
        alert("변경할 비밀번호를 입력하세요");
        document.modify.pw.focus();
        return;
    }
    if(!document.modify.name.value){
        alert("변경할 이름을 입력하세요");
        document.modify.name.focus();
        return;
    }
    if(!document.modify.age.value){
        alert("변경할 나이를 입력하세요");
        document.modify.age.focus();
        return;
    }
    if(!document.modify.organization.value){
        alert("변경할 소속을 입력하세요");
        document.modify.organization.focus();
        return;
    }
    if((!document.modify.tele1.value || !document.modify.tele2.value || !document.modify.tele3.value)){
        alert("변경할 전화번호를 입력하세요");
        document.modify.tele1.focus();
        return;
    }
    if(!document.modify.email1.value || !document.modify.emadress.value){
        alert("변경할 이메일을 입력하세요");
        document.modify.email1.focus();
        return;
    }
    document.modify.submit();
}
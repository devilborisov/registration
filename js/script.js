//функция для доступа к кукам
function getCookie(name) {
    var cookie = " " + document.cookie;
    var search = " " + name + "=";
    var setStr = null;
    var offset = 0;
    var end = 0;
    if (cookie.length > 0) {
        offset = cookie.indexOf(search);
        if (offset != -1) {
            offset += search.length;
            end = cookie.indexOf(";", offset)
            if (end == -1) {
                end = cookie.length;
            }
            setStr = unescape(cookie.substring(offset, end));
        }
    }
    return(setStr);
}
//достаем куку с выбором языка
var cook=getCookie('lan')
//проверка на правильность расширения фотографии
function testFile(){
    var val=document.getElementById('file_load').value;
    var val = val.search(/^.*\.(?:jpg|jpeg|mp3|mp4)\s*$/ig);
    if (val!=0) {
        document.getElementById('image_').innerHTML="jpg,jpeg,gif,png";
        return false
    }else {
        document.getElementById('image_').innerHTML="*";
        return true;
    }
}
//проверяем правильность заполнения полей
function valid() {
    //переменные всех полей
            var f=document.getElementById('first').value;
            var l =document.getElementById('last').value;
            var log =document.getElementById('login').value;
            var em =document.getElementById('email').value;
            var pas =document.getElementById('pass').value;
            var re =document.getElementById('repass').value;
    //регулярные выражения для проверки полей
            var reg = /^[a-zA-Z][a-zA-Z\.]{2,20}$/;
            var reg_pas=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;
            var reg_em=/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/;
    //проверяем поля
            f = reg.test(f);
            l = reg.test(l);
            log = reg.test(log);
        //проверяем правильность повтора пароля
            var pas_res=reg_pas.test(pas);
        //проверяем почту
            em=reg_em.test(em);
    //вывод ошибок в случае неправильного заполнения полей
            if (f == false || l == false||log == false || pas_res == false||re != pas||re==pas||em==false) {
                if (f == false) {
                    //вывод языка в соответствии с значение КУКОВ
                    if (cook=='ru') {
                        document.getElementById('first_').innerHTML='Только латинские символы, не менее 3';
                        return false;
                    }else
                        document.getElementById('first_').innerHTML='Only letters at least 3';
                    return false;
                }else{document.getElementById('first_').innerHTML='*';}
                if (l == false) {
                    if (cook=='ru') {
                        document.getElementById('last_').innerHTML='Только латинские символы, не менее 3';
                        return false;
                    }else
                    document.getElementById('last_').innerHTML='Only letters at least 3';
                    return false;
                }else{document.getElementById('last_').innerHTML='*';}
                if (log == false) {
                    if (cook=='ru') {
                        document.getElementById('login_').innerHTML='Только латинские символы, не менее 3';
                        return false;
                    }else
                    document.getElementById('login_').innerHTML='Only letters at least 3';
                    return false;
                }else{document.getElementById('login_').innerHTML='*';}
                if (em==false) {
                    if (cook=='ru') {
                        document.getElementById('email_').innerHTML='Пример example@tut.by';
                        return false;
                    }else
                    document.getElementById('email_').innerHTML='example@tut.by';
                    return false;
                }else{document.getElementById('email_').innerHTML='*';}
                if (pas_res == false) {
                    if (cook=='ru') {
                        document.getElementById('password_').innerHTML='Буквы верхнего и нижнего регистра и цифры не менее 3 символов';
                        return false;
                    }else
                    document.getElementById('password_').innerHTML='Use uppercase and lowercase letters and numbers minima 3 characters';
                    return false;
                }else{document.getElementById('password_').innerHTML='*';}
                if(re!=pas){
                    if (cook=='ru') {
                        document.getElementById('repass_').innerHTML='Повторите';
                        return false;
                    }else
                    document.getElementById('repass_').innerHTML='Confirm password';
                    return false;
                }else{document.getElementById('repass_').innerHTML='*';}
            }
        }

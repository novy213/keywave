const regex = new RegExp(
    '^(([^<>()[\\]\\\\.,;:\\s@\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\"]+)*)|' +
    '(\\".+\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])' +
    '|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$'
);
function Email(){
    let text = document.getElementById("EmailInput").value;
    if(regex.test(text)){
        const image = document.getElementById('mail');
        if(image.src!='../img/check.png') {
            image.classList.add('hidden');
            setTimeout(() => {
                image.src = '../img/check.png';
                image.classList.remove('hidden');
            }, 250);
        }
    }
    else if(!regex.test(text)){
        const image = document.getElementById('mail');
        if(image.src!='../img/mail.png') {
            image.classList.add('hidden');
            setTimeout(() => {
                image.src = '../img/mail.png';
                image.classList.remove('hidden');
            }, 250);
        }
    }
}
document.getElementById("LoginButton").addEventListener('click',()=>{
    location.href = "./login.php";
});

document.getElementById("RegisterButton").addEventListener('click',()=>{
    location.href = "./register.php";
});

function EmailSend(fromButton = false) {
    var responseText;
    if (fromButton) {
        var email = document.getElementById("EmailInput").value;
        if(!regex.test(email)){
            alert("Prosze podać poprawny email");
            return;
        }

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "../php/emailSend.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function (){
            if(xhr.readyState ===4 && xhr.status===200){
                responseText = xhr.responseText;
                alert(xhr.responseText);
            }
        }
        xhr.send("email=" + encodeURIComponent(email));
    }
    document.getElementById('EmailSendButton').style.opacity = 0.5;
    document.getElementById('EmailSendButton').disabled = true;
    var czas = parseInt(getCookie('czas')) || 60;
    var licznik = setInterval(function() {
        document.getElementById('LabelForMail').textContent = 'Pozostało: ' + czas + ' sekund';
        czas--;
        setCookie('czas', czas);
        if (czas < 0 || responseText == 'Nie można było odnaleźć takiego użytkownika') {
            clearInterval(licznik);
            document.getElementById('EmailSendButton').disabled = false;
            document.getElementById('LabelForMail').textContent = "Send mail";
            document.getElementById('EmailSendButton').style.opacity = 1;
            deleteCookie('czas');
        }
    }, 1000);
}
function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length === 2) return parts.pop().split(";").shift();
}

function setCookie(name, value) {
    var expirationDate = new Date();
    expirationDate.setSeconds(expirationDate.getSeconds() + value);
    document.cookie = name + "=" + value + "; expires=" + expirationDate.toUTCString() + "; path=/";
}

function deleteCookie(name) {
    document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/;';
}
window.addEventListener('load', function() {
    var zapisanyCzas = getCookie('czas');
    if (zapisanyCzas) {
        EmailSend();
    }
});
window.addEventListener('unload', function() {
    // zrobic zeby skrypt sie wykonywal po zakonczeniu strony
});
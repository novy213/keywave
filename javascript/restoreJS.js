const regex = new RegExp(
    '^(([^<>()[\\]\\\\.,;:\\s@\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\"]+)*)|' +
    '(\\".+\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])' +
    '|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$'
);
function Eye(){
    let src = document.getElementById("eye").src;
    var input = document.getElementById("PasswordInput");
    if(src=="http://localhost/img/visible.png"){
        document.getElementById("eye").src = "http://localhost/img/hide.png";
        input.type = "text";
    }
    else if(src=="http://localhost/img/hide.png"){
        document.getElementById("eye").src = "http://localhost/img/visible.png";
        input.type = "password";
    }
}
function Email(){
    let text = document.getElementById("EmailInput").value;
    if(regex.test(text)){
        const image = document.getElementById('mail');
        if(image.src!='http://localhost/img/check.png') {
            image.classList.add('hidden');
            setTimeout(() => {
                image.src = 'http://localhost/img/check.png';
                image.classList.remove('hidden');
            }, 250);
        }
    }
    else if(!regex.test(text)){
        const image = document.getElementById('mail');
        if(image.src!='http://localhost/img/mail.png') {
            image.classList.add('hidden');
            setTimeout(() => {
                image.src = 'http://localhost/img/mail.png';
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

function EmailSend() {
    document.getElementById('EmailSendButton').style.opacity = 0.5;
    document.getElementById('EmailSendButton').disabled = true;

    var czas = parseInt(getCookie('czas')) || 120;
    if (czas < 0) {
        // Wysłanie e-maila
    }

    var licznik = setInterval(function() {
        document.getElementById('LabelForMail').textContent = 'Pozostało: ' + czas + ' sekund';
        czas--;
        setCookie('czas', czas);

        if (czas < 0) {
            clearInterval(licznik);
            document.getElementById('EmailSendButton').disabled = false;
            document.getElementById('EmailSendButton').textContent = "Send mail";
            document.getElementById('EmailSendButton').style.opacity = 1;
            deleteCookie('czas');
        }
    }, 1000);
}
// Funkcja do odczytywania pliku cookie
function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length === 2) return parts.pop().split(";").shift();
}

// Funkcja do ustawiania pliku cookie
function setCookie(name, value) {
    var expirationDate = new Date();
    expirationDate.setSeconds(expirationDate.getSeconds() + value);
    document.cookie = name + "=" + value + "; expires=" + expirationDate.toUTCString() + "; path=/";
}

// Funkcja do usuwania pliku cookie
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
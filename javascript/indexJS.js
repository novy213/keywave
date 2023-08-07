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
document.getElementById("ResetPassword").addEventListener('click',()=>{
    location.href = "./restorePassword.php";
});

document.getElementById("RegisterButton").addEventListener('click',()=>{
    location.href = "./register.php";
});
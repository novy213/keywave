const regex = new RegExp(
    '^(([^<>()[\\]\\\\.,;:\\s@\\"]+(\\.[^<>()[\\]\\\\.,;:\\s@\\"]+)*)|' +
    '(\\".+\\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\])' +
    '|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$'
);
function Eye(){
    let alt = document.getElementById("eye").alt;
    var input = document.getElementById("PasswordInput");
    if(alt=="hide"){
        document.getElementById("eye").src = "../img/visible.png";
        document.getElementById("eye").alt = 'visible';
        input.type = "text";
    }
    else if(alt=="visible"){
        document.getElementById("eye").src = "../img/hide.png";
        document.getElementById("eye").alt = 'hide';
        input.type = "password";
    }
}
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
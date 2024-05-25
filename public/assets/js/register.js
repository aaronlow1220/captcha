let form = document.querySelector("#regForm");
let captcha = document.querySelector("#captchaCheck");
let delayInMilliseconds = 2000;

captcha.onclick = function () {
    captcha.disabled = true;

    setTimeout(function () {
        console.log("hehe");
        form.submit();
    }, delayInMilliseconds);
};

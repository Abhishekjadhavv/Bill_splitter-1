const password = document.querySelector("#password");
const ComPassword = document.querySelector("#Cpassword");
const hideBtn = document.querySelectorAll(".hide-btn");


let sign_form = document.querySelector("#sign_form");
let email = document.querySelector("#email");
let user_name = document.querySelector("#username");
let Password = document.querySelector("#password");
let alertMsg = document.querySelector('.alert'),
    alertSpan = document.querySelector('.alert span');



hideBtn[0].addEventListener("click",()=>{
    password.type = password.type === "password" ? "text" : "password";
    hideBtn[0].classList.toggle('bxs-show');
});

hideBtn[1].addEventListener("click",()=>{
    ComPassword.type = ComPassword.type === "password" ? "text" : "password";
    hideBtn[1].classList.toggle('bxs-show');
});

// Form submit form js 
sign_form.addEventListener("submit", (e) => {
    e.preventDefault();
    let email_value = email.value;
    let msg,email_vali = true, user_vali = true, pass_vali = true;
    
    //validate Email
     let reg=/^([0-9a-zA-Z]+)\@([a-zA-Z0-9]+)\.([a-zA-Z]){2,7}$/;
    // validate name here
    let userName = /^[a-zA-Z]([0-9a-zA-Z]){4,100}$/;
    // validate Password here
    let pass =/^([\%\!\_\-\?\/\$ \@\&\#\.a-zA-Z0-9]){8,50}$/; 

    if(!reg.test(email_value)) {
       msg = "Your email must be valid..!";
       email_vali = false;
    }
    else if(!pass.test(Password.value)){
        msg = "Password must be at least 8 characters"; 
        pass_vali = false;
     }
    else if(!userName.test(user_name.value)){
       msg = "User name must be at least 5 characters"; 
       user_vali = false;
    }

    if(email_vali && user_vali && pass_vali){
            let xml = new XMLHttpRequest();

        xml.open("POST", "partials/signupdata.php", true);

        xml.onload = (() => {
            if (xml.readyState == 4 && xml.status == 200) {
                if(xml.response === "exit"){
                    alertMsg.classList.add("active"); 
                    alertSpan.innerText = "User Already Exit";
                }else if(xml.response === "Not Match"){
                   alertMsg.classList.add("active"); 
                   alertSpan.innerText = "Password and Confirm Password should match";
                }
                else{
                    alertMsg.classList.add("active"); 
                    alertSpan.innerText = "You Can Login Now";
                    sign_form.reset();
                }
            }
        })

        let formData = new FormData(sign_form);
        xml.send(formData);

    }else{
       alertMsg.classList.add("active"); 
       alertSpan.innerText = msg;
    }
});


setInterval(() => {
    alertMsg.classList.remove("active"); 
}, 5000);
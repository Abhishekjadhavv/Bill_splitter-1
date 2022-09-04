const password = document.querySelector("#password");
const hideBtn = document.querySelector(".hide-btn");




hideBtn.addEventListener("click", () => {
    password.type = password.type === "password" ? "text" : "password";
    hideBtn.classList.toggle('bxs-show');
});



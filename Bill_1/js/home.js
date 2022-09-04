const userImg = document.querySelector(".user-img img"),
dropMenu = document.querySelector(".drop-menu"),
closeDrop = document.querySelector(".close-drop");

// ---- click event on user img---
userImg.addEventListener("click",()=>{
    dropMenu.classList.add("active");
    closeDrop.classList.add("active");
});

// ---- click event on close Drop---
closeDrop.addEventListener("click",()=>{
    dropMenu.classList.remove("active");
    closeDrop.classList.remove("active");
});
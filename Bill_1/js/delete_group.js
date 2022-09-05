const trash = document.querySelectorAll(".trash");

for (const item of trash) {

    item.addEventListener("click",(e)=>{
        let spanValue  = e.target.parentNode.previousElementSibling.lastChild.previousElementSibling;
        let xml = new XMLHttpRequest();
        xml.open("POST", `partials/delete_group.php?groupName=${spanValue.innerText}`, true);
        xml.onload = (() => {
        })
        xml.send();
        window.location.reload();
        window.location.reload();
     });
}
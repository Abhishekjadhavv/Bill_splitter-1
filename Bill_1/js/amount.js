const totalBtn = document.querySelectorAll('.total_btn');


for (const btn of totalBtn) {
    btn.addEventListener("click",(e)=>{
       e.preventDefault();
       let amountForm = btn.parentNode;
       let amountValue = amountForm.childNodes[1].value;
       let groupName = amountForm.childNodes[1].name; 

      if(amountValue){
        let xml = new XMLHttpRequest();
    
        xml.open("POST", `partials/amout.php?value=${amountValue}&groupname=${groupName}`, true);
    
        xml.onload = (() => {
        })
    
        let formData = new FormData(amountForm);
        xml.send(formData);
        location.reload();
      }
    });
}

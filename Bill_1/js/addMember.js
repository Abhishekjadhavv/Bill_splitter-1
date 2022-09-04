const formAddMember = document.querySelector(".form-add-member");
const groupName = document.querySelector("#groupName");

let arrForName = [];
let searchForm;

function addMember(item) {

    if (item.checked) {
        let result = arrForName.some(ele => ele === item.name)
        if (result != true) {
            arrForName.push(item.id);
        }
    } else {
        let index = arrForName.findIndex((ele) => ele === item.id);
        arrForName.splice(index, 1);
    }
    searchForm = document.querySelector(`#${item.parentNode.parentNode.id}`);

}


formAddMember.addEventListener("submit", (e) => {
    e.preventDefault();
    if(arrForName.length !== 0){
        let xml = new XMLHttpRequest();

        xml.open("POST", `partials/addMember.php?groupName=${groupName.value}&id=${arrForName}`, true);
    
        xml.onload = (() => {
        })
    
        let formData = new FormData(searchForm);
        xml.send(formData);
        // alert("Successfully added please go and check groups page");
        window.location.assign('/projectfile/Bill_1/groups.php');
    }else{
        alert("Make sure atleast one checkbox is checked");
    }
    formAddMember.reset();
});


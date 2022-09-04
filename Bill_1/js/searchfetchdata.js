const form = document.querySelector("#form");
const search = document.querySelector("#search");
const searchdata = document.querySelector(".inner-search-box");
const showSearchResult = document.querySelector(".search-data");
const formAddmember = document.querySelector(".form-add-member");

search.addEventListener("input", (e) => {
    e.preventDefault();
    if (e.value !=="") {
        let xml = new XMLHttpRequest();

        xml.open("POST", "partials/searchdata.php", true);

        xml.onload = (() => {
            if (xml.readyState == 4 && xml.status == 200) {
                if(search.value.length > 0){
                    showSearchResult.classList.add("active");
                    let response = xml.response;
                    searchdata.innerHTML = response;
                    // --- hide add member form ---
                    if(response.split("class=")[1].slice(1,8) === "noFound"){
                        formAddmember.classList.remove("active");
                    }else{
                        formAddmember.classList.add("active");
                    }

                }else{
                    showSearchResult.classList.remove("active");
                }
            }
        })

        let formData = new FormData(form);
        xml.send(formData);
    }
});



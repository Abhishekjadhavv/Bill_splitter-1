const groupsHeader = document.querySelectorAll(".groups-header");

function removeClasses() {
    for (const header of groupsHeader) {
        let nextElement = header.parentNode.classList;
        nextElement.remove("active");
    }
}

for (const header of groupsHeader) {
    header.addEventListener("click", () => {
        let nextElement = header.parentNode.classList;
        if (!nextElement.contains('active')) {
            removeClasses();
            nextElement.add("active");
        } else {
            nextElement.remove("active");
        }
    });
}

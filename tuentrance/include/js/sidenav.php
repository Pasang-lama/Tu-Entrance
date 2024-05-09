<script>
var sideNavOpenBtn = document.querySelectorAll(".sidenavOpenBtn");
var sideNavcloseBtn = document.querySelectorAll(".sidenavCloseBtn");
sideNavOpenBtn.forEach(function(element) {
    element.addEventListener("click", function(event) {
        event.preventDefault();
        var targetNavLink = this.getAttribute("data-nav-target");
        if (typeof targetNavLink !== "undefined" && targetNavLink) {
            showSideNav(targetNavLink);
            const sideNavMenu = document.getElementById(`${targetNavLink}`);
            document.addEventListener("mouseup", (e) => {
                if (!sideNavMenu.contains(e.target)) {
                    sideNavMenu.classList.remove("open");
                    document.body.classList.remove("open-opacity");
                }
            });
        }
    });
});
sideNavcloseBtn.forEach(function(element) {
    element.addEventListener("click", function(event) {
        event.preventDefault();
        var targetNavLink = this.getAttribute("data-nav-target");
        if (typeof targetNavLink !== "undefined" && targetNavLink) {
            hideSideNav(targetNavLink);
        }
    });
});
const showSideNav = (sideNavTarget) => {
    document.getElementById(`${sideNavTarget}`).classList.add("open");
    document.body.classList.add("open-opacity");
}
const hideSideNav = (sideNavTarget) => {
    document.getElementById(`${sideNavTarget}`).classList.remove("open");
    document.body.classList.remove("open-opacity");
}



// tabel inn description 
var tablesInDescription = document.querySelectorAll(
    ".text-document-content table"
);
tablesInDescription.forEach(function(table) {
    var parentDiv = document.createElement("div");
    parentDiv.classList.add("table-wrapper");
    table.parentNode.insertBefore(parentDiv, table);
    parentDiv.appendChild(table);
});
</script>
<script>
    var targeTabButton = document.querySelectorAll(".tab-nav .tab-link");
targeTabButton.forEach(function(element) {
    element.addEventListener("click", function(event) {
        event.preventDefault();
        var targetTabcontents = this.getAttribute("data-tab-content").split(" ");
        var parenttab = targetTabcontents[0];
        var targetTabcontent = targetTabcontents[1];
        const link = `#${parenttab} .tab-link.active`;
        const link2 = `#${parenttab} .tab-content`;
        document.querySelector(link).classList.remove("active");
        element.classList.add("active");
        if (typeof targetTabcontent !== "undefined" && targetTabcontent) {
            showContent(targetTabcontent, link2);
        }
    });
});
const showContent = (targetContent, tabcontent) => {
    document.querySelectorAll(tabcontent).forEach(tab => {
        tab.classList.remove("active");
    });
    document.getElementById(`${targetContent}`).classList.add("active");
}
</script>
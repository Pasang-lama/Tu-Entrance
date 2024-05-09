<script>
    var modalOpenBtn = document.querySelectorAll(".modal-open-btn");
var modalCloseBtn = document.querySelectorAll(".modal-Close-Btn");
modalOpenBtn.forEach(function(element) {
    element.addEventListener("click", function(event) {
        event.preventDefault();
        var targetModal = this.getAttribute("data-modal-target");
        if (typeof targetModal !== "undefined" && targetModal) {
            document.getElementById(`${targetModal}`).style.display = "block";
            document.body.classList.add("open-opacity");
            var modal = document.getElementById(`${targetModal}`).children[0];
            console.log(modal);
            document.addEventListener("mouseup", (e) => {
                if (!modal.contains(e.target)) {
                    document.getElementById(`${targetModal}`).style.display = "none";
                    document.body.classList.remove("open-opacity");
                }
            });
        }
    });
});
modalCloseBtn.forEach(function(element) {
    element.addEventListener("click", function(event) {
        event.preventDefault();
        var targetModal = this.getAttribute("data-modal-target");
        if (typeof targetModal !== "undefined" && targetModal) {
            document.getElementById(`${targetModal}`).style.display = "none";
            document.body.classList.remove("open-opacity");
        }
    });
});
</script>
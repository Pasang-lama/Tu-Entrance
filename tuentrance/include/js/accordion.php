<script>
document.addEventListener("DOMContentLoaded", function() {
const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");
accordionItemHeaders.forEach(accordionItemHeader => {
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if (accordionItemHeader.classList.contains("active")) {
        accordionItemBody.style.display = "block";
    } else {
        accordionItemBody.style.display = "none";
    }
    accordionItemHeader.addEventListener("click", event => {
        console.log("i am load");
        const currentlyActiveAccordionItemHeader = document.querySelector(
            ".accordion-item-header.active");
            console.log(currentlyActiveAccordionItemHeader);
        if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !==
            accordionItemHeader) {
            currentlyActiveAccordionItemHeader.classList.toggle("active");
            currentlyActiveAccordionItemHeader.nextElementSibling.style.display = "none";
        }
        accordionItemHeader.classList.toggle("active");
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.display = "block";
        } else {
            accordionItemBody.style.display = "none";
        }
    });
});
});
</script>
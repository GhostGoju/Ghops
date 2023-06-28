let isExpanded = false;

const card = document.querySelector(".card");
const row = document.querySelector(".row");

function toggleAnimation(values, animate) {
    animate.setAttribute(
        "values",
        !isExpanded ? values.join("; ") : values.slice().reverse().join("; ")
    );
    animate.beginElement();
}

function handleClick() {
    isExpanded = row.getAttribute("aria-expanded") === "true";

    if (isExpanded) {
        card.classList.remove("active");
    } else {
        card.classList.add("active");
    }

    row.setAttribute("aria-expanded", !isExpanded);
    row.setAttribute("aria-label", !isExpanded ? "Close Menu" : "Open Menu");
}

function initPath(clazz, descriptor) {
    const path = document.querySelector(clazz);
    path.setAttribute("d", descriptor);
}


row.addEventListener("keydown", (event) => {
    if (event.key === "Enter" || event.key === " ") {
        event.preventDefault();
        row.click();
    }
});


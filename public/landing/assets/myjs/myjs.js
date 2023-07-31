//////////////camera
const readMoreLinks_camera = document.querySelectorAll(".read-more-camera");

readMoreLinks_camera.forEach((readMoreLink_camera) => {
    readMoreLink_camera.addEventListener("click", function (e) {
        e.preventDefault();
        const limitedText_camera = findLimitedText(this);
        const fullText_camera = findFullText(this);

        // Check the text content instead of the value attribute
        if (
            readMoreLink_camera.textContent === "plus" ||
            readMoreLink_camera.textContent === "more"
        ) {
            if (readMoreLink_camera.textContent === "plus") {
                limitedText_camera.style.display = "none";
                fullText_camera.style.display = "inline";
                readMoreLink_camera.textContent = "moins";
            } else if (readMoreLink_camera.textContent === "more") {
                limitedText_camera.style.display = "none";
                fullText_camera.style.display = "inline";
                readMoreLink_camera.textContent = "less";
            }
            // For English, this would be "less"
        } else if (
            readMoreLink_camera.textContent === "moins" ||
            readMoreLink_camera.textContent === "less"
        ) {
            if (readMoreLink_camera.textContent === "less") {
                limitedText_camera.style.display = "inline";
                fullText_camera.style.display = "none";
                readMoreLink_camera.textContent = "more"; // For English, this would be "more"
            } else if (readMoreLink_camera.textContent === "moins") {
                limitedText_camera.style.display = "inline";
                fullText_camera.style.display = "none";
                readMoreLink_camera.textContent = "plus"; // For English, this would be "more"
            }
        }
    });
});

// Rest of the code remains the same.

function findLimitedText(element) {
    let parent = element.parentElement;
    while (parent) {
        const limitedText = parent.querySelector(".limited-text-camera");
        if (limitedText) {
            return limitedText;
        }
        parent = parent.parentElement;
    }
    return null;
}

function findFullText(element) {
    let parent = element.parentElement;
    while (parent) {
        const fullText = parent.querySelector(".full-text-camera");
        if (fullText) {
            return fullText;
        }
        parent = parent.parentElement;
    }
    return null;
}
//////centre
const readMoreLink = document.querySelector(".read-more");
const limitedText = document.querySelector(".limited-text");
const fullText = document.querySelector(".full-text");

readMoreLink.addEventListener("click", function (e) {
    e.preventDefault();
    if (
        readMoreLink.textContent === "plus" ||
        readMoreLink.textContent === "more"
    ) {
        if (readMoreLink.textContent === "plus") {
            limitedText_camera.style.display = "none";
            fullText.style.display = "inline";
            readMoreLink.textContent = "moins";
        } else if (readMoreLink.textContent === "more") {
            limitedText_camera.style.display = "none";
            fullText.style.display = "inline";
            readMoreLink.textContent = "less";
        }
        // For English, this would be "less"
    } else if (
        readMoreLink.textContent === "moins" ||
        readMoreLink.textContent === "less"
    ) {
        if (readMoreLink.textContent === "less") {
            limitedText_camera.style.display = "inline";
            fullText.style.display = "none";
            readMoreLink.textContent = "more"; // For English, this would be "more"
        } else if (readMoreLink.textContent === "moins") {
            limitedText_camera.style.display = "inline";
            fullText.style.display = "none";
            readMoreLink.textContent = "plus"; // For English, this would be "more"
        }
    }
});

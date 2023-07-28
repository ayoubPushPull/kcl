const readMoreLink = document.querySelector(".read-more");
const limitedText = document.querySelector(".limited-text");
const fullText = document.querySelector(".full-text");

readMoreLink.addEventListener("click", function (e) {
    e.preventDefault();
    if (readMoreLink.textContent === "plus") {
        limitedText.style.display = "none";
        fullText.style.display = "inline";
        readMoreLink.textContent = "moins";
    } else {
        limitedText.style.display = "inline";
        fullText.style.display = "none";
        readMoreLink.textContent = "plus";
    }
});

const readMoreLink_camera = document.querySelector(".read-more-camera");
const limitedText_camera = document.querySelector(".limited-text-camera");
const fullText_camera = document.querySelector(".full-text-camera");

readMoreLink_camera.addEventListener("click", function (e) {
    e.preventDefault();
    if (readMoreLink_camera.textContent === "plus") {
        limitedText_camera.style.display = "none";
        fullText_camera.style.display = "inline";
        readMoreLink_camera.textContent = "moins";
    } else {
        limitedText_camera.style.display = "inline";
        fullText_camera.style.display = "none";
        readMoreLink_camera.textContent = "plus";
    }
});
const readMoreLink_camera_1 = document.querySelector(".read-more-camera-1");
const limitedText_camera_1 = document.querySelector(".limited-text-camera-1");
const fullText_camera_1 = document.querySelector(".full-text-camera-1");

readMoreLink_camera_1.addEventListener("click", function (e) {
    e.preventDefault();
    if (readMoreLink_camera_1.textContent === "plus") {
        limitedText_camera_1.style.display = "none";
        fullText_camera_1.style.display = "inline";
        readMoreLink_camera_1.textContent = "moins";
    } else {
        limitedText_camera_1.style.display = "inline";
        fullText_camera_1.style.display = "none";
        readMoreLink_camera_1.textContent = "plus";
    }
});

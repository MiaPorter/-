document.addEventListener("DOMContentLoaded", function() {
    const minRange = document.getElementById("minRange");
    const maxRange = document.getElementById("maxRange");
    const minDisplay = document.getElementById("minPriceDisplay");
    const maxDisplay = document.getElementById("maxPriceDisplay");
    const track = document.querySelector(".slider-track");

    const min = parseInt(minRange.min);
    const max = parseInt(minRange.max);

    function formatNumber(num) {
        return Number(num).toLocaleString('ru-RU') + " ₽";
    }

    function updateTrack() {
        const percent1 = ((minRange.value - min) / (max - min)) * 100;
        const percent2 = ((maxRange.value - min) / (max - min)) * 100;

        track.style.background =
            "linear-gradient(to right, " +
            "#444444 " + percent1 + "%, " +
            "#FA6312 " + percent1 + "%, " +
            "#FA6312 " + percent2 + "%, " +
            "#444444 " + percent2 + "%)";
    }

    function updateValues() {
        if (parseInt(minRange.value) > parseInt(maxRange.value)) {
            minRange.value = maxRange.value;
        }
        minDisplay.value = formatNumber(minRange.value);
        maxDisplay.value = formatNumber(maxRange.value);
        updateTrack();
    }

    minRange.addEventListener("input", updateValues);
    maxRange.addEventListener("input", updateValues);
    updateValues();
});

document.addEventListener("DOMContentLoaded", function() {
    const minRange = document.getElementById("minAreaRange");
    const maxRange = document.getElementById("maxAreaRange");
    const minDisplay = document.getElementById("minAreaDisplay");
    const maxDisplay = document.getElementById("maxAreaDisplay");
    const track = document.querySelector(".slider-track-area");

    const min = parseInt(minRange.min);
    const max = parseInt(minRange.max);

    function formatNumber(num) {
        return num + " м²";
    }

    function updateTrack() {
        const percent1 = ((minRange.value - min) / (max - min)) * 100;
        const percent2 = ((maxRange.value - min) / (max - min)) * 100;
        track.style.background =
        "linear-gradient(to right, #444 " +
        percent1 + "%, #FA6312 " +
        percent1 + "%, #FA6312 " +
        percent2 + "%, #444 " +
        percent2 + "%)";
    }

    function updateValues() {
        if (parseInt(minRange.value) > parseInt(maxRange.value)) {
            minRange.value = maxRange.value;
        }
        minDisplay.value = formatNumber(minRange.value);
        maxDisplay.value = formatNumber(maxRange.value);
        updateTrack();
    }

    minRange.addEventListener("input", updateValues);
    maxRange.addEventListener("input", updateValues);

    updateValues();

});

const menuBtn = document.querySelector(".headerRight a");
const menuModal = document.getElementById("menuModal");
const closeMenu = document.getElementById("closeMenu");
const header = document.getElementById("header");

menuBtn.addEventListener("click", (e) => {
    e.preventDefault();
    menuModal.classList.add("active");
    header.classList.add("headerHidden");
});

closeMenu.addEventListener("click", () => {
    menuModal.classList.remove("active");
    header.classList.remove("headerHidden");
});

const menuLinks = document.querySelectorAll(".menuModal a");

menuLinks.forEach(link => {
    link.addEventListener("click", () => {
        menuModal.classList.remove("active");
        header.classList.remove("headerHidden");

        document.body.style.overflow = "auto";
    });
});
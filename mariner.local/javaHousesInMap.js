const items = document.querySelectorAll('.houseItem img');
const info = document.getElementById('infoBox');

items.forEach(item => {
    item.addEventListener('mouseenter', () => {
        const id = item.dataset.id;
        const house = houses[id];

        document.getElementById('houseId').innerText = 'Д' + house.id_house;
        document.getElementById('houseTitle').innerText = house.title_house;
        document.getElementById('houseFloors').innerText = house.number_floors + ' этаж';
        document.getElementById('houseRooms').innerText = house.number_rooms + ' комнаты';
        document.getElementById('houseArea').innerText = house.area_houses + ' м²';

        info.style.opacity = '1';
    });

    item.addEventListener('mouseleave', () => {
        info.style.opacity = '0';
    });
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
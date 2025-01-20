
//Navbar


const primaryNav = document.querySelector(".primary-nav");
const navToggle = document.querySelector(".mobile-nav-toggle");

navToggle.addEventListener('click', ()=> {
    const visibility = primaryNav.getAttribute("data-visible")

    if (visibility == "false"){
        primaryNav.setAttribute("data-visible", true);
        navToggle.setAttribute("aria-expanded", true);
    } else if (visibility == "true"){
        primaryNav.setAttribute("data-visible", false);
        navToggle.setAttribute("aria-expanded", false);
    }
});

document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
    this.classList.toggle('active');
});

//Navbar ends here

// support modal

let modal = document.querySelector(".support-modal-container");

let blurrModal = document.querySelector(".modal-blur");

let realModal = document.querySelector(".support-modal-container-3");

let closeModalBtn = document.querySelector(".close-modal");

let openModalBtn = document.querySelector(".support-btn");

openModalBtn.addEventListener("click", openModal);

closeModalBtn.addEventListener("click", closeModal);

function closeModal(){
    modal.style.display = "none";
    blurrModal.style.filter = "blur(0)";
    
};

function openModal() {
    console.log("Open modal clicked");
    modal.style.display = "block";
    blurrModal.style.filter = "blur(6px)";
};

window.onclick = function(event){
    if(event.target === modal){
        modal.style.display = "none";
        blurrModal.style.filter = "blur(0)";
    }
};

//Modal ends here
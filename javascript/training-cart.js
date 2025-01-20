// nav bar
const primaryNav = document.querySelector(".primary-nav");
const navToggle = document.querySelector(".mobile-nav-toggle");

navToggle.addEventListener('click', ()=> {
    const visibility = primaryNav.getAttribute("data-visible")

    if (visibility == "false"){
        primaryNav.setAttribute("data-visible", "true");
        navToggle.setAttribute("aria-expanded", "true");
    } else if (visibility == "true"){
        primaryNav.setAttribute("data-visible", "false");
        navToggle.setAttribute("aria-expanded", "false");
    }
});


document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
    this.classList.toggle('active');
});


// navbar ends here

// checkout slideout 

document.addEventListener('DOMContentLoaded', function() {

    const formContainer = document.querySelector(".form-container");
    const checkoutToggle = document.querySelector(".checkout-btn");
    const closeButton = document.querySelector(".close-btn");
    const placeOrder = document.querySelector(".place-order-btn");
    let blurred = document.querySelector(".blur");

    checkoutToggle.addEventListener('click', () => {
        if(totalValue > 0){

        const visibility = formContainer.getAttribute("data-visible");

        if (visibility == "false") {
            formContainer.setAttribute("data-visible", "true");
            checkoutToggle.setAttribute("aria-expanded", "true");
            blurred.style.filter = "blur(6px)"
        } else if (visibility == "true") {
            formContainer.setAttribute("data-visible", "false");
            checkoutToggle.setAttribute("aria-expanded", "false");
            blurred.style.filter = "blur(0)"
        }
    } else {
        alert("You need to buy something!");
    }
    });

    document.querySelector('.checkout-btn').addEventListener('click', function() {
            this.classList.toggle('active');
    });

    closeButton.addEventListener('click', () => {
        formContainer.setAttribute("data-visible", "false");
        checkoutToggle.setAttribute("aria-expanded", "false");
        blurred.style.filter = "blur(0)"
    });

    placeOrder.addEventListener('click', () => {
        formContainer.setAttribute("data-visible", "false");
        checkoutToggle.setAttribute("aria-expanded", "false");
        checkoutBtnClicked();
        blurred.style.filter = "blur(0)"
    });

});


//checkout slideout ends here

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





if (document.readyState == "loading"){
    document.addEventListener("DOMContentLoaded", ready)
} else {
    ready()
}


let totalValue = 0;

let shoppingCartExist = false;


function ready(){

    let removeCartItemButtons = document.querySelectorAll(".remove-btn")
    for (let i = 0; i < removeCartItemButtons.length; i++) {
    let button = removeCartItemButtons[i]
    button.addEventListener('click', removeCartItem)
    };

    let quantityInputs = document.getElementsByClassName("cart-quantity-input")
    for (let i = 0; i < quantityInputs.length; i++){
    let input = quantityInputs[i]
    input.addEventListener("change", quantityChanged)
    }

    let addToCartButtons = document.getElementsByClassName("add-btn")
    for (let i = 0; i < addToCartButtons.length; i++){
    let button = addToCartButtons[i]
    button.addEventListener("click", addToCartClicked)
    }

}


function checkoutBtnClicked() {
    if (totalValue > 0) {
        alert("Thank you for your purchase!");
        document.querySelector(".cart-items").innerHTML = ""; 
        updateCartTotal();
    } else {
        alert("You need to buy something!");
    }
}

function removeShoppingCart(){
    let shoppingCartItems = document.getElementsByClassName("shopping-cart-js")[0];
    if (shoppingCartItems) {
        shoppingCartItems.style.display = 'none'; 
    }
}


function removeCartItem(event) {
    let buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
    updateShoppingCartTotal()
}

function quantityChanged(event) {
    let input = event.target
    if(isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
    updateShoppingCartTotal()
}

function addToCartClicked(event) {
    let button = event.target
    let shopItem = button.parentElement.parentElement

    let title = shopItem.getElementsByClassName("product-label")[0].innerText
    let price = shopItem.getElementsByClassName("product-price")[0].innerText
    let imageSrc = shopItem.getElementsByClassName("product-img")[0].src
            
    addItemToCart(title, price, imageSrc)

    let quantity = 1;
    addItemToShoppingCart(quantity);

    updateCartTotal()
    updateShoppingCartTotal()
}

function addItemToCart(title, price, imageSrc){
    let cartRow = document.createElement("div")
    cartRow.classList.add("cart-row")
    let cartItems = document.getElementsByClassName("cart-items")[0]
    let cartItemNames = cartItems.getElementsByClassName("cart-item-title")
    for (let i = 0; i < cartItemNames.length; i++){
        if(cartItemNames[i].innerText == title){
            alert("This item is already added to the cart")
            return
        }
    }

    let cartRowContents = `
    <div class="cart-item-container flex">
        <div class="cart-item-title"><img src="${imageSrc}" alt="Tren">${title}
        </div>
        <div class="cart-price">${price} 
        </div>
        <div class="cart-quantity" id="cart-quantity">
            <input type="number" min="0" max="99" value="1" class="cart-quantity-input">
            <button type="button" class="remove-btn">Remove</button>
        </div>
    </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow);
    cartRow.getElementsByClassName("remove-btn")[0].addEventListener("click", removeCartItem)
    cartRow.getElementsByClassName("cart-quantity-input")[0].addEventListener("change", quantityChanged)
}

function addItemToShoppingCart(quantity){
    let shoppingCartItems = document.getElementsByClassName("shopping-cart-js")[0];

    if(shoppingCartExist == false){
    let cartRow = document.createElement("div")
    cartRow.classList.add("shopping-cart-row")
    let shoppingCartItems = document.getElementsByClassName("shopping-cart-js")[0]

    let cartRowContents = `
    <div class="shopping-cart-container flex">
        <div class="shopping-cart-items-container flex">
            <div class="shopping-cart-items">${quantity}
            </div>
            <div class="shopping-cart-btn-container">
            <a href="#shopping-cart">
            <img src="bilder/shopping-cart.png"></img>
            </a>
            </div>
        </div>
    </div>`
    cartRow.innerHTML = cartRowContents
    shoppingCartItems.append(cartRow);

    shoppingCartExist = true;
    }

    if (shoppingCartItems.style.display === 'none') {
        shoppingCartItems.style.display = 'block';
    }
}

function updateCartTotal(){
    let cartItemContainer = document.getElementsByClassName("cart-items")[0]
    let cartRows = cartItemContainer.getElementsByClassName("cart-row")
    let total = 0;
    for (let i = 0; i < cartRows.length; i++){
        let cartRow = cartRows[i]
        let priceElement = cartRow.getElementsByClassName("cart-price")[0]
        let quantityElement = cartRow.getElementsByClassName("cart-quantity-input")[0]
        
        if (priceElement && quantityElement) {
            let price = parseFloat(priceElement.innerText.replace("kr", ""));
            let quantity = quantityElement.value;
            total = total + (price * quantity);
        }
    }
    document.getElementsByClassName("checkout-total")[0].innerText = total +"kr"
    totalValue = total;
}




function updateShoppingCartTotal(){
    let cartItemContainer = document.getElementsByClassName("cart-items")[0]
    let cartRows = cartItemContainer.getElementsByClassName("cart-item-container")
    let totalQuantity = 0;
    for (let i = 0; i < cartRows.length; i++){
        let cartRow = cartRows[i]
        let quantityElement = cartRow.getElementsByClassName("cart-quantity-input")[0]
        let quantity = parseInt(quantityElement.value)
        totalQuantity += quantity;
    }


    let shoppingCartItems = document.getElementsByClassName("shopping-cart-items")[0];
    if (shoppingCartItems) {
        shoppingCartItems.innerText = totalQuantity;
    } else {
        console.error('Element with class "shopping-cart-items" not found in the DOM.');
    }
}


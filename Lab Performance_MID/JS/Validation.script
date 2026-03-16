const unitPrice = 1000;

const quantityInputperday = document.getElementById("quantity");
const totalPriceInput = document.getElementById("totalPrice");

function calculateTotal(){

let quantity = parseInt(quantityInputperday.value) || 0;

if(quantity < 0){
    alert("Quantity cannot be negative. Resetting to 0.");
    quantity = 0;
    quantityInputperday.value = 0;
}

let total = unitPrice * quantity * 30;

totalPriceInput.value = total;

if(total > 1000){
    alert("Congratulations! You are eligible for a gift coupon.");
}

}
quantityInputperday.addEventListener("input", calculateTotal);
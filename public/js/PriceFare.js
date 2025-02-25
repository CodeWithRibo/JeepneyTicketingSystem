const baclaranTerminal = document.getElementById('baclaranTerminal');
const rectoTerminal = document.getElementById('rectoTerminal');
const sanjuanTerminal = document.getElementById('sanjuanTerminal');
const selectDestinations = document.getElementById('selectDestinations');
const pricefare = document.getElementById('pricefare');
const farePriceText = document.getElementById('farePriceText'); 

//Baclaran Terminal
baclaranTerminal.addEventListener('click', (e) =>{
    e.preventDefault();
    selectDestinations.textContent = 'Baclaran Terminal';
    farePriceText.textContent= "Fare Price:"
    pricefare.textContent = '₱70';
    pricefare.style.color = 'red';
    farePriceText.style.color = 'red';
    pricefare.style.fontWeight = 'bold';
})

//Recto Terminal
rectoTerminal.addEventListener('click', (e) => {
    e.preventDefault();
    selectDestinations.textContent = 'Recto Terminal';
    farePriceText.textContent= "Fare Price:"
    pricefare.textContent = '₱40';
    pricefare.style.color = 'red';
    farePriceText.style.color = 'red';
    pricefare.style.fontWeight = 'bold';
})

//Recto Terminal
sanjuanTerminal.addEventListener('click', (e) => {
    e.preventDefault();
    selectDestinations.textContent = 'SanJuan GreenHills Terminal';
    farePriceText.textContent= "Fare Price:"
    pricefare.textContent = '₱55';
    pricefare.style.color = 'red';
    farePriceText.style.color = 'red';
    pricefare.style.fontWeight = 'bold';
})

//CONVERTING SPAN TO INPUT

document.getElementById('ticketForm').addEventListener('submit', function(){
     document.getElementById('inputSelectDestinations').value = selectDestinations.textContent;
     document.getElementById('farePrice').value = pricefare.textContent;
});
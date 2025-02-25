const baclaranTerminal = document.getElementById('baclaranTerminal');
const rectoTerminal = document.getElementById('rectoTerminal');
const sanjuanTerminal = document.getElementById('sanjuanTerminal');
const selectDestinations = document.getElementById('selectDestinations');
const pricefare = document.getElementById('pricefare'); 

//Baclaran Terminal
baclaranTerminal.addEventListener('click', (e) =>{
    e.preventDefault();
    selectDestinations.textContent = 'Baclaran Terminal';
    pricefare.textContent = 'Fare Price : ₱70';
    pricefare.style.color = 'red';
    pricefare.style.fontWeight = 'bold';
})

//Recto Terminal
rectoTerminal.addEventListener('click', (e) => {
    e.preventDefault();
    selectDestinations.textContent = 'Recto Terminal';
    pricefare.textContent = 'Fare Price : ₱40';
    pricefare.style.color = 'red';
    pricefare.style.fontWeight = 'bold';
})

//Recto Terminal
sanjuanTerminal.addEventListener('click', (e) => {
    e.preventDefault();
    selectDestinations.textContent = 'SanJuan GreenHills Terminal';
    pricefare.textContent = 'Fare Price : ₱55';
    pricefare.style.color = 'red';
    pricefare.style.fontWeight = 'bold';
})

//CONVERTING SPAN TO INPUT

document.getElementById('ticketForm').addEventListener('submit', function(){
     document.getElementById('inputSelectDestinations').value = selectDestinations.textContent;
     document.getElementById('farePrice').value = pricefare.textContent;
});
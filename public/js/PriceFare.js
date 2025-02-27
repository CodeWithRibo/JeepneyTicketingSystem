
    //DOM LOADED
    document.addEventListener('DOMContentLoaded', function () {

        const baclaranTerminal = document.getElementById('baclaranTerminal');
        const rectoTerminal = document.getElementById('rectoTerminal');
        const sanjuanTerminal = document.getElementById('sanjuanTerminal');
        const selectDestinations = document.getElementById('selectDestinations');
        const pricefare = document.getElementById('pricefare');
        const farePriceText = document.getElementById('farePriceText'); 
        
        
        //Store price fare
        const farePrice = {baclaranTerminal : 70, rectoTerminal : 40, sanjuanTerminal : 55};
        
        
        //Baclaran Terminal
        baclaranTerminal.addEventListener('click', (e) =>{
            e.preventDefault();
            selectDestinations.textContent = 'Baclaran Terminal';
            farePriceText.textContent= "Fare Price:"
            pricefare.textContent.style.color = farePrice.baclaranTerminal,'red';
            farePriceText.style.color = 'red';
            pricefare.style.fontWeight = 'bold';
        })
        
        // Recto Terminal
        rectoTerminal.addEventListener('click', (e) => {
            e.preventDefault();
            selectDestinations.textContent = 'Recto Terminal';
            farePriceText.textContent= "Fare Price:"
            pricefare.textContent = farePrice.rectoTerminal;
            pricefare.style.color = 'red';
            farePriceText.style.color = 'red';
            pricefare.style.fontWeight = 'bold';
        })
        
        //SanJuan Terminal
        sanjuanTerminal.addEventListener('click', (e) => {
            e.preventDefault();
            selectDestinations.textContent = 'SanJuan GreenHills Terminal';
            farePriceText.textContent= "Fare Price:"
            pricefare.textContent = farePrice.sanjuanTerminal;
            pricefare.style.color = 'red';
            farePriceText.style.color = 'red';
            pricefare.style.fontWeight = 'bold';
        })
        
        //CONVERTING SPAN TO INPUT
        
        document.getElementById('ticketForm').addEventListener('submit', function(){
             document.getElementById('inputSelectDestinations').value = selectDestinations.textContent;
             document.getElementById('farePrice').value = pricefare.textContent;
        });

    });
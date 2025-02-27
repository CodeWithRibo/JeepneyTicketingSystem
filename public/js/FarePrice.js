
    //DOM LOADED
    document.addEventListener('DOMContentLoaded', function () {

        const baclaranTerminal = document.getElementById('baclaranTerminal');
        const rectoTerminal = document.getElementById('rectoTerminal');
        const sanjuanTerminal = document.getElementById('sanjuanTerminal');
        const selectDestinations = document.getElementById('selectDestinations');
        const PriceFare = document.getElementById('PriceFare');
        const farePriceText = document.getElementById('farePriceText'); 
        
        
        //Store price fare
        const farePriceData = {baclaranTerminal : 70, rectoTerminal : 40, sanjuanTerminal : 55};
        const locations = {baclaranTerminal : 'Baclaran Terminal', rectoTerminal : 'Recto Terminal', sanjuanTerminal : 'SanJuan GreenHills Terminal'};
        
        //Baclaran Terminal
        baclaranTerminal.addEventListener('click', (e) =>{
            e.preventDefault();
            selectDestinations.textContent = locations.baclaranTerminal;
            farePriceText.textContent= "Fare Price:";
            PriceFare.textContent = "₱" + (farePriceData.baclaranTerminal);
            PriceFare.style.color = 'red';
            farePriceText.style.color = 'red';
            PriceFare.style.fontWeight = 'bold';
        })
        
        // Recto Terminal
        rectoTerminal.addEventListener('click', (e) => {
            e.preventDefault();
            selectDestinations.textContent = locations.rectoTerminal;
            farePriceText.textContent= "Fare Price:"
            PriceFare.textContent = "₱" + (farePriceData.rectoTerminal);
            PriceFare.style.color = 'red';
            farePriceText.style.color = 'red';
            PriceFare.style.fontWeight = 'bold';
        })
        
        //SanJuan Terminal
        sanjuanTerminal.addEventListener('click', (e) => {
            e.preventDefault();
            selectDestinations.textContent = locations.sanjuanTerminal;
            farePriceText.textContent= "Fare Price:"
            PriceFare.textContent = "₱" + (farePriceData.sanjuanTerminal);
            PriceFare.style.color = 'red';
            farePriceText.style.color = 'red';
            PriceFare.style.fontWeight = 'bold';
        })
        
        //CONVERTING SPAN TO INPUT
        document.getElementById('ticketForm').addEventListener('submit', function(){
             document.getElementById('inputSelectDestinations').value = selectDestinations.textContent;
             document.getElementById('farePrice').value = PriceFare.textContent;
        });

    });
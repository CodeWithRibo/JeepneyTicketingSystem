
    //DOM LOADED
    document.addEventListener('DOMContentLoaded', function () {

        const baclaranTerminal = document.getElementById('baclaranTerminal');
        const rectoTerminal = document.getElementById('rectoTerminal');
        const sanjuanTerminal = document.getElementById('sanjuanTerminal');
        const selectDestinations = document.getElementById('selectDestinations');
        const PriceFare = document.getElementById('PriceFare');
        const farePriceText = document.getElementById('farePriceText'); 
        const iframe = document.getElementById('monumentoToBaclaran');
        const optionDestinations = document.getElementById('optionDestinations');

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


        // MAPS
            optionDestinations.addEventListener('change', (event) => {
                const selectedValue = event.target.value;
                let iframeSrc = '';
                
                    if (selectedValue === 'Baclaran Terminal') {
                    iframeSrc = 'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d50470.14676383324!2d120.96168426417933!3d14.591376752856915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397b42bc4212a1b%3A0xbcff4f1d14dc500c!2s1400%2C%201695%20Rizal%20Ave%20Ext%2C%20Grace%20Park%20West%2C%20Caloocan%2C%201400%20Metro%20Manila!3m2!1d14.6558973!2d120.9837994!4m5!1s0x3397c9515d3b485b%3A0xe28d786a0ffecaf8!2sNational%20Shrine%20of%20Our%20Mother%20of%20Perpetual%20Help%2C%20Redemptorist%20Road%2C%20Para%C3%B1aque%2C%20Metro%20Manila!3m2!1d14.531427899999999!2d120.9949515!5e0!3m2!1sen!2sph!4v1740650727281!5m2!1sen!2sph';
                    }
                else if (selectedValue === 'Recto Terminal') {
                    iframeSrc = 'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d20612.388429359777!2d120.97421406127077!3d14.629760075822833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397b42bc4212a1b%3A0xbcff4f1d14dc500c!2s1400%2C%201695%20Rizal%20Ave%20Ext%2C%20Grace%20Park%20West%2C%20Caloocan%2C%201400%20Metro%20Manila!3m2!1d14.6558973!2d120.9837994!4m5!1s0x3397ca03aeb1fa9b%3A0xa38eba87dcd932f2!2sIsetann%2C%20Recto%2C%20Recto%20Avenue%2C%20Quiapo%2C%20Manila%2C%20Metro%20Manila!3m2!1d14.603123499999999!2d120.98466119999999!5e0!3m2!1sen!2sph!4v1740650896835!5m2!1sen!2sph';
                    }
                 else if (selectedValue === 'SanJuan GreenHills Terminal') {
                    iframeSrc = 'https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d25230.91158241863!2d121.00174112893555!3d14.62763147417203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397b42bc4212a1b%3A0xbcff4f1d14dc500c!2s1400%2C%201695%20Rizal%20Ave%20Ext%2C%20Grace%20Park%20West%2C%20Caloocan%2C%201400%20Metro%20Manila!3m2!1d14.6558973!2d120.9837994!4m5!1s0x3397b7d813f101cb%3A0x8871d46b1caf4be7!2sGreenhills%2C%20San%20Juan%2C%20Metro%20Manila!3m2!1d14.602373199999999!2d121.04641009999999!5e0!3m2!1sen!2sph!4v1740650960418!5m2!1sen!2sph';
                 }  
                iframe.src = iframeSrc;
            });


    });
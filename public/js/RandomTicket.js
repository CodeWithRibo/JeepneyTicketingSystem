document.getElementById('ticketForm').addEventListener('submit', function(){

    const ticketSpan = document.getElementById('ticketNumberSpan').textContent;
   document.getElementById('randomTicketNumber').value = ticketSpan;
});
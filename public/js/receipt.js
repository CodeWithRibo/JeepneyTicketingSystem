function printReceipt(ticketNumber) {
    const printWindow = window.open('', 'PRINT', 'height=600,width=800');

    fetch('../handler/getReceiptDetails.php?ticketNumber=' + ticketNumber)
        .then(response => response.json()) 
        .then(data => {
            const receiptContent = `
               <html>
                    <head>
                        <title>Receipt</title>
                        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
                          <style>
                            body {
                              background-color: white;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 100vh;
                                margin: 0;
                            }
                        </style>
                    </head> 
                    <body class="bg-gray-100 p-6">
                        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                            <h1 class="text-2xl font-bold text-green-500 text-center mb-4">Transaction Receipt</h1>
                            <p class="text-lg"><strong>Name:</strong> ${data.firstName} ${data.lastName}</p>
                            <p class="text-lg"><strong>From:</strong> ${data.optionOrigin} <strong>To:</strong> ${data.optionDestinations}</p>
                            <p class="text-lg"><strong>Date and Time:</strong> ${data.formattedDateAndTime}</p>
                            <p class="text-lg"><strong>Ticket Number:</strong> <span class=""> ${data.ticketNumber} </span></p>
                            <p class="text-lg"><strong>Fare Price:</strong> ${data.farePrice}</p>
                            <p class="text-lg"><strong>Status:</strong> <span class="${data.status === 'Paid' ? 'text-green-500 font-bold' : 'text-red-500 font-bold'}">${data.status === 'Paid' ? 'Paid' : 'Not Paid'}</span></p>
                        </div>
                    </body>
                </html>
            `;
            printWindow.document.body.innerHTML = receiptContent;
            printWindow.document.close();

            // Add a load event listener to print once content is fully loaded
            printWindow.addEventListener('load', () => {
                printWindow.print();
            }, true);
        })
        .catch(error => {
            console.error('Error fetching receipt details:', error);
        });
}

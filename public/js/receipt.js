function printReceipt(ticketNumber) {
    const printWindow = window.open('', 'PRINT', 'height=1000,width=1000');


    fetch('../handler/getReceiptDetails.php?ticketNumber=' + ticketNumber)
        .then(response => response.json()) 
        .then(data => {
            const receiptContent = `
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEIPT</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .barcode {
            left: 50%;
            box-shadow: 1px 0 0 1px, 5px 0 0 1px, 10px 0 0 1px, 11px 0 0 1px, 15px 0 0 1px, 18px 0 0 1px, 22px 0 0 1px, 23px 0 0 1px, 26px 0 0 1px, 30px 0 0 1px, 35px 0 0 1px, 37px 0 0 1px, 41px 0 0 1px, 44px 0 0 1px, 47px 0 0 1px, 51px 0 0 1px, 56px 0 0 1px, 59px 0 0 1px, 64px 0 0 1px, 68px 0 0 1px, 72px 0 0 1px, 74px 0 0 1px, 77px 0 0 1px, 81px 0 0 1px, 85px 0 0 1px, 88px 0 0 1px, 92px 0 0 1px, 95px 0 0 1px, 96px 0 0 1px, 97px 0 0 1px, 101px 0 0 1px, 105px 0 0 1px, 109px 0 0 1px, 110px 0 0 1px, 113px 0 0 1px, 116px 0 0 1px, 120px 0 0 1px, 123px 0 0 1px, 127px 0 0 1px, 130px 0 0 1px, 131px 0 0 1px, 134px 0 0 1px, 135px 0 0 1px, 138px 0 0 1px, 141px 0 0 1px, 144px 0 0 1px, 147px 0 0 1px, 148px 0 0 1px, 151px 0 0 1px, 155px 0 0 1px, 158px 0 0 1px, 162px 0 0 1px, 165px 0 0 1px, 168px 0 0 1px, 173px 0 0 1px, 176px 0 0 1px, 177px 0 0 1px, 180px 0 0 1px;
            display: inline-block;
            transform: translateX(-90px);
        }
    </style>
</head>
<body>
<div class="flex flex-col items-center justify-center min-h-screen bg-center bg-cover"
	style="background-image: url(monumento_landmark.jpg);">
	<div class="absolute bg-blue-900 opacity-80 inset-0 z-0"></div>
	<div class="max-w-md w-full h-full mx-auto z-10 bg-blue-900 rounded-3xl">
		<div class="flex flex-col">
			<div class="bg-white relative drop-shadow-2xl  rounded-3xl p-4 m-4">
				<div class="flex-none sm:flex">
					<div class="flex-auto justify-between">
						<div class="flex justify-between items-center">
							<div class="flex items-center  my-1">
							
								<h2 class="text-base font-semibold">JeepneyTicketing System</h2>
							</div>
							<div class="ml-auto flex flex-col">
                                <span class="text-lg text-blue-800 font-bold leading-none">Ticket Number</span>
                                <span class="text-red-500 font-semibold">${data.ticketNumber}</span>
                            </div>
						</div>
						<div class="border-b border-dashed border-b-2 my-5"></div>
						<div class="flex items-center">
							<div class="flex flex-col  ">
								<div class="w-full flex-none px-5 pt-3 text-lg text-blue-800 font-bold leading-none">Origin</div>
								<div class="text-xs  font-semibold">${data.optionOrigin}</div>
							</div>
							<div class="flex flex-col mx-auto">
								<img src="jeep.png" class="w-20 p-1">
								</div>
								<div class="flex flex-col  ">
									<div class="w-full flex-none px-5 pt-3 text-lg text-blue-800 font-bold leading-none">Destinations</div>
									<div class="text-xs font-semibold">${data.optionDestinations}</div>
								</div>
							</div>
							<div class="border-b border-dashed border-b-2 my-5 pt-5">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
                            <div class="flex items-center justify-between px-5 pt-3 text-sm">
								<div class="flex flex-col">
									<span class="text-base text-blue-800 font-bold leading-none">Passanger Name</span>
									<div class="font-semibold">${data.firstName} ${data.lastName}</div>
								</div>
								<div class="flex flex-col">
									<span class="text-base text-blue-800 font-bold leading-none">Date and Time</span>
									<div class="font-semibold">${data.formattedDateAndTime}</div>
								</div>
							</div>
							<div class="border-b border-dashed border-b-2 my-5 pt-5">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
							<div class="flex items-center mb-5 p-5 text-sm">
								<div class="flex flex-col">
									<span class="text-base text-blue-800 font-bold leading-none">Plate Number</span>
									<div class="font-semibold">EVN 729</div>

								</div>
								<div class="flex flex-col ml-auto">
									<span class="text-base text-blue-800 font-bold leading-none">Model</span>
									<div class="font-semibold">Sarao</div>
								</div>
							</div>
                            <div class="border-b border-dashed border-b-2 my-5 pt-5">
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -left-2"></div>
								<div class="absolute rounded-full w-5 h-5 bg-blue-900 -mt-2 -right-2"></div>
							</div>
                            <div class="flex items-center justify-between px-5 pt-3 text-sm">
								<div class="flex flex-col">
									<span class="text-base text-blue-800 font-bold leading-none">TOTAL FARE</span>
									<div class="font-semibold text-red-500">₱${data.totalFarePrice}</div>
								</div>
                                <div class="flex flex-col">
									<span class="text-base text-blue-800 font-bold leading-none">STATUS</span>
									<div class="font-bold text-green-500">${data.status}</div>
								</div>
							</div>
							<div class="flex flex-col py-5  justify-center text-sm ">
								<h6 class="font-bold text-center">Jeep Pass</h6>

								<div class="barcode h-14 w-0 inline-block mt-4 relative left-auto"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
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

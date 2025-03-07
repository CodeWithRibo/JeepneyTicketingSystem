<?php
include '../handler/payment_process.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/jts/src/output.css" />
    <link rel="stylesheet" href="/jts/src/input.css" />
    <link rel="stylesheet" href="/jts/src/plugin.css" />
    <link rel="stylesheet" href="/jts/src/custom.css">
    <title>Payment</title>
</head>

<body class="bg-white font-sanscalp">
    <!-- Header section -->
    <header>
        <!-- Desktop Design -->
        <div class="static left-0 right-0 top-0 z-10 flex h-20  items-center justify-between bg-white shadow-lg sm:px-5 md:fixed md:px-10 lg:px-20">
            <div class="flex w-full items-center justify-center md:w-auto">
                <span class="mx-2">
                    <a href="home_page.php"> <img class="h-[70px] w-[230px] object-cover px-5" src="/jts/image/main_logo.png" alt="JTS logo" />
                    </a>
                </span>
                </span>
            </div>
            <div class="navbar items-center justify-between ">
                <div class=" md:flex-none lg:flex-1"></div>
                <div class="flex-none gap-2">
                    <div class="hidden lg:block px-5">
                        <span class="flex gap-10 transition-all">
                            <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="home_page.php">Home</a></span>
                            <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="#">Transaction History</a></span>
                            <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="transaction_payment.php">Transaction Payment</a></span>
                        </span>
                    </div>
                    <div class="dropdown dropdown-end flex items-center justify-center">
                        <div> <!-- Mobile Design Header Icon -->
                            <span class="mx-2">
                                <svg class="size-6 cursor-pointer transition-all duration-300 ease-out hover:text-[#e6ce20] lg:hidden" id="hamburger-menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                        </div>
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img
                                    alt="Tailwind CSS Navbar component"
                                    src="/jts/image/navbar_pfp.JPG" />
                            </div>
                        </div>
                        <div>
                            <ul
                                tabindex="0"
                                class="menu menu-sm dropdown-content  rounded-box z-[1] mt-3 w-52 p-2 shadow-lg bg-white">
                                <li>
                                    <a class="justify-between">
                                        Profile
                                        <span class="badge">New</span>
                                    </a>
                                </li>
                                <li><a>Settings</a></li>
                                <li><a href="../Logout/logout_destroy.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Design Header -->
        <div class="pt-0 md:pt-20">
            <div class="grid hidden grid-rows-5 justify-center gap-6 border-2 bg-white text-center shadow-lg transition-all lg:hidden " id="mobile-menu">
                <span class="pt-3 text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="home_page.php">Home</a></span>
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="#">Transaction History</a></span>
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="transaction_payment.php">Transaction Payment</a></span>
            </div>
        </div>
    </header>
    <script src="../js/index.js"></script>
    <!-- End Header section -->
    <section class="main_container pb-32">
        <div class="flex flex-col  items-center pt-5 md:pt-16">
            <div class="">
                <div class="flex justify-center">
                    <h1 class="text-3xl text-textColor">PASSENGER DETAILS</h1>
                </div>
                <!-- INFORMATIONS -->
                <div class="pt-5 w-full xl:w-full"></div>
                <form action="payment.php" method="POST" class="bg-[#f4f4f4ca] px-7 sm:px-24 lg:px-32 py-5 rounded-lg shadow-lg">
                    <div class="flex flex-col space-y-2 text-xl md:text-2xl">
                        <span class="text-gray-600">Passenger's Name: <span class="text-red-500"><?php echo $_SESSION['passengerFirstName'] . ' ' . $_SESSION['passengerLastName']; ?></span></span>
                        <span class="text-gray-600">Passenger's Email: <span class="text-red-500"><?php echo $_SESSION['passengerEmail']; ?></span></span>
                        <span class="text-gray-600">Passenger's PhoneNumber: <span class="text-red-500"><?php echo $_SESSION['passengerPhonenumber']; ?></span></span>
                        <span class="text-gray-600">Passenger's Origin: <span class="text-red-500"><?php echo $_SESSION['passengerOrigin']; ?></span></span>
                        <span class="text-gray-600">Passenger's Destinations: <span class="text-red-500"><?php echo $_SESSION['passengerDestination']; ?></span></span>
                        <span class="text-gray-600">Book Date and Time: <span class="text-red-500"><?php echo $_SESSION['passengerDateAndTime']; ?></span></span>
                        <span class="text-gray-600">Passenger's Ticket Number: <span class="text-red-500"><?php echo $_SESSION['passengerTicketNumber']; ?></span></span>
                        <span class="text-gray-600">No. Passengers: <span class="text-red-500"><?php echo $_SESSION['numberPassenger']; ?></span></span>
                        <span class="text-gray-600">No. of Passengers with Discount: <span class="text-red-500"><?php echo $_SESSION['numberPassengerDiscount']; ?></span></span>
                        <span class="text-gray-600">Fare Price: <span class="text-red-500"><?php echo $_SESSION['farePrice']; ?></span></span>
                    </div>
                    <hr class="my-5 border-gray-300">
                    <div class="flex flex-col text-xl md:text-3xl pt-5">
                        <span class="text-gray-600">Total Passenger's No discount: <span class="text-red-500"><?php echo '₱' . $_SESSION['regularPrice']; ?></span></span>
                        <span class="text-gray-600">Total Passenger's With discount: <span class="text-red-500"><?php echo '₱' . $_SESSION['discountedPrice']; ?></span></span>
                        <span class="text-gray-600">Total Fare Price: <span class="text-red-500"><?php echo '₱' . $_SESSION['totalFarePrice']; ?></span></span>
                    </div>
                    <div class="flex flex-col md:flex-row justify-center items-center mt-5">
                        <!-- <div>
                            <input type="text" name="payment" id="payment" class="text-lg border border-gray-300 rounded-lg w-52 px-1 py-2 transition-all duration-200 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter Amount to Pay" required>
                        </div> -->
                </form>
                <form action="../handler/payment_controller.php" method="POST">
                    <div>
                        <button id='paymentButton' name="paymentButton" class=' text-lg lg:text-lg  bg-green-500 hover:bg-green-800 rounded-lg cursor-pointer hover:opacity-80 transition duration-300 text-white ml-2 py-2 px-10 mt-2 md:mt-0 sm:px-10 md:px-8 lg:px-8'>Submit Pay</button>
                    </div>
                </form>
            </div>
            <div class="flex justify-center pt-5">
                <h1 class=" text-xl  md:text-3xl text-textColor">PWD, STUDENT, SENIOR CITIZEN DISCOUNT 20%</h1>
            </div>
        </div>
        </div>
        </div>
    </section>
    <?php include '../components/footer.php'; ?>
</body>

</html>
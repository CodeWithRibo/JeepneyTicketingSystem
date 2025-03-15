<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Ticket</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    <link rel="stylesheet" href="/jts/src/output.css" />
    <link rel="stylesheet" href="/jts/src/input.css" />
    <link rel="stylesheet" href="/jts/src/plugin.css" />
    <link rel="stylesheet" href="/jts/src/custom.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">
  <!-- SIDE BAR -->
    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Conductor</a>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="index.html" class="flex items-center  text-white py-4 pl-6 nav-item">
                <i class="fa-solid fa-table-columns mr-3"></i>        
                Dashboard
            </a>
            <a href="blank.html" class="flex items-center active-nav-link text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Issue Ticket
            </a>
            <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-table mr-3"></i>
                View Issue Ticket
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                All Transaction History
            </a>
            <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Salary Tracking
            </a>
        </nav>
        <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
            <i class="fas fa-copyright mr-3"></i>
            Jeepney Ticketing System
        </a>
    </aside>

    <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
       <!-- Desktop Header -->
       <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
            <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
            </button>
            <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
            <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
            </div>
        </div>
    </header>

    <!-- Mobile Header & Nav -->
    <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
        <div class="flex items-center justify-between">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                <i x-show="!isOpen" class="fas fa-bars"></i>
                <i x-show="isOpen" class="fas fa-times"></i>
            </button>
        </div>

        <!-- Dropdown Nav -->
        <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
            <a href="index.html" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Issue Ticket
            </a>
            <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-table mr-3"></i>
                View Issue Ticket
            </a>
            <a href="forms.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-align-left mr-3"></i>
                All Transaction History
            </a>
            <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-tablet-alt mr-3"></i>
                Salary Tracking
            </a>
            <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-calendar mr-3"></i>
                Settings
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-user mr-3"></i>
                My Account
            </a>
            <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                <i class="fas fa-sign-out-alt mr-3"></i>
                Sign Out
            </a>
        </nav>
    </header>
    
        <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Issue Ticket</h1>
                <form action="buy_ticket.php" method="POST" class="mb-14" id="ticketForm">
                    <!-- Destinations -->
                    <section class="main_container">
                      <div class="flex flex-col items-center px-10 pt-32 md:items-start md:px-0">
                        <div class="flex justify-center py-12 ml-5 2xl:ml-0">
                          <h1 class="text-2xl font-semibold text-textColor md:text-3xl">Destinations</h1>
                        </div>
                        <div class="w-full">
                          <div class="space-y-4 border-2 bg-[#f4f4f4ca] px-10 py-5 shadow-lg md:space-y-7 xl:space-y-7 xl:rounded-l-lg mt-0">
                            <!-- DESTINATIONS -->
                            <div class="flex flex-col sm:flex-row  items-start md:items-center justify-between space-y-4 md:space-y-0  lg:flex-row  xl:space-x-5 xl:space-y-0">
                              <div>
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="Origin">Origin</label>
                                <select name="optionOrigin" id="optionOrigin" class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 text-lg">
                                  <option value="Monumento Terminal">Monumento Terminal</option>
                                </select>
                                <div class="text-red-500"><?php echo $buyticketErrors['optionOrigin']; ?></div>
                              </div>
                              <div class="">
                                <!-- ORIGIN AND DESTINATIONS -->
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="Destinations">Destinations</label>
                                <select name="optionDestinations" id="optionDestinations" aria-valuetext="<?php echo $optionDestinations ?>" class="optionDestinations rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 text-lg">
                                  <option disabled selected>Select Destinations</option>
                                  <option value="Baclaran Terminal" id="baclaranTerminal">Baclaran Terminal</option>
                                  <option value="Recto Terminal" id="rectoTerminal">Recto Terminal</option>
                                  <option value="SanJuan GreenHills Terminal" id="sanjuanTerminal">SanJuan GreenHills Terminal</option>
                                </select>
                                <div class="text-red-500"><?php echo $buyticketErrors['optionDestinations']; ?></div>
                              </div>
                              <div>
                                <!-- RANDOM TICKET NUMBER -->
                                <span class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl">Generated Ticket Number: </span>
                                <span class="text-red-400 text-base font-semibold" id="ticketNumberSpan"><?php randomTicketNumber() ?></span>
                                <input type="hidden" id="randomTicketNumber" name="randomTicketNumber">
                                <script src="../Js/RandomTicket.js"></script>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- PRICE FARE -->
                    <section class="main_container">
                      <div class="px-10 md:px-0">
                        <div class=" flex flex-col items-center px-10 md:items-start md:px-0 py-12 ml-5 2xl:ml-0">
                          <h1 class="text-2xl font-semibold text-textColor md:text-3xl">Price Fare</h1>
                        </div>
                        <div class=" relative flex flex-row justify-center items-center border-2 bg-[#f4f4f4ca] px-0 sm:px-10 py-9   shadow-lg xl:rounded-l-lg">
                          <div class="font-semibold lg:text-3xl md:text-2xl sm:text-2xl ">
                            <div class="absolute top-0 left-[42%]  "><img src="/jts/image/jeep.png" class="w-[5rem] " alt=""></div>
                            <span class="text-textColor">Monumento Terminal <span class=" text-green-950 ">---------------------- </span></span>
                            <span class="text-textColor" id="selectDestinations">Select Destinations</span>
                            <input type="hidden" name="selectDestinations" id="inputSelectDestinations">
                            <div class="flex flex-row justify-center">
                              <span id="farePriceText" class="mr-2"></span>
                              <span id="PriceFare"></span>
                              <input type="hidden" name="farePrice" id="farePrice">
                              <!-- TOTAL FARE PRICE -->
                              <span class="hidden" id="storeTotalFarePrice"></span> <!--STORE THE TOTAL FARE PRICE-->
                              <input type="hidden" name="totalFarePrice" id="totalFarePrice"> <!--GET THE TOTAL FARE PRICE TO THE SPAN-->
                              <!-- REGULAR PRICE AND DISCOUNTED PRICE -->
                              <span class="hidden" id="storeRegularPrice"></span>
                              <input type="hidden" name="regularPrice" id="regularPrice">
                              <span class="hidden" id="storeDiscountedPrice"></span>
                              <input type="hidden" name="discountedPrice" id="discountedPrice">
                            </div>
                          </div>
                          <script src="../js/FarePrice.js"></script>
                        </div>
                      </div>
                    </section>
                    <!-- End Destinations -->
                    <!-- Passenger Details -->
                    <section class="main_container">
                      <div class="flex flex-col items-center px-10 pt-16 md:items-start md:px-0">
                        <div class="flex justify-center py-14 ml-5 2xl:ml-0">
                          <h1 class="text-2xl font-semibold text-textColor md:text-3xl">Passenger Details</h1>
                        </div>
                        <div class="w-full">
                          <div class="space-y-4 border-2 bg-[#f4f4f4ca] px-10 py-5 shadow-lg md:space-y-7 xl:space-y-7 xl:rounded-l-lg">
                            <div class="flex flex-col items-center space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
                              <span class="flex w-full flex-col">
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="FirstName">First Name</label>
                                <div class="text-red-500"><?php echo $buyticketErrors['firstName']; ?></div>
                                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="firstName" id="firstName" value="<?php echo $firstName ?>" />
                              </span>
                              <span class="flex w-full flex-col">
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="LastName">Last Name</label>
                                <div class="text-red-500"><?php echo $buyticketErrors['lastName']; ?></div>
                                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="lastName" id="lastName" value="<?php echo $lastName ?>" />
                              </span>
                            </div>
                            <div class="flex flex-col items-center space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
                              <span class="flex w-full flex-col">
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="EmailAddress">Email Address</label>
                                <div class="text-red-500"><?php echo $buyticketErrors['email']; ?></div>
                                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="email" id="emailAddress" value="<?php echo $email ?>" />
                              </span>
                              <span class="flex w-full flex-col">
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="PhoneNumber">Phone Number</label>
                                <div class="text-red-500"><?php echo $buyticketErrors['phoneNumber']; ?></div>
                                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber ?>" />
                              </span>
                              <span class="flex w-full flex-col">
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="DateAndTime">Book Date and Time</label>
                                <div class="text-red-500"><?php echo $buyticketErrors['dateAndTime']; ?></div>
                                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
                                  type="datetime-local" id="DateAndTime" name="dateAndTime" value="<?php echo $dateAndTime ?>" />
                
                              </span>
                            </div>
                            <div class="flex flex-col items-center space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
                              <span class="flex w-full flex-col">
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="PassengersWithOutDiscount">How many Passenger are their?</label>
                                <div class="text-red-500"><?php echo $buyticketErrors['passengersCount']; ?></div>
                                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="passengersCount" id="passengersCount" value="<?php echo $passengersCount ?>" />
                              </span>
                              <span class="flex w-full flex-col">
                                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="PassengersWithDiscount">How many Passenger's Discount are Their?</label>
                                <div class="text-red-500"><?php echo $buyticketErrors['PassengersWithDiscount']; ?></div>
                                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="PassengersWithDiscount" id="PassengersWithDiscount" value=" <?php echo $PassengersWithDiscount ?>" />
                              </span>
                            </div>
                            <div class="text-center">
                              <button class="cursor-pointer rounded-[5px] bg-button px-10 py-2 text-base  text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:text-xl" value="submit" type="submit">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!-- End Passenger Details-->
                  </form>
            </main>
    
        </div>
        
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>

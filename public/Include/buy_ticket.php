<?php 
include '../handler/buyticket_error_handler.php';
include '../handler/buyticket_process.php';
function randomTicketNumber() {
  function generateRandomString($length = 2) {
    return substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),2,$length);

  }
  $ticketNumber = rand(20000, 30000);
  $customerRfId = generateRandomString(). $ticketNumber;
  echo $customerRfId;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Process Buy Ticket</title>
    <link rel="stylesheet" href="/jts/src/output.css" />
    <link rel="stylesheet" href="/jts/src/input.css" />
    <link rel="stylesheet" href="/jts/src/plugin.css" />
    <link rel="stylesheet" href="/jts/src/custom.css">
    <script src="/jts/public/Js/DateAndTime.js"></script>
    <style>
      @media (max-width: 550px) {
        .responsive_img {
          height: auto;
        }
      }
    </style>
  </head>
  <body class="bg-white font-sanscalp">
    <!-- Header section -->
    <header>
      <!-- Desktop Design -->
      <div class="static left-0 right-0 top-0 z-10 flex h-20  items-center justify-between bg-white shadow-lg sm:px-5 md:fixed md:px-10 lg:px-20">
        <div class="flex w-full items-center justify-center md:w-auto">
          <span class="mx-2">
            <img class="h-[70px] w-[230px] object-cover px-5" src="/jts/image/main_logo.png" alt="JTS logo" />
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
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="#">Transaction Payment</a></span>
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="home_page.php #about">About</a></span>
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="home_page.php #contact">Contact Us</a></span>
              </span>
            </div>
            <div class="dropdown dropdown-end flex items-center justify-center">
              <div>      <!-- Mobile Design Header Icon -->
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
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="#">Transaction Payment</a></span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="home_page.php #about">About</a></span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="home_page.php #contact">Contact Us</a></span>
      </div>
       </div>    
    </header>
    <!-- End Header section -->
    <!-- Main section -->
     <form action="buy_ticket.php" method="POST" class="mb-14" id="ticketForm">
     <!-- Destinations -->
     <section class="main_container">
      <div class="flex flex-col items-center px-10 pt-32 md:items-start md:px-0">
      <div class="relative md:left-[40%]">
          <ul class="steps steps-vertical md:steps-horizontal">
            <li class="step step-success ">Select Terminal</li>
            <li class="step step-success ">Buy Ticket</li>
            <li class="step">Payment</li>
          </ul>
        </div>
        <div class="flex justify-center py-12 ml-5 2xl:ml-0">
          <h1 class="text-2xl font-semibold text-textColor md:text-3xl">Destinations</h1>
        </div>
        <div class="w-full">
          <div class="space-y-4 border-2 bg-[#f4f4f4ca] px-10 py-5 shadow-lg md:space-y-7 xl:space-y-7 xl:rounded-l-lg mt-0">
            <!-- DESTINATIONS -->
              <div class="flex flex-col items-center justify-between space-y-4 md:space-y-0 md:flex-col lg:flex-row xl:space-x-5 xl:space-y-0">
                    <div>
                      <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="Origin">Origin</label>
                      <select name="optionOrigin" id="optionOrigin" class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 text-lg">
                        <option value="Monumento">Monumento Terminal</option>
                        </select>
                        <div class="text-red-500"><?php echo $buyticketErrors['optionOrigin']; ?></div>
                    </div>
                    <div class="">
                      <!-- ORIGIN AND DESTINATIONS -->
                      <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="Destinations">Destinations</label>
                      <select name="optionDestinations" id="optionDestinations" aria-valuetext="<?php echo $optionDestinations ?>" class="optionDestinations rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 text-lg">
                       <option value="" disabled selected>Select Destinations</option>
                        <option value="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d50470.14676383324!2d120.96168426417933!3d14.591376752856915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397b42bc4212a1b%3A0xbcff4f1d14dc500c!2s1400%2C%201695%20Rizal%20Ave%20Ext%2C%20Grace%20Park%20West%2C%20Caloocan%2C%201400%20Metro%20Manila!3m2!1d14.6558973!2d120.9837994!4m5!1s0x3397c9515d3b485b%3A0xe28d786a0ffecaf8!2sNational%20Shrine%20of%20Our%20Mother%20of%20Perpetual%20Help%2C%20Redemptorist%20Road%2C%20Para%C3%B1aque%2C%20Metro%20Manila!3m2!1d14.531427899999999!2d120.9949515!5e0!3m2!1sen!2sph!4v1740650727281!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="baclaranTerminal">Baclaran Terminal</option>
                        <option value="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d20612.388429359777!2d120.97421406127077!3d14.629760075822833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397b42bc4212a1b%3A0xbcff4f1d14dc500c!2s1400%2C%201695%20Rizal%20Ave%20Ext%2C%20Grace%20Park%20West%2C%20Caloocan%2C%201400%20Metro%20Manila!3m2!1d14.6558973!2d120.9837994!4m5!1s0x3397ca03aeb1fa9b%3A0xa38eba87dcd932f2!2sIsetann%2C%20Recto%2C%20Recto%20Avenue%2C%20Quiapo%2C%20Manila%2C%20Metro%20Manila!3m2!1d14.603123499999999!2d120.98466119999999!5e0!3m2!1sen!2sph!4v1740650896835!5m2!1sen!2sph" id="rectoTerminal">Recto Terminal</option>
                        <option value="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d25230.91158241863!2d121.00174112893555!3d14.62763147417203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x3397b42bc4212a1b%3A0xbcff4f1d14dc500c!2s1400%2C%201695%20Rizal%20Ave%20Ext%2C%20Grace%20Park%20West%2C%20Caloocan%2C%201400%20Metro%20Manila!3m2!1d14.6558973!2d120.9837994!4m5!1s0x3397b7d813f101cb%3A0x8871d46b1caf4be7!2sGreenhills%2C%20San%20Juan%2C%20Metro%20Manila!3m2!1d14.602373199999999!2d121.04641009999999!5e0!3m2!1sen!2sph!4v1740650960418!5m2!1sen!2sph" id="sanjuanTerminal">SanJuan GreenHills Terminal</option>
                        </select>
                        <div class="text-red-500"><?php echo $buyticketErrors['optionDestinations']; ?></div>
                    </div>
                  <div>
                    <!-- RANDOM TICKET NUMBER -->
                    <span class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl">Generated Ticket Number: </span>
                      <span class="text-red-400 text-base font-semibold" id="ticketNumberSpan" ><?php randomTicketNumber() ?></span>
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
                  </div>
                  </div>
                  <script src="../js/FarePrice.js"></script>
          </div>
        </div>
     </section>
     <!-- MAPS -->
     <section class="main_container">
              <div class="flex flex-col px-10 md:px-0 md:text-start">
              <h1 class="md:text-start text-center text-2xl font-semibold text-textColor md:text-3xl py-14 ml-5 2xl:ml-0">Location</h1>
          <div class=" flex flex-col items-center md:items-center">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12983.875552004802!2d120.97567882784813!3d14.648591930698114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1740650408823!5m2!1sen!2sph" class="w-full sm:w-full md:w-[700px] lg:w-[1100px] 2xl:w-[1525px]" height="450" style="border:1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="monumentoToBaclaran"></iframe>
              <input type="hidden" id="locationInput">  
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
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="firstName" id="firstName" value="<?php echo $firstName ?>"/>
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
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="DateAndTime">Date and Time</label>
                <div class="text-red-500"><?php echo $buyticketErrors['dateAndTime']; ?></div>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" 
                type="datetime-local"  id="DateAndTime" name="dateAndTime" value="<?php echo $dateAndTime ?>"/>

                </span>
            </div>
            <div class="flex flex-col items-center space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
              <span class="flex w-full flex-col">
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="PassengersWithOutDiscount">How many Passenger are their?</label>
                <div class="text-red-500"><?php echo $buyticketErrors['passengersCount']; ?></div>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="passengersCount" id="passengersCount" value="<?php echo $passengersCount ?>"/>
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
     <?php include '../components/footer.php'; ?>
  </body>
</html>

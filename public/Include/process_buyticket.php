<?php 
session_start();
if(!isset($_SESSION["user_id"])) {
  header('Location: ../Logout/home_page.php');
  exit();
}

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
    <script src="/jts/public/js/DateAndTime.js"></script>
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
      <div class="static left-0 right-0 top-0 z-10 flex h-20 items-center justify-between bg-white shadow-lg sm:px-5 md:fixed md:px-10 lg:px-20">
        <div class="flex w-full items-center justify-center md:w-auto">
          <span class="mx-2">
            <img class="h-[70px] w-[230px] object-cover px-5" src="/jts/image/main_logo.png" alt="JTS logo" />
          </span>
          </span>
        </div>
        <div class="navbar items-center justify-between ">
          <div class=" md:flex-none lg:flex-1"></div>
          <div class="flex-none gap-2">
            <div class="hidden md:block px-5">
              <span class="flex gap-10 transition-all">
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="home_page.php">Home</a></span>
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="#">Transaction History</a></span>
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="home_page.php #about">About</a></span>
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="home_page.php #contact">Contact Us</a></span>
              </span>
            </div>
            <div class="dropdown dropdown-end flex items-center justify-center">
              <div class="pr-5">      <!-- Mobile Design Header Icon -->
                <span class="mx-2">
                  <svg class="size-6 cursor-pointer transition-all duration-300 ease-out hover:text-[#e6ce20] md:hidden" id="hamburger-menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
      <div class="grid hidden grid-rows-5 justify-center gap-6 border-2 bg-white text-center shadow-lg transition-all md:hidden" id="mobile-menu">
        <span class="pt-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl"><a href="home_page.php">Home</a></span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl"><a href="buy_ticket.php">Buy Ticket</a></span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl"><a href="home_page.php #about">About</a></span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl"><a href="home_page.php #contact">Contact Us</a></span>
        <span class="pb-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl block md:hidden "><a href="../Logout/logout_destroy.php">Logout</a></span>
      </div>
    </header>
    <!-- End Header section -->
    <!-- Main section -->
     <form action="#" method="POST" class="mb-14">
     <!-- Destinations -->
     <section class="main_container">
      <div class="flex flex-col items-center px-10 pt-32 md:items-start md:px-0">
      <div class="relative md:left-[40%]">
          <ul class="steps steps-vertical md:steps-horizontal">
            <li class="step step-success ">Select Terminal</li>
            <li class="step step-success ">Buy Ticket</li>
            <li class="step">Transaction</li>
          </ul>
        </div>
        <div class="flex justify-center py-14">
          <h1 class="text-2xl font-semibold text-textColor md:text-3xl">Destinations</h1>
        </div>
        <div class="w-full">
          <div class="space-y-4 border-2 bg-[#f4f4f4ca] px-10 py-5 shadow-lg md:space-y-7 xl:space-y-7 xl:rounded-l-lg">
              <div class="flex flex-col items-center justify-between space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
                    <div>
                      <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="Origin">Origin</label>
                      <select class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]">
                        <option value="Monumento">Monumento Terminal</option>
                        </select>
                    </div>
                    <div>
                      <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="Destinations">Destinations</label>
                      <select class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]">
                        <option value="BaclaranTerminal">Baclaran Terminal</option>
                        <option value="RectoTerminal">Recto Terminal</option>
                        <option value="SanJuanGreenHills">SanJuan GreenHills Terminal</option>
                        </select>
                    </div>
                  <div>
                    <span class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl">Generated Ticket Number: </span>
                      <span class="text-red-400 text-base font-semibold "><?php randomTicketNumber(); ?></span>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </section>
      <!-- End Destinations -->
    <!-- Passenger Details -->
    <section class="main_container">
      <div class="flex flex-col items-center px-10 pt-16 md:items-start md:px-0">
        <div class="flex justify-center py-14">
          <h1 class="text-2xl font-semibold text-textColor md:text-3xl">Passenger Details</h1>
        </div>
        <div class="w-full">
          <div class="space-y-4 border-2 bg-[#f4f4f4ca] px-10 py-5 shadow-lg md:space-y-7 xl:space-y-7 xl:rounded-l-lg">
            <div class="flex flex-col items-center space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
              <span class="flex w-full flex-col">
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="FirstName">First Name</label>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="firstname" id="firstName" />
              </span>
              <span class="flex w-full flex-col">
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="LastName">Last Name</label>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="lastname" id="lastName" />
              </span>
            </div>
            <div class="flex flex-col items-center space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
              <span class="flex w-full flex-col">
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="EmailAddress">Email Address</label>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="email" id="emailAddress" />
              </span>
              <span class="flex w-full flex-col">
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="PhoneNumber">Phone Number</label>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="phone" id="phoneNumber" />
              </span>
              <span class="flex w-full flex-col">
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="DateAndTime">Date and Time</label>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" 
                type="datetime-local" id="DateAndTime" name="DateAndTime"/>
                </span>
            </div>
            <div class="flex flex-col items-center space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
              <span class="flex w-full flex-col">
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="PassengersWithOutDiscount">How many Passenger are their?</label>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="passengersCount" id="passengersCount" />
              </span>
              <span class="flex w-full flex-col">
                <label class="mb-2 text-base text-textColor sm:mb-2 sm:text-xl" for="PassengersWithDiscount">How many Passenger's Discount are Their?</label>
                <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="PassengersWithDiscount" id="PassengersWithDiscount" />
              </span>
            </div>
            <div class="text-center">
              <button class="cursor-pointer rounded-[5px] bg-button px-10 py-2 text-base  text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:text-xl"  type="submit">Submit</button>
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

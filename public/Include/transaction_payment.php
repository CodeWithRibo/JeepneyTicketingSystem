<?php 

include '../handler/transaction_payment_process.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Payment</title>
    <link rel="stylesheet" href="/jts/src/output.css" />
    <link rel="stylesheet" href="/jts/src/input.css" />
    <link rel="stylesheet" href="/jts/src/plugin.css" />
    <link rel="stylesheet" href="/jts/src/custom.css">
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
                <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="transaction_payment.php">Transaction Payment</a></span>
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
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="transaction_payment.php">Transaction Payment</a></span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="home_page.php #about">About</a></span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] text-base md:font-semibold "><a href="home_page.php #contact">Contact Us</a></span>
      </div>
       </div>    
    </header>
    <!-- End Header section -->
     <!-- TRANSACTION PAYMENT -->
      <section class="main_container">
            <div class="pt-12">
                <div class="flex flex-col items-center justify-center pb-10">
                <h1 class="text-2xl font-semibold text-textColor md:text-3xl">Transaction Payment</h1>
                </div>
                <div class="pb-18">
                <table class="table-auto w-full text-center border-collapse ">
                    <tr class="border-gray-400">
                        <th class="py-3  md:text-base lg:text-xl bg-gray-100 text-gray-800">PASSENGER NAME</th>
                        <th class="py-3  md:text-base lg:text-xl bg-blue-100 text-blue-800">ORIGIN & DESTINATION</th>
                        <th class="py-3  md:text-base lg:text-xl bg-green-100 text-green-800">BOOK DATA & TIME</th>
                        <th class="py-3  md:text-base lg:text-xl bg-yellow-100 text-yellow-800">TICKET NUMBER</th>
                        <th class="py-3  md:text-base lg:text-xl bg-emerald-100 text-emerald-500">FARE PRICE</th>
                        <th class="py-3  md:text-base lg:text-xl bg-purple-100 text-purple-800">STATUS</th>
                        <th class="py-3  md:text-base lg:text-xl bg-red-100 text-red-800 ">CONFIRMATION</th>
                    </tr>
                 <?php 
                 foreach($rows as $row) {
                    echo "<tr class='border-2 border-gray-400'>
                        <td class='py-3 sm:text-[13px] md:text-base lg:text-xl border-gray-400 border-2 text-gray-900'>{$row['firstName']} {$row['lastName']}</td>
                      <td class='py-3 sm:text-[13px] md:text-base lg:text-xl border-gray-400 border-2 text-gray-900'>{$row['optionOrigin']} - {$row['optionDestinations']}</td>
                      <td class='py-3 sm:text-[13px] md:text-base lg:text-xl border-gray-400 border-2 text-gray-900'>{$row['dateAndTime']}</td>
                      <td class='py-3 sm:text-[13px] md:text-base lg:text-xl border-gray-400 border-2 text-red-400 font-bold'>{$row['ticketNumber']}</td>
                        <td class='py-3 sm:text-[13px] md:text-base lg:text-xl border-gray-400 border-2 text-red-400 font-bold'>{$row['farePrice']}</td>
                      <td class='border-2 border-gray-400'>
                        <button class='py-1 px-3 md:text-base lg:text-lg text-white bg-yellow-500 rounded-lg cursor-default'>Pending</button>
                      </td>
                      <td class='py-3 flex flex-col justify-center sm:flex-col md:flex-row'>
                        <form action='transaction_payment.php' method='POST'>
                      <input type='hidden' name='id_to_delete' value='{$row['id']} ?>'>
                    <button type='submit' name='delete' value='delete' class='md:text-base lg:text-lg py-1 md:px-3 lg:px-5 bg-red-500 hover:bg-red-800 rounded-lg cursor-pointer hover:opacity-80 transition duration-300 text-white text-lg'>Delete</button>
                    </form>
                        <button class='md:text-base lg:text-lg py-1 md:px-3 lg:px-5 bg-green-500 hover:bg-green-800 rounded-lg cursor-pointer hover:opacity-80 transition duration-300 text-white text-lg mr-2'>Pay Now</button>
                     
                        </td>
                    </tr>";
                   };
                 ?>
                  
                </table>
                <?php 
                if(empty($rows)) {
                 ?> 
                 <div class="flex items-center justify-center pt-10">
                  <h1 class="text-textColor text-3xl">NO TRANSACTION RECORD</h1>
                 </div>
                 <?php
                }
                ?>
                </div>
            </div>
      </section>
</body>
</html>
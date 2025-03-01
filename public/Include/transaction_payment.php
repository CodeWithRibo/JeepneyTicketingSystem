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
            <div class="pt-32">
                <div class="flex flex-col items-center justify-center pb-10">
                <h1 class="text-2xl font-semibold text-textColor md:text-3xl">Transaction Payment</h1>
                </div>
                <table class="table-auto w-full text-center border-collapse border-2 border-slate-500">
                    <tr class="border-slate-500 border-2">
                        <th class="py-3 text-xl border-slate-500 border-2">FULL NAME</th>
                        <th class="py-3 text-xl border-slate-500 border-2">ORIGIN & DESTINATION</th>
                        <th class="py-3 text-xl border-slate-500 border-2">BOOK DATA & TIME</th>
                        <th class="py-3 text-xl border-slate-500 border-2">TICKET NUMBER</th>
                        <th class="py-3 text-xl border-slate-500 border-2">STATUS</th>
                        <th class="py-3 text-xl border-slate-500 border-2">CONFIRMATION</th>
                    </tr>
                    <tr class="border-slate-500 border-2">
                        <td class=" py-3 border-slate-500 border-2 ">CarlJohn StoTomas</td>
                        <td class=" py-3 border-slate-500 border-2 ">Monumento Terminal - Baclaran Terminal</td>
                        <td class=" py-3 border-slate-500 border-2 ">3/2/2025 12:23 AM</td>
                        <td class=" py-3 border-slate-500 border-2 ">LF20205</td>
                        <td class=" py-3 border-slate-500 border-2 ">Pending</td>
                        <td class=" py-3">
                            <button class=" mr-2 py-1 px-5 bg-green-500 hover:bg-green-800 rounded-lg cursor-pointer hover:opacity-80 transition duration-300 text-white text-lg ">Pay Now</button>
                            <button class=" py-1 px-5 bg-red-500 hover:bg-red-800 rounded-lg cursor-pointer hover:opacity-80 transition duration-300 text-white text-lg ">Delete</button>
                        </td>
                    </tr>
                </table>
            </div>
      </section>
</body>
</html>
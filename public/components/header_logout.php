 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/jts/src/output.css" />
    <link rel="stylesheet" href="/jts/src/input.css" />
    <link rel="stylesheet" href="/jts/src/plugin.css" />
    <link rel="stylesheet" href="/jts/custom.css">
    <script src="/jts/public/js/index.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
      @media (max-width: 550px) {
        .responsive_img {
          height: auto;
        }
      }
    </style>
 </head>
 <body>
    <!--*Header section-->
 <header>
      <!--DESKTOP DESIGN -->
      <div class="static left-0 right-0 top-0 z-10 flex h-20 items-center justify-between bg-white shadow-lg sm:px-5 md:fixed md:px-10 lg:px-20">
        <div class="flex w-full items-center justify-center md:w-auto">
          <span class="mx-2">
            <img class="h-[70px] w-[230px] object-cover px-5" src="/jts/image/main_logo.png " alt="JTS logo" />
          </span>
          <!-- MOBILE DESIGN HEADER ICON -->
          <span class="pr-2 font-bold text-primary md:hidden">Menu</span>
          <span class="mx-2">
            <svg class="size-6 cursor-pointer transition-all duration-300 ease-out hover:text-[#e6ce20] md:hidden" id="hamburger-menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </span>
        </div>
        <div class="hidden md:block">
          <span class="flex gap-10 transition-all">
            <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="#home">Home</a>
            <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="BuyTicket.php">Buy Ticket</a>
            <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="#about">About</a>
            <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="#contact">Contact Us</a>
            <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="Login.php">Login</a>
          </span>
        </div>
      </div>
      <!-- MOBILE DESIGN HEADER -->
      <div class="grid hidden grid-rows-5 justify-center gap-6 border-2 bg-white text-center shadow-lg transition-all md:hidden" id="mobile-menu">
        <a class="pt-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="#home">Home</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="BuyTicket.php">Buy Ticket</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="#about">About</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="#contact">Contact Us</a>
        <a class="pb-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="Login.php">Login</a>
      </div>
    </header>
    <!--*End Header section-->

    </body>
 </html>
 
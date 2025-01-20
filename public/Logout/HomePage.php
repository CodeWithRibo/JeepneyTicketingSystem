<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
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
  <body class="m-0 box-border bg-background p-0 font-sanscalp">
    <!--*Header section-->
    <header>
      <!--DESKTOP DESIGN -->
      <div class="static left-0 right-0 top-0 z-10 flex h-20 items-center justify-between bg-white shadow-lg sm:px-5 md:fixed md:px-10 lg:px-20">
        <div class="flex w-full items-center justify-center md:w-auto">
          <span class="mx-2">
            <img class="h-[70px] w-[230px] object-cover px-5" src="https://i.im.ge/2025/01/16/zGaEtp.temporary-logo.png" alt="JTS logo" />
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
    <!--*Hero Banner section-->
    <section id="home">
      <div class="img-plugin relative flex flex-col items-center justify-center space-y-5 text-center">
      <span class="text-xl text-white md:text-2xl lg:text-3xl">Start your Journey</span>
      <span class="text-xl text-white md:text-2xl lg:text-3xl">With</span>
      <span class="text-xl text-white md:text-2xl lg:text-3xl">Confidence and Convenience</span>
      </div>
    </section>
    <!--*End Banner section-->
     
    <!-- *About Section -->
    <section class="bg-[#e9e5e5]" id="about">
      <main class="main_container px-10 py-16">
      <div class="mb-10 text-center">
        <span class="text-3xl font-bold text-primary">About</span>
      </div>
      <div class="grid grid-cols-1 overflow-hidden rounded-md border shadow-lg shadow-[#999c9aa5] lg:grid-cols-2">
        <div class="w-full">
        <img class="responsive_img h-[500px] w-full object-cover lg:h-[570px] xl:h-[600px]" src="https://i.im.ge/2025/01/16/zGaRUW.about-picture-temporary.png" alt="About" />
        </div>
        <div class="bg-white">
        <div class="mx-4 text-justify text-[11.5px] sm:text-[14px] md:mx-10 md:text-[16px] xl:text-[18px] 2xl:text-xl">
          <div class="mt-5 w-full md:mt-10 lg:mt-5 2xl:mt-10">
          <span class="text-textColor">
            The Jeepney Ticketing System, inspired by the innovative practices on Karuhatan Road in Valenzuela, transforms the traditional way of purchasing jeepney tickets. By introducing a digital ticketing system, it ensures a convenient, secure, and efficient process for passengers. The system not only mirrors the unique toy coin method but also brings real-time updates, accessibility, and environmental benefits, significantly enhancing the overall passenger experience.
          </span>
          </div>
          <div class="mb-5 md:mb-10 lg:mb-0">
          <h1 class="mb-3 mt-5 text-start text-[20px] font-semibold text-primary md:text-[25px] lg:text-2xl">Buy Ticket Online</h1>
          <span class="text-textColor">
            One of the standout features of the Jeepney Ticketing System is the ability to purchase tickets online. Passengers can easily buy tickets via the official website. This online platform offers a range of payment options, making it convenient for users to secure their tickets in advance. Once the transaction is completed, passengers receive a digital ticket with a unique ticket number, which can be shown to the conductor when boarding the jeepney.
          </span>
          </div>
        </div>
        </div>
      </div>
      </main>
    </section>
    <!-- *End About Section -->
    <!-- *Contact Section -->
    <section class="main_container sm:px-10 sm:py-32" id="contact">
      <div class="flex flex-col items-center px-5 md:flex-col md:items-center lg:px-0 xl:flex-row">
      <div class="relative space-y-5 lg:flex-none xl:flex-1">
        <div class="space-y-5 pt-20 text-center md:text-center xl:py-0 xl:text-start">
        <h1 class="text-3xl text-[30px] font-bold text-primary xl:text-5xl">Contact Us</h1>
        <span class="block max-w-[30rem] text-[15.5px] leading-relaxed text-textColor md:text-[18px] xl:text-justify xl:text-xl">
          We value your input! Share your ideas or suggestions on how we can improve our Jeepney Ticketing System.
        </span>
        </div>
      </div>
      <div class="mt-10 w-full lg:w-1/2 xl:mt-0 xl:w-1/2">
        <form action="#" class="space-y-7 rounded-lg border bg-[#f4f4f4ca] p-10 shadow-lg xl:space-y-7 xl:rounded-md">
        <div class="flex flex-col items-center space-y-5 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
          <span class="flex w-full flex-col">
          <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="FirstName">First Name</label>
          <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="firstname" id="firstName" />
          </span>
          <span class="flex w-full flex-col">
          <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="LastName">Last Name</label>
          <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="lastname" id="lastName" />
          </span>
        </div>
        <div class="flex flex-col">
          <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="email">Email Address</label>
          <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="email" name="email" id="email" />
        </div>
        <div class="flex flex-col">
          <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="subject">Subject</label>
          <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]" type="text" name="subject" id="subject" />
        </div>
        <div class="flex flex-col">
          <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="message">Message</label>
          <textarea class="w-full resize-none rounded-[5px] border border-[#949494] text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:w-auto xl:text-[18px]" name="message" id="message" rows="8"></textarea>
        </div>
        <div class="text-center">
          <button class="cursor-pointer rounded-[5px] bg-button px-10 py-2 text-base text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:text-xl" type="submit">Submit</button>
        </div>
        </form>
      </div>
      </div>
    </section>
    <!-- *End Contact Section -->
    <!-- *Footer Section -->
    <section class="bg-[#e9e5e5]">
      <main class="">
        <div class="main_container mx-auto min-h-full items-start justify-evenly py-20 text-center md:grid md:grid-cols-3 md:gap-10 md:px-20 md:text-start xl:flex xl:gap-44">
          <div class="m-0 mb-5 flex w-full flex-col gap-2 md:col-start-1 md:m-0 md:gap-5">
            <h1 class="animation_wrap font-semibold text-primary md:text-xl lg:text-2xl xl:text-[26px] 2xl:text-3xl">QUICK LINKS</h1>
            <span class="text_wrap">Home</span>
            <span class="text_wrap">Terminals</span>
            <span class="text_wrap">Buy Ticket</span>
            <span class="text_wrap">About</span>
          </div>
          <div class="m-0 mb-5 flex w-full flex-col gap-2 md:col-start-1 md:row-start-2 md:m-0 md:gap-5">
            <h1 class="animation_wrap font-semibold text-primary md:text-xl lg:text-2xl xl:text-[26px] 2xl:text-3xl">CONTACT INFO</h1>
            <span class="text_wrap">+63 917 987 6543</span>
            <span class="text_wrap">(02) 8123 4567</span>
            <span class="text_wrap">JeepneyTicketingSystem@gmail.com</span>
            <span class="text_wrap">STI Academic Center, 730 Samson Rd Caloocan, Metro Manila</span>
          </div>
          <div class="m-0 flex w-full flex-col gap-2 md:col-start-2 md:row-start-1 md:m-0 md:ml-10 md:gap-5">
            <h1 class="animation_wrap font-semibold text-primary md:text-xl lg:text-2xl xl:text-[26px] 2xl:text-3xl">FOLLOW US</h1>
            <span class="text_wrap"><i class="fa-brands fa-facebook pr-2"></i>Facebook</span>
            <span class="text_wrap"><i class="fa-brands fa-twitter pr-2"></i>Twitter</span>
            <span class="text_wrap"><i class="fa-brands fa-instagram pr-2"></i>Instagram</span>
            <a href="https://github.com/CodeWithRibo" target="_blank"><span class="text_wrap"><i class="fa-brands fa-github pr-2"></i>Github</span></a>
          </div>
        </div>
        <!-- ^All Rights reserved -->
        <div>
          <div class="max-w-full border-b-[1.5px] border-textColor text-center"></div>
          <div class="py-5 text-center text-base font-bold text-textColor md:text-[17px] xl:text-[19px]">
            <span>© 2025 JeepneyTicketingSystem™. All Rights Reserved.</span>
          </div>
        </div>
      </main>
    </section>
    <!-- *End Footer Section -->
  </body>
</html>

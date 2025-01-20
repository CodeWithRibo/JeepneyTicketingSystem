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
  <body class="m-0 box-border p-0 font-sanscalp" id="buyTicket">
    <!--*Header section-->
    <header class="">
      <!-- ?DESKTOP DESIGN -->
      <div class="static left-0 right-0 top-0 z-10 flex h-20 items-center justify-between bg-white shadow-lg sm:px-5 md:fixed md:px-10 lg:px-20">
        <div class="flex w-full items-center justify-center md:w-auto">
          <span class="mx-2">
            <img
              class="h-[70px] w-[230px] object-cover px-5"
              src="https://i.im.ge/2025/01/16/zGaEtp.temporary-logo.png"
              alt="JTS logo"
            />
          </span>
          <!-- ?MOBILE DESIGN HEADER ICON -->
          <span class="pr-2 font-bold text-primary md:hidden">Menu</span>
          <span class="mx-2">
            <svg
              class="size-6 cursor-pointer transition-all duration-300 ease-out hover:text-[#e6ce20] md:hidden"
              id="hamburger-menu"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
          </span>
        </div>
        <div class="hidden md:block">
          <span class="flex gap-10 transition-all">
            <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl">
              <a href="HomePage.php">Home</a>
            </span>
            <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl">
              <a href="#buyTicket">Buy Ticket</a>
            </span>
            <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl">
              <a href="HomePage.php#about">About</a>
            </span>
            <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl">
              <a href="HomePage.php#contact">Contact Us</a>
            </span>
            <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl">
              <a href="Login.html">Login</a>
            </span>
          </span>
        </div>
      </div>
      <!-- ?MOBILE DESIGN HEADER -->
      <div class="grid hidden grid-rows-5 justify-center gap-6 border-2 bg-white text-center shadow-lg transition-all md:hidden" id="mobile-menu">
        <span class="pt-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl">
          <a href="HomePage.php">Home</a>
        </span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl">
          <a href="#buyTicket">Buy Ticket</a>
        </span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl">
          <a href="HomePage.php#about">About</a>
        </span>
        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl">
          <a href="HomePage.php#contact">Contact Us</a>
        </span>
        <span class="pb-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl">
          <a href="Login.php">Login</a>
        </span>
      </div>
    </header>
    <!--*End Header section-->
    <!--*Banner section-->
    <section class=" img-plugin transition-all ease-in duration-150 border border-primary shadow-lg ">
        <div class=" main_container  flex flex-col items-center sm:pt-32 pt-16  sm:px-0 px-10 ">
            <div class="pb-14 space-y-5 md:text-start text-center">
                <div class="pt-10">
                    <span class="xl:text-3xl md:text-[27px] text-[22px] text-white">Hello, Guest!</span>
                </div>
                <div>
                    <span class="xl:text-4xl md:text-[33px] text-[28px] text-white">Get Your Ticket Now! Don't Miss Out on the Excitement Ride!</span>
                </div>
            </div>
            <div class="pb-10 w-full sm:w-full sm:px-10">
                <div class="relative w-full">
                    <div class="relative w-full input_plugin md:px-10 lg:px-0">
                        <i class="fa-solid fa-magnifying-glass absolute left-[1.3rem] sm:left-[1rem] md:left-[3.5rem] lg:left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        <input type="text" name="searchBar" id="searchBar" placeholder="Search Terminals" class=" transition-all duration-150 ease-in-out  pl-10 py-4 border rounded-full w-full sm:w-full lg:w-full placeholder:xl:text-2xl placeholder:md:text-xl placeholder:text-xl text-xl">
                      </div>
                  </div>
            </div>
        </div>
    </section>
    <!--*End Banner section-->
    <!--* Card Terminals section-->
    <section class="main_container">
      <div class="p-10">
        <div class="my-20 text-center">
          <span class="text-4xl font-bold text-primary">Terminals</span>
        </div>
        <div class="text-center text-[1.5rem] font-semibold lg:text-start lg:text-3xl">
          <span class="text-primary">Caloocan</span>
        </div>
        <div class="grid grid-cols-1 items-center justify-items-center gap-10 pt-10 md:grid-cols-2 lg:grid-cols-3">
          <!-- Monumento Terminal -->
          <div class="h-[310px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
            <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="https://i.im.ge/2025/01/16/zGa8or.temporary-image.png" alt="Monumento Terminal" />
            <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
              <span class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]">Monumento Terminal</span>
            <div>
            <a href="../login/ProcessBuyTicket.php" class="mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
                    Buy Ticket
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                    </svg>
                  </a>
            </div>
            </div>
          </div>
          <!-- Sangandaan Terminal -->
          <div class="h-[310px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
            <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="https://i.im.ge/2025/01/16/zGa8or.temporary-image.png" alt="Sm Sangandaan Terminal" />
            <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
              <span class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]">Sm Sangandaan Terminal</span>
              <a href="#" class="mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
                Buy Ticket
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>
              </a>
            </div>
          </div>
          <!-- May Pajo Terminal -->
          <div class="h-[310px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
            <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="https://i.im.ge/2025/01/16/zGa8or.temporary-image.png" alt="Maypajo Terminal" />
            <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
              <span class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]">Maypajo Terminal</span>
              <a href="#" class="mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
                Buy Ticket
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <!-- ! MANILA TERMINAL -->
        <div class="text-center text-[1.5rem] font-semibold lg:text-start lg:text-3xl pt-10">
          <span class="text-primary">Manila</span>
        </div>
        <div class="grid grid-cols-1 items-center justify-items-center gap-10 pt-10 md:grid-cols-2 lg:grid-cols-3 pb-14">
          <div class="h-[310px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
            <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="https://i.im.ge/2025/01/16/zGa8or.temporary-image.png" alt="Recto Terminal" />
            <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
              <span class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]">Recto Terminal</span>
              <a href="#" class="mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
                Buy Ticket
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>
              </a>
            </div>
          </div>
          <div class="h-[310px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
            <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="https://i.im.ge/2025/01/16/zGa8or.temporary-image.png" alt="Divisoria Terminal" />
            <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
              <span class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]">Divisoria Terminal</span>
              <a href="#" class="mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
                Buy Ticket
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>
              </a>
            </div>
          </div>
          <div class="h-[310px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
            <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="https://i.im.ge/2025/01/16/zGa8or.temporary-image.png" alt="Divisoria Terminal" />
            <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
              <span class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]">Divisoria Terminal</span>
              <a href="#" class="mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
                Buy Ticket
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>
              </a>
            </div>
          </div>
          </div>
          </div>
    </section>
    <!--*End Terminals section-->
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
            <span class="text_wrap"><i class="fa-brands fa-github pr-2"></i>Github</span>
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
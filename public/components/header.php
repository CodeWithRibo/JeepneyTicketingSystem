<?php

ob_start(); // Start output buffering
$isLogin = isset($_SESSION["user_id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/jts/src/output.css" />
    <link rel="stylesheet" href="/jts/src/input.css" />
    <link rel="stylesheet" href="/jts/src/plugin.css" />
    <link rel="stylesheet" href="/jts/src/custom.css">
    <script src="/jts/public/js/index.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <style>
        @media (max-width: 550px) {
            .responsive_img {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <?php
    if (!$isLogin) {
        // Logout
        echo '<header>
    <!--DESKTOP DESIGN -->
    <div class="static left-0 right-0 top-0 z-10 flex h-20 items-center justify-between bg-white shadow-lg sm:px-5 md:fixed md:px-10 lg:px-20">
        <div class="flex w-full items-center justify-center md:w-auto">
            <span class="mx-2">
                <a href="../Logout/home_page.php"><img class="h-[70px] w-[230px] object-cover cursor-pointer px-5" src="/jts/image/main_logo.png" alt="JTS logo" /></a>
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
                <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="../logout/home_page.php">Home</a>
                <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="../include/select_terminal.php">Terminals</a>
                <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="../logout/home_page.php #about">About</a>
                <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="../logout/home_page.php #contact">Contact Us</a>
                <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl" href="../Login/login.php">Login</a>
            </span>
        </div>
    </div>
    <!-- MOBILE DESIGN HEADER -->
    <div class="grid hidden grid-rows-5 justify-center gap-6 border-2 bg-white text-center shadow-lg transition-all md:hidden" id="mobile-menu">
        <a class="pt-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="#home">Home</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="../include/buy_ticket.php">Terminals</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="../logout/home_page.php #about">About</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="../logout/home_page.php #contact">Contact Us</a>
        <a class="pb-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="../login/login.php">Login</a>
    </div>
</header>';
    } else {
        // Login
        echo '<header>
    <!--DESKTOP DESIGN -->
    <div class="static left-0 right-0 top-0 z-10 flex h-20 items-center justify-between bg-white shadow-lg sm:px-5 md:fixed md:px-10 lg:px-20">
        <div class="flex w-full items-center justify-center md:w-auto">
            <span class="mx-2">
                <img class="h-[70px] w-[230px] object-cover px-5" src="/jts/image/main_logo.png" alt="JTS logo" />
            </span>
        </div>
        <div class="navbar items-center justify-between">
            <div class="md:flex-none lg:flex-1"></div>
            <div class="flex-none gap-2">
                <div class="hidden md:block px-5">
                    <span class="flex gap-10 transition-all">
                        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="../include/home_page.php">Home</a></span>
                        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="../include/select_terminal.php">Terminals</a></span>
                        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="#">Transaction History</a></span>
                        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="../include/home_page.php #about">About</a></span>
                        <span class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm lg:text-xl"><a href="../include/home_page.php #contact">Contact Us</a></span>
                    </span>
                </div>
                <div class="dropdown dropdown-end flex items-center justify-center">
                    <div class="pr-5">
                        <span class="mx-2">
                            <svg class="size-6 cursor-pointer transition-all duration-300 ease-out hover:text-[#e6ce20] md:hidden" id="hamburger-menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </span>
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
                        class="menu menu-sm dropdown-content rounded-box z-[1] mt-3 w-52 p-2 shadow-lg bg-white">
                        <li>
                            <a onclick="alert("Under Construction");" class="justify-between">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a onclick="alert("Under Construction");">Settings</a></li>
                        <li><a href="../Logout/logout_destroy.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
    <!-- MOBILE DESIGN HEADER -->
    <div class="grid hidden grid-rows-5 justify-center gap-6 border-2 bg-white text-center shadow-lg transition-all md:hidden" id="mobile-menu">
        <a class="pt-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="#home">Home</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="BuyTicket.php">Buy Ticket</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="#about">About</a>
        <a class="text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="#contact">Contact Us</a>
        <a class="pb-3 text-primary duration-300 ease-in hover:text-[#e6ce20] md:text-sm md:font-semibold lg:text-xl" href="../Logout/logout_destroy.php">Logout</a>
    </div>
</header>';
    }
    ?>
</body>

</html>
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
    .bg-sidebar {
      background: #3d68ff;
    }

    .cta-btn {
      color: #3d68ff;
    }

    .upgrade-btn {
      background: #1947ee;
    }

    .upgrade-btn:hover {
      background: #0038fd;
    }

    .active-nav-link {
      background: #1947ee;
    }

    .nav-item:hover {
      background: #1947ee;
    }

    .account-link:hover {
      background: #3d68ff;
    }

    .overflow-y-auto {
      overflow-y: auto;
    }
  </style>
</head>

<body class="bg-gray-100 font-sanscalp flex">
  <!-- SIDE BAR -->
  <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
      <a href="#" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Conductor</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
      <a href="#" class="flex items-center  text-white py-4 pl-6 nav-item">
        <i class="fa-solid fa-table-columns mr-3"></i>
        Dashboard
      </a>
      <a href="#" class="flex items-center active-nav-link text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-sticky-note mr-3"></i>
        Issue Ticket
      </a>
      <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-table mr-3"></i>
        View Issue Ticket
      </a>
      <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-align-left mr-3"></i>
        All Transaction History
      </a>
      <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-tablet-alt mr-3"></i>
        Salary Tracking
      </a>
    </nav>
    <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
      <i class="fas fa-copyright mr-3"></i>
      Jeepney Ticketing System
    </a>
  </aside>

  <div class="relative w-full flex flex-col h-screen overflow-y-auto">
    <!-- Desktop Header -->
    <header class="w-full items-center bg-slate-200 py-2 px-6 hidden sm:flex">
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
        <a href="#" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
          <i x-show="!isOpen" class="fas fa-bars"></i>
          <i x-show="isOpen" class="fas fa-times"></i>
        </button>
      </div>

      <!-- Dropdown Nav -->
      <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="#" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
          <i class="fas fa-tachometer-alt mr-3"></i>
          Dashboard
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-sticky-note mr-3"></i>
          Issue Ticket
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-table mr-3"></i>
          View Issue Ticket
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-align-left mr-3"></i>
          All Transaction History
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-tablet-alt mr-3"></i>
          Salary Tracking
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
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
    <h1 class="text-3xl text-gray-700 pb-6 font-semibold pl-5">Issue Ticket</h1>

    <div class="mx-auto max-w-screen-xl w-full">
      <div class="border-b border-gray-900/10 bg-slate-100 border-2 px-10 py-10">
        <div class="relative flex items-center lg:flex-row flex-col">
        <p class="mt-1 text-xl text-gray-600">Fill out the form to complete the ticket-issuing process.</p>
        <img src="/jts/image/main_logo.png" alt="" class="lg:absolute lg:right-0 h-auto">
        </div>
        <div class="flex pt-5 items-center gap-2">
          <h1 class="text-2xl text-gray-700">Ticker Number: </h1>
          <span class=" text-xl font-semibold text-red-500">N2P423M</span>
        </div>

        <!-- DESTINATIONS -->
        <div class="flex flex-col sm:flex-col md:flex-row gap-5 md:items-center sm:items-start items-start w-full">
          <div class="pt-5">
            <h2 class="text-base/7 font-semibold text-gray-900">Origin</h2>
            <select name="optionOrigin" id="optionOrigin" class="py-4 px-8 rounded-md border boder-[#949494] cursor-pointer ">
              <option value="Baclaran Terminal">Monumento Terminal</option>
            </select>
          </div>

          <div class=" pt-0 sm:pt-5">
            <h2 class="text-base/7 font-semibold text-gray-900">Destinations</h2>
            <select name="optionDestinations" id="optionDestinations" class="py-4 px-8 rounded-md border boder-[#949494] cursor-pointer ">
              <option disabled selected value="Select Destinations">Select Destinations</option>
              <option value="Baclaran Terminal">Baclaran Terminal</option>
              <option value="Recto Terminal">Recto Terminal</option>
              <option value="San Juan GreenHills">SanJuan GreenHills Terminal</option>
              <option value="Manila Lawton Terminal">Manila Lawton Terminal</option>
            </select>
          </div>
        </div>
        <!-- PRICE FARE -->
        <div class="pt-5">
            <span class="text-red-500 font-semibold text-xl">Price Fare: 70PHP</span>
        </div>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

          <div class="sm:col-span-3 w-full h-auto ">
            <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
            <div class="mt-2">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-2 border-slate-400 bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
          </div>

          <div class="sm:col-span-3 w-full h-auto ">
            <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
            <div class="mt-2">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-2 border-slate-400 bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
          </div>

          <div class="sm:col-span-3 w-full h-auto ">
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-2 border-slate-400 bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
          </div>
          <div class="sm:col-span-3 w-full h-auto  sm:col-start-4">
            <label for="email" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-2 border-slate-400  bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
          </div>
          <div class="sm:col-span-3 w-full h-auto ">
            <label for="Passenger" class="block text-sm/6 font-medium text-gray-900">Number of Passenger's</label>
            <div class="mt-2">
              <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-2 border-slate-400  bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
          </div>
          <div class="sm:col-span-3 w-full h-auto  sm:col-start-4">
            <label for="Passenger" class="block text-sm/6 font-medium text-gray-900">Number of Passenger's With Discount</label>
            <div class="mt-2">
              <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-2 border-slate-400  bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            </div>
          </div>
        </div>
        <div class="flex items-center justify-center pt-5">
        <button type="button" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit Ticket</button>
        </div>
      </div>
    </div>
    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>
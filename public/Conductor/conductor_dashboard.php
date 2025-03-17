<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

        .font-family-karla {
            font-family: karla;
        }

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
    </style>
</head>

<body class="bg-gray-100 font-sanscalp flex">

    <?php include '../Components/conductor_header.php'; ?>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-gray-700 pb-6 font-semibold">Jeepney System Dashboard</h1>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-y-8 gap-x-5 max-w-7xl mx-auto w-full">
                <!-- TOTAL ISSUED TICKET -->
                <div class="flex flex-row items-center justify-between gap-5 bg-red-500 hover:bg-red-600 hover:opacity-80 cursor-pointer transition-all duration-300 w-full shadow-lg py-2 px-3 rounded-md">
                    <div class="flex flex-col justify-center h-full">
                        <span class="uppercase text-start font-semibold text-white text-xl leading-tight">25</span>
                        <span class="uppercase font-semibold text-white text-base leading-tight">total issued ticket</span>
                    </div>
                    <div class="flex items-center justify-center h-full">
                        <i class="fa-solid fa-ticket text-yellow-200 text-3xl"></i>
                    </div>
                </div>
                <!-- TOTAL ALL TRANSACTION HISTORY -->
                <div class="flex flex-row items-center justify-between gap-5 bg-green-500 hover:bg-green-600 hover:opacity-80 cursor-pointer transition-all duration-300 w-full shadow-lg py-2 px-3 rounded-md">
                    <div class="flex flex-col justify-center h-full">
                        <span class="uppercase text-start font-semibold text-white text-xl leading-tight">25</span>
                        <span class="uppercase font-semibold text-white text-base leading-tight">total all transcation</span>
                    </div>
                    <div class="flex items-center justify-center h-full">
                        <i class="fa-solid fa-clock-rotate-left text-white text-3xl"></i>
                    </div>
                </div>
                <!-- Total REGISTERED PASSENGERS  -->
                <div class="flex flex-row items-center justify-between gap-5 bg-green-500 hover:bg-green-600 hover:opacity-80 cursor-pointer transition-all duration-300 w-full shadow-lg py-2 px-3 rounded-md">
                    <div class="flex flex-col justify-center h-full">
                        <span class="uppercase text-start font-semibold text-white text-xl leading-tight">25</span>
                        <span class="uppercase font-semibold text-white text-base leading-tight">Total Registered Passengers</span>
                    </div>
                    <div class="flex items-center justify-center h-full">
                        <i class="fa-solid fa-users text-yellow-200 text-3xl"></i>
                    </div>
                </div>
                <!-- TOTAL REVENUE  -->
                <div class="flex flex-row items-center justify-between gap-5 bg-yellow-500 hover:bg-yellow-600 hover:opacity-80 cursor-pointer transition-all duration-300 w-full shadow-lg py-2 px-3 rounded-md">
                    <div class="flex flex-col justify-center h-full">
                        <span class="uppercase text-start font-semibold text-white text-xl leading-tight">₱100,000</span>
                        <span class="uppercase font-semibold text-white text-base leading-tight">total REVENUE</span>
                    </div>
                    <div class="flex items-center justify-center h-full">
                        <i class="fa-solid fa-coins text-yellow-200 text-3xl"></i>
                    </div>
                </div>
            </div>
            <!-- ROUTE TOP EARNING PER TERMINAL-->
            <h1 class="text-3xl text-gray-700 pb-6 font-semibold text-center pt-10">Top Earning Routes</h1>
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-y-8 gap-x-5 max-w-7xl mx-auto w-full">
                <!-- BACLARAN TERMINAL -->
                <div class="flex flex-row items-center justify-between gap-5 bg-yellow-500 hover:bg-yellow-600 hover:opacity-80 cursor-pointer transition-all duration-300 w-full shadow-lg py-2 px-3 rounded-md">
                    <div class="flex flex-col justify-center h-full">
                        <span class="uppercase text-start font-semibold text-white text-xl leading-tight">₱100,000</span>
                        <span class="uppercase font-semibold text-white text-sm lg:text-base xl:text-base leading-tight">Baclaran Terminal</span>
                    </div>
                    <div class="flex items-center justify-center h-full">
                        <i class="fa-solid fa-coins text-yellow-200 text-3xl"></i>
                    </div>
                </div>
                <!-- RECTO TERMINAL -->
                <div class="flex flex-row items-center justify-between gap-5 bg-yellow-500 hover:bg-yellow-600 hover:opacity-80 cursor-pointer transition-all duration-300 w-full shadow-lg py-2 px-3 rounded-md">
                    <div class="flex flex-col justify-center h-full">
                        <span class="uppercase text-start font-semibold text-white text-xl leading-tight">₱125,000</span>
                        <span class="uppercase font-semibold text-white text-sm lg:text-base xl:text-base leading-tight">Recto Terminal</span>
                    </div>
                    <div class="flex items-center justify-center h-full">
                        <i class="fa-solid fa-coins text-yellow-200 text-3xl"></i>
                    </div>
                </div>
                <!-- SanJuan GreenHills TERMINAL -->
                <div class="flex flex-row items-center justify-between gap-5 bg-yellow-500 hover:bg-yellow-600 hover:opacity-80 cursor-pointer transition-all duration-300 w-full shadow-lg py-2 px-3 rounded-md">
                    <div class="flex flex-col justify-center h-full">
                        <span class="uppercase text-start font-semibold text-white text-xl leading-tight">₱500,000</span>
                        <span class="uppercase font-semibold text-white text-sm lg:text-base xl:text-base leading-tight">SanJuan GreenHills Terminal</span>
                    </div>
                    <div class="flex items-center justify-center h-full">
                        <i class="fa-solid fa-coins text-yellow-200 text-3xl"></i>
                    </div>
                </div>
                <!-- Manila Lawton TERMINAL -->
                <div class="flex flex-row items-center justify-between gap-5 bg-yellow-500 hover:bg-yellow-600 hover:opacity-80 cursor-pointer transition-all duration-300 w-full shadow-lg py-2 px-3 rounded-md">
                    <div class="flex flex-col justify-center h-full">
                        <span class="uppercase text-start font-semibold text-white text-xl leading-tight">₱250,000</span>
                        <span class="uppercase font-semibold text-white text-sm lg:text-base xl:text-base leading-tight">Manila Lawton Terminal</span>
                    </div>
                    <div class="flex items-center justify-center h-full">
                        <i class="fa-solid fa-coins text-yellow-200 text-3xl"></i>
                    </div>
                </div>
            </div>
            <!-- ACTIVE USERS -->

            <div class="w-full mt-12">
                <h1 class="text-3xl text-gray-700  font-semibold text-center pt-10">Active Users</h1>
                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i>
                    List
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    User
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Rol
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Created at
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Vera Carpenter
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Jan 21, 2020
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Activo</span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Blake Bowman
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Jan 01, 2020
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Activo</span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Dana Moore
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Editor</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Jan 10, 2020
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Suspended</span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-5 py-5 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                                alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Alonzo Cox
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                                </td>
                                <td class="px-5 py-5 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Jan 18, 2020</p>
                                </td>
                                <td class="px-5 py-5 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                        <span aria-hidden
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative">Inactive</span>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>
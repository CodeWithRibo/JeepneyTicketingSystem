<?php

session_start();
if (!isset($_SESSION["conductor_user_id"])) {
    header("Location: ../Logout/home_page.php");
    exit();
}

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

    <!-- HEADER -->
    <?php include '../Components/conductor_header.php'; ?>


    <div class="w-full overflow-x-hidden border-t flex flex-col >
            <main class=" w-full flex-grow p-6">
        <h1 class="text-3xl text-black px-5 py-6">View Issued Ticket</h1>
        <!-- SEARCH BAR -->
        <div class="flex items-center justify-center ">
            <div class="flex rounded-full border-2 border-blue-500 overflow-hidden font-[sans-serif] max-w-lg mx-auto w-full">
                <input type="email" placeholder="SEARCH TICKET NUMBER"
                    class="w-full outline-none bg-white text-sm px-5 py-3" />
                <button type='button' class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 px-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="18px" class="fill-white">
                        <path
                            d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="w-full mt-12 max-w-7xl mx-auto"">
                    <p class=" text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> List
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class=" w-1/5 text-left py-3 px-4 uppercase font-semibold text-sm">Full Name</th>
                            <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Origin</th>
                            <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">Destination</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Fare Amount</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Ticket Number</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">View Ticket Details</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr>
                            <td class="text-left py-3 px-4"><a class="">Lein Smith</a></td>
                            <td class="text-left py-3 px-4"><a class="">Monumento Terminal</a></td>
                            <td class="text-left py-3 px-4"><a class="">Baclaran Terminal</a></td>
                            <td class="text-left py-3 px-4"><a class="text-red-500 font-semibold">₱75</a></td>
                            <td class="text-left py-3 px-4"><a class="text-red-500 font-semibold">NPM32288</a></td>
                            <td class="text-left py-3 px-4"><a class="px-4 py-2 bg-green-500 font-semibold text-white rounded-lg">Paid</a></td>
                            <td class="text-left py-3 px-4"><a class="bg-green-100 hover:bg-green-400 transition-all duration-300 px-5 py-2 rounded-lg truncate"><button><i class="fa-solid fa-eye pr-2"></i>View Details</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </main>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>
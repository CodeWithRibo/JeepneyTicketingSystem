<?php 

include '../Database/dbconfig.php';

$rows = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $searchName = $_POST['search'];
  //SEARCHING ACCOUNT USING  NAME OR ID
  $sql = "SELECT id, firstName, lastName FROM jts_users WHERE firstName LIKE ? OR lastName LIKE ?  OR id = ?";
  $stmt = $connection->prepare($sql);
  $searchTerm = "%$searchName%";
  $stmt->bind_param('ssi', $searchTerm, $searchTerm, $searchName);
  $stmt->execute();
  $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
      $rows[] = $row;
  }

  $stmt -> close();
  $connection -> close();

}

?>
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

<!-- HEADER -->
  <?php include '../Components/conductor_header.php'; ?>


  <h1 class="text-3xl text-gray-700 pb-6 font-semibold pl-5">Issue Ticket</h1>

  <div class="mx-auto max-w-screen-xl w-full">
    <div class="border-b border-gray-900/10 bg-slate-100 border-2 px-10 py-10">
      <div class="relative flex items-center xl:flex-row flex-col">
        <p class="mt-1 text-xl text-gray-600">Fill out the form to complete the ticket-issuing process.</p>
        <img src="/jts/image/main_logo.png" alt="" class="xl:absolute xl:right-0 h-auto">
      </div>
          <!-- SEARCH BAR -->
          <div class="flex items-center justify-center ">
                <form action="conductor_issueTicket.php" method="post">
                <div class="flex rounded-full border-2 border-blue-500 overflow-hidden font-[sans-serif] max-w-lg mx-auto w-full">
                    <input type="text" name="search" id="search" placeholder="SEARCH NAME OR ID"
                        class="w-full outline-none bg-white text-sm px-5 py-3" />
                    <button type='button' class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 px-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="18px" class="fill-white">
                            <path
                                d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                            </path>
                        </svg>
                    </button>
                </div>
                <?php 
                foreach($rows as $row) {
                  ?> 
                  <!-- <span class="bg-red-500 hover:bg-red-700 transition-all duration-300 text-white text-xl py-2 px-8 rounded-lg shadow-lg cursor-pointer">tite</span> -->
                    <span class="text-red-500 text-2xl flex justify-center"> <?php echo "{$row['firstName']} {$row['lastName']}"; ?></span>
                  <?php 
                  echo "<a href='conductor_issueTicket.php?user_id=" . $row['id'] . "' class='bg-red-500 hover:bg-red-700 flex justify-center transition-all duration-300 text-white text-xl py-2 px-8 rounded-lg shadow-lg cursor-pointer'>Issue Ticket</a>";
                }
                if(isset($_GET['user_id'])) {
                  $user_id = $_GET['user_id'];
                }
                          ?>
                </form>
            </div>
            <form action="conductor_save_ticket.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
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
            <input type="text" name="firstName" id="firstName"  class="block w-full rounded-md border-2 border-slate-400 bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-3 w-full h-auto ">
          <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
          <div class="mt-2">
            <input type="text" name="lastName" id="lastName"  class="block w-full rounded-md border-2 border-slate-400 bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-3 w-full h-auto ">
          <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email"  class="block w-full rounded-md border-2 border-slate-400 bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
        <div class="sm:col-span-3 w-full h-auto  sm:col-start-4">
          <label for="phoneNumber" class="block text-sm/6 font-medium text-gray-900">Phone Number</label>
          <div class="mt-2">
            <input id="phoneNumber" name="phoneNumber" type="text"  class="block w-full rounded-md border-2 border-slate-400  bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
        <div class="sm:col-span-3 w-full h-auto ">
          <label for="Passenger" class="block text-sm/6 font-medium text-gray-900">Number of Passenger's</label>
          <div class="mt-2">
            <input type="text" name="passengersCount" id="passengersCount" class="block w-full rounded-md border-2 border-slate-400  bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
        <div class="sm:col-span-3 w-full h-auto  sm:col-start-4">
          <label for="Passenger" class="block text-sm/6 font-medium text-gray-900">Number of Passenger's With Discount</label>
          <div class="mt-2">
            <input type="text" name="PassengersWithDiscount" id="PassengersWithDiscount" class="block w-full rounded-md border-2 border-slate-400  bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
        </div>
      </div>
      <div class="flex items-center justify-center pt-5">
        <button type="submit" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit Ticket</button>
      </div>
      </form>
    </div>
  </div>
  <!-- AlpineJS -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>
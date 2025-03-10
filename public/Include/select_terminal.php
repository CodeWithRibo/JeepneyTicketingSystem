<?php
include '../Database/dbconfig.php';
session_start();

if (!isset($_SESSION["user_id"])) {
  header('Location: ../Logout/home_page.php');
}

if (isset($_SESSION['user_id'])) {
  $isLogin = $_SESSION['user_id'];
}
$sql = "SELECT userName FROM jts_users WHERE id = ?";
$userNameStmt = $connection->prepare($sql);
$userNameStmt->bind_param("i", $isLogin);
$userNameStmt->execute();
$result = $userNameStmt->get_result();


if ($result->num_rows > 0) {
  //each row based on the query select
  $row = $result->fetch_assoc();
  $userName = $row['userName'];
  $_SESSION['userName'] = $userName;
} else {
  $_SESSION['userName'] = "Guest";
}

?>
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
  <script src="/jts/public/js/ImagePlugin.js"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
  <?php include '../components/header.php'; ?>
  <!--*Banner section-->
  <section class=" transition-all ease-in duration-150 border border-primary shadow-lg" id="img_plugin">
    <div class=" main_container  flex flex-col items-center sm:pt-32 pt-16  sm:px-0 px-10 ">
      <div class="pb-14 space-y-5 md:text-start text-center">
        <div class="pt-10 ">
          <span class="xl:text-3xl md:text-[27px] text-[22px] text-white">Hello, <span class=" text-button font-bold "><?php echo $_SESSION['userName']; ?></span></span>
        </div>
        <div>
          <span class="xl:text-4xl md:text-[33px] text-[28px] text-white">Get Your Ticket Now! Don't Miss Out on the Excitement Ride!</span>
        </div>
      </div>
      <div class="pb-10 w-full sm:w-full sm:px-10">
        <div class="relative w-full">
          <div class="relative w-full input_plugin md:px-10 lg:px-0">
            <i class="fa-solid fa-magnifying-glass absolute left-[1.3rem] sm:left-[1rem] md:left-[3.5rem] lg:left-4 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
            <!-- SEARCH BAR -->
            <input type="text" name="searchBar" id="searchBar" onkeyup="searchTerminal()" placeholder="Search Terminals" class=" transition-all duration-150 ease-in-out  pl-10 py-4 border rounded-full w-full sm:w-full lg:w-full placeholder:xl:text-2xl placeholder:md:text-xl placeholder:text-xl text-xl">
            <script src="../js/SearchBar.js"></script>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--*End Banner section-->
  <!--* Card Terminals section-->
  <section class="main_container" id="terminals">
    <div class="p-10">
      <div class="my-20 text-center">
        <span class="text-4xl font-bold text-primary">Terminals</span>
      </div>
      <div class="text-center text-[1.5rem] font-semibold lg:text-start lg:text-3xl">
        <h2 class="location text-primary">Caloocan</h2>
      </div>
      <div class="grid grid-cols-1 items-center justify-items-center gap-10 pt-10 md:grid-cols-2 lg:grid-cols-3">
        <!-- Monumento Terminal -->
        <div class="parent h-[250px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
          <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="/jts/image/monumento_landmark.jpg" alt="Monumento Terminal" />
          <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
            <h1 class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]">Monumento Terminal</h1>
            <div>
              <a href="buy_ticket.php" class="mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
                Buy Ticket
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <!-- Sangandaan Terminal -->
        <div class="parent h-[250px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
          <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="/jts/image/404_temporary_image.png" alt="Sm Sangandaan Terminal" />
          <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
            <h1 class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]" id="sm_sangandaan_terminal">Sm Sangandaan Terminal</h1>
            <a href="" id="lugar_terminal" class="under_construction mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
              Buy Ticket
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
              </svg>
            </a>
          </div>
        </div>
        <!-- May Pajo Terminal -->
        <div class="parent h-[250px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
          <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="/jts/image/404_temporary_image.png" alt="Maypajo Terminal" />
          <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
            <h1 class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]" id="maypajo_terminal">Maypajo Terminal</h1>
            <a href="" id="lugar_terminal" class=" under_construction mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
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
        <h2 class=" location text-primary">Manila</h2>
      </div>
      <div class="grid grid-cols-1 items-center justify-items-center gap-10 pt-10 md:grid-cols-2 lg:grid-cols-3 pb-14">
        <div class="parent h-[250px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
          <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="/jts/image/404_temporary_image.png" alt="Recto Terminal" />
          <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
            <h1 class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]" id="recto_terminal">Recto Terminal</h1>
            <a href="" id="lugar_terminal" class="under_construction mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
              Buy Ticket
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
              </svg>
            </a>
          </div>
        </div>
        <!-- DIVISORIA -->
        <div class="parent h-[250px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
          <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="/jts/image/404_temporary_image.png" alt="Divisoria Terminal" />
          <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
            <h1 class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]" id="divisoria_terminal">Divisoria Terminal</h1>
            <a href="" id="lugar_terminal" class="under_construction mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
              Buy Ticket
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mr-2 size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
              </svg>
            </a>
          </div>
        </div>
        <!--LEGARDA -->
        <div class="parent h-[250px] sm:h-[390px] md:h-[410px] w-full overflow-hidden rounded-md shadow-lg shadow-[#999c9aa5]">
          <img class="responsive_img h-48 w-full rounded-t-md object-cover sm:h-56 md:h-64 lg:h-72 xl:h-80" src="/jts/image/404_temporary_image.png" alt="Divisoria Terminal" />
          <div class="flex flex-col items-center justify-between rounded-b-3xl p-3 sm:p-4 md:p-5 lg:flex-col xl:p-0 2xl:flex-row 2xl:p-5">
            <h1 class="text-lg font-semibold text-primary sm:text-[17px] md:text-[20px] lg:text-base 2xl:text-[19px]" id="legarda_terminal">Legarda Terminal</h1>
            <a href="" id="lugar_terminal" class="under_construction mt-4 flex flex-row-reverse items-center rounded-xl bg-[#d5c812] px-6 py-1 text-lg text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:mt-0 sm:px-8 sm:py-3 sm:text-xl md:px-7 md:text-xl lg:px-5 lg:py-2">
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
  
  <?php
  if ($isLogin) {
  ?>
    <script>
      const under_construction = document.querySelectorAll("#lugar_terminal");
    
      under_construction.forEach((element) => {
        element.addEventListener('click', (e) => {
          e.preventDefault();
          const terminalName = element.previousElementSibling.textContent;
          Swal.fire({
            title: "Under Construction",
            text: terminalName + " is under construction",
            icon: "info"
          });
        });
      })
    </script>
  <?php
  }
  ?>
  <!--*End Terminals section-->
  <!-- *Footer Section -->
  <?php include '../components/footer.php'; ?>
  <!-- *End Footer Section -->
</body>

</html>
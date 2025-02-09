<?php 
session_start();
if(isset($_SESSION["user_id"])) { //if the users alrady loggin they can't access the login home page
  header('Location: ../Include/home_page.php');
  exit();
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
    <link rel="stylesheet" href="/jts/src/plugin.css">
    <link rel="stylesheet" href="/jts/custom.css">
    <script src="/jts/public/js/AdjustRow.js"></script>
    <script src="/jts/public/js/ImagePlugin.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class="m-0 box-border bg-background p-0 font-sanscalp">
      <!-- Header Section -->
      <?php include '../components/header.php'; ?>
    <!--*Hero Banner section-->
    <section id="home">
      <div class="img-plugin relative flex flex-col items-center justify-center space-y-5 text-center" id="img_plugin">
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
        <img class="responsive_img h-[500px] w-full object-cover lg:h-[570px] xl:h-[600px]" src="/jts/image/about_image_logo.png" alt="About" />
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
    <?php include '../Contact/contact.php'; ?>
    <!-- *End Contact Section -->
      <!-- Footer Section -->
      <?php include '../components/footer.php'; ?>
    </body>
</html>

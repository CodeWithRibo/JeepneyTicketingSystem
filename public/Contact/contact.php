<?php

include_once '../handler/contact_errors_handler.php';
include_once 'contact_form_process.php';

$isLogin = isset($_SESSION['user_id']); //check if user is logged in

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
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

<body>
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
        <!-- form -->
        <form action="../include/home_page.php #contact" method="POST" class="space-y-7 rounded-lg border bg-[#f4f4f4ca] p-10 shadow-lg xl:space-y-7 xl:rounded-md">
          <div class="flex flex-col items-center space-y-5 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
            <span class="flex w-full flex-col">
              <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="FirstName">First Name</label>
              <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
                type="text"
                name="firstName"
                id="firstName"
                value="<?php echo htmlspecialchars($firstName) ?>" />
              <div class="text-red-500"><?php echo $contactErrors['firstName'] ?></div>
            </span>
            <span class="flex w-full flex-col">
              <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="LastName">Last Name</label>
              <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
                type="text"
                name="lastName"
                id="lastName"
                value="<?php echo htmlspecialchars($lastName) ?>" />
              <div class="text-red-500"><?php echo $contactErrors['lastName'] ?></div>
            </span>
          </div>
          <div class="flex flex-col">
            <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="email">Email Address</label>
            <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
              type="email"
              name="email"
              id="email"
              value="<?php echo htmlspecialchars($email) ?>" />
            <div class="text-red-500"><?php echo $contactErrors['email'] ?></div>
          </div>
          <div class="flex flex-col">
            <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="subject">Subject</label>
            <input class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
              type="text"
              name="subject"
              id="subject"
              value="<?php echo htmlspecialchars($subject) ?>" />
            <div class="text-red-500"><?php echo $contactErrors['subject'] ?></div>
          </div>
          <div class="flex flex-col">
            <label class="text-base text-textColor sm:mb-3.5 sm:text-xl" for="message">Message</label>
            <textarea class="w-full resize-none rounded-[5px] border border-[#949494] text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:w-auto xl:text-[18px]" name="message" id="message" rows="8" aria-valuetext="<?php echo htmlspecialchars($message) ?>">
        </textarea>
            <div class="text-red-500"><?php echo $contactErrors['message'] ?></div>
          </div>
          <div class="text-center">
            <button id="btn_contact_submit" class="cursor-pointer rounded-[5px] bg-button px-10 py-2 text-base text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:text-xl"
              type="submit"
              name="submit">Submit</button>
          </div>
        </form>
        <?php
        if (!$isLogin) {
        ?>
          <script>
            document.addEventListener('DOMContentLoaded', () => {
              const btn = document.getElementById('btn_contact_submit');
              btn.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the form from being submitted
                Swal.fire({
                  title: "Submit Failed",
                  text: "You need to login before submitting",
                  icon: "error"
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location = '../Login/login.php';
                  }
                });
              });
            });
          </script>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
</body>

</html>
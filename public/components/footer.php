<?php
//check the user if exist
$isLogin = isset($_SESSION['user_id']);

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
  <link rel="stylesheet" href="/jts/custom.css">
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
<?php
if (!$isLogin) {
  echo '<body>
   <section class="bg-[#e9e5e5]">
      <main class="">
        <div class="main_container mx-auto min-h-full items-start justify-evenly py-20 text-center md:grid md:grid-cols-3 md:gap-10 md:px-20 md:text-start xl:flex xl:gap-44">
          <div class="m-0 mb-5 flex w-full flex-col gap-2 md:col-start-1 md:m-0 md:gap-5">
            <h1 class="animation_wrap font-semibold text-primary md:text-xl lg:text-2xl xl:text-[26px] 2xl:text-3xl">QUICK LINKS</h1>
            <a href="../logout/home_page.php"><span class="text_wrap">Home</span></a>
            <a href="../logout/select_terminal.php #terminals"><span class="text_wrap">Terminals</span></a>
            <a href="../logout/home_page.php #about"><span class="text_wrap">About</span></a>
             <a href="../login/login.php #about"><span class="text_wrap">Login</span></a>
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
          <a href="https://www.facebook.com/carljohn2818" target="_blank"><span class="text_wrap"><i class="fa-brands fa-facebook pr-2"></i>Facebook</span></a>
          <a href="https://www.instagram.com/carljohn_16" target="_blank"><span class="text_wrap"><i class="fa-brands fa-instagram pr-2"></i>Instagram</span></a>
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
    </body>
 </html>';
} else {
  echo '<body>
  <section class="bg-[#e9e5e5]">
     <main class="">
       <div class="main_container mx-auto min-h-full items-start justify-evenly py-20 text-center md:grid md:grid-cols-3 md:gap-10 md:px-20 md:text-start xl:flex xl:gap-44">
         <div class="m-0 mb-5 flex w-full flex-col gap-2 md:col-start-1 md:m-0 md:gap-5">
           <h1 class="animation_wrap font-semibold text-primary md:text-xl lg:text-2xl xl:text-[26px] 2xl:text-3xl">QUICK LINKS</h1>
           <a href="../include/home_page.php"><span class="text_wrap">Home</span></a>
           <a href="../include/select_terminal.php #terminals"><span class="text_wrap">Terminals</span></a>
           <a href="../include/buy_ticket.php"><span class="text_wrap">Buy Ticket</span></a>
           <a href="../include/home_page.php #about"><span class="text_wrap">About</span></a>
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
         <a href="https://www.facebook.com/carljohn2818" target="_blank"><span class="text_wrap"><i class="fa-brands fa-facebook pr-2"></i>Facebook</span></a>
         <a href="https://www.instagram.com/carljohn_16" target="_blank"><span class="text_wrap"><i class="fa-brands fa-instagram pr-2"></i>Instagram</span></a>
           <a href="https://github.com/CodeWithRibo" target="_blank"><span class="text_wrap"><i class="fa-brands fa-github pr-2"></i>Github</span></a>
           <a href="https://discord.gg/2XKtPa5p" target="_blank"><span class="text_wrap"><i class="fa-brands fa-discord pr-2"></i>Discord</span></a>
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
   </body>
</html>';
}
?>
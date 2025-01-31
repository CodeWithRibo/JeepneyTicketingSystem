
<?php 

// include '../handler/errors_handler.php';
include '../Login/login_process.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
      .responsive_img {
        height: 100%;
      }
    </style>
  </head>
  <body class="bg-background font-sanscalp">
    <section class="main_container">
      <div class="flex flex-col items-center md:px-0 px-10 py-0 lg:py-32">
        <div class="flex justify-center">
          <a href="/public/DashBoard.html">
            <img
              class="w-[500px] h-auto object-cover px-5"
              src="https://i.im.ge/2025/01/16/zGaEtp.temporary-logo.png"
              alt="JTS logo"
            />
          </a>
        </div>
        <div class="w-full max-w-2xl">
          <form
            action="login.php"
            method="POST"
            class="space-y-4 md:space-y-7 border-2 bg-[#f4f4f4ca] px-10 py-5 shadow-lg xl:space-y-7 xl:rounded-l-lg"
          >
            <div>
              <h1 class="text-start text-3xl xl:text-4xl">Login</h1>
              <span class="text-lg">
                Doesn’t have an account yet?
                <a
                  href="../Signup/signup.php"
                  class="underline text-textColor font-semibold hover:text-button transition-all ease-linear duration-150"
                  >Signup</a
                >
              </span>
            </div>
            <div class="flex flex-col">
              <label
                class="text-base text-textColor mb-2 sm:mb-2 sm:text-xl"
                for="username"
                >Username</label
              >
              <!-- USERNAME -->
              <input
                class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
                type="text"
                name="userName"
                id="username"
              />
              <div class=" text-red-500"><?php echo $loginErrors['userName']; ?></div>
            </div>
            <div class="flex flex-col">
              <label
                class="text-base text-textColor mb-2 sm:mb-2 sm:text-xl"
                for="password"
                >Password</label
              >
              <!-- PASSWORD -->
              <input
                class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
                type="password"
                name="password"
                id="password"
              />
              <div class=" text-red-500"><?php echo $loginErrors['password']; ?></div>
            </div>
            <div class=" text-red-500 text-center"><?php echo $loginErrors['userName']; echo $loginErrors['password'];?></div>
            <div class="text-center">
              <button
                class="cursor-pointer rounded-[5px] bg-button px-10 py-2 text-base text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:text-xl"
                type="submit" value="submit" name="submit"
              >
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>

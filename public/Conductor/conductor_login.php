<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php

include '../Database/dbconfig_conductor.php';

session_start();
if (isset($_SESSION["conductor_user_id"])) {
    header("Location: conductor_dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    // check if username and password are  empty
    if (empty($userName) || empty($password)) {
?>
        <script>
            Swal.fire({
                title: "Login Failed",
                text: "Please enter both username and password",
                icon: "error"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'conductor_login.php';
                }
            });
        </script>
    <?php

        exit;
    }
    // retrieve data in the database base on the username and password
    $sqlUsername = "SELECT id, userName, password FROM conductor_account WHERE userName = ?";
    $checkUserNameStmt = $connection->prepare($sqlUsername);
    $checkUserNameStmt->bind_param("s", $userName);
    $checkUserNameStmt->execute();
    $result = $checkUserNameStmt->get_result();
    // get the result by single row and store it in $user
    $user = $result->fetch_assoc();

    // verify the password
    if ($user && $password === $user['password']) {
        // store the user id in the session
        $_SESSION["conductor_user_id"] = $user['id'];
        $_SESSION["user_name"] = $user['userName'];
    } else {
        // authentication failed
    ?>
        <script>
            Swal.fire({
                title: "Login Failed",
                text: "Invalid username or password",
                icon: "error"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = 'conductor_login.php';
                }
            });
        </script>
<?php
        exit;
    }
}
$connection->close();
?>
</body>
</html>





<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conductor Login</title>
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
</head>
<body class="bg-background font-sanscalp">
    <section class="main_container">
        <div class="flex flex-col items-center md:px-0 px-10 py-0 lg:py-32">
            <div class="flex justify-center">
                <a href="/public/DashBoard.html">
                    <img
                        class="w-[500px] h-auto object-cover px-5"
                        src="https://i.im.ge/2025/01/16/zGaEtp.temporary-logo.png"
                        alt="JTS logo" />
                </a>
            </div>
            <div class="w-full max-w-2xl">
                <form
                    action="conductor_login.php"
                    method="POST"
                    class="space-y-4 md:space-y-7 border-2 bg-[#f4f4f4ca] px-10 py-5 shadow-lg xl:space-y-7 xl:rounded-l-lg">
                    <div>
                        <h1 class="text-start text-3xl xl:text-4xl text-textColor">Conductor Login</h1>
                        <span class="text-lg">
                            Doesn’t have an account yet?
                            <a
                                href="../Signup/signup.php"
                                class="underline text-textColor font-semibold hover:text-button transition-all ease-linear duration-150">Signup</a>
                        </span>
                    </div>
                    <div class="flex flex-col">
                        <label
                            class="text-base text-textColor mb-2 sm:mb-2 sm:text-xl"
                            for="username">Username</label>
                        <!-- USERNAME -->
                        <input
                            class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
                            type="text"
                            name="userName"
                            id="username" />
                    </div>
                    <div class="flex flex-col relative">
                        <label
                            class="text-base text-textColor mb-2 sm:mb-2 sm:text-xl"
                            for="password">Password</label>
                        <!-- PASSWORD -->
                        <input
                            class="rounded-[5px] border border-[#949494] py-[4.5px] pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 sm:py-2 xl:text-[18px]"
                            type="password"
                            name="password"
                            id="password" />
                            <i class=" absolute right-0 top-10 fa-solid fa-eye mt-3 mr-2"></i>
                    </div>
                    <script src="../js/ToggleList.js"></script>
                    <div class="text-center">
                        <button
                            class="cursor-pointer rounded-[5px] bg-button px-10 py-2 text-base text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:text-xl"
                            type="submit" value="submit" name="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
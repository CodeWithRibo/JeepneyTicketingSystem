<?php
include'../Database/dbconfig_conductor.php';

// if (isset($_SESSION["user_id"])) {
//     header("Location: ../Include/home_page.php");
//     exit();
// }

// check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //validation and sanitization
    include 'conductor_signup_logic_handler.php';

    if (!array_filter($errors)) {
        include 'conductor_function_handler.php';
        echo existUserName();
        echo existPhoneNumber();

        // check if there are no errors proceed to the database
        // insert data to the database
        $sqlUsers = "INSERT INTO conductor_account  (firstName, lastName, userName, phoneNumber, password, confirmPassword) VALUES ( ? , ? , ? , ? , ? , ?)";
        $insertUsers = $connection->prepare($sqlUsers);
        $insertUsers->bind_param("ssssss", $firstName, $lastName, $userName, $phoneNumber, $password, $confirmPassword);

        //  check if the data is inserted
        if ($insertUsers->execute()) {
            header('Location: conductor_login.php');
            exit();
        }

        $userNameStmt->close();
        $phoneNumberStmt->close();
        $insertUsers->close();
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Conductor Signup</title>
    <link rel="stylesheet" href="/jts/src/output.css" />
    <link rel="stylesheet" href="/jts/src/input.css" />
    <link rel="stylesheet" href="/jts/src/custom.css">
    <script src="/jts/public/js/DateAndTime.js"></script>
    <script src="/jts/public/js/index.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body class="bg-background font-sanscalp ">
    <section class="main_container ">
        <div class=" flex flex-col items-center md:px-0 px-0 ">
            <div class="flex justify-center">
                <a href="#">
                    <img
                        class=" w-[500px] h-auto  object-cover px-5"
                        src="/jts/image/main_logo.png"
                        alt="JTS logo" />
                </a>
            </div>
            <div class="w-full max-w-2xl">
                <!-- FORM -->
                <form
                    action="conductor_signup.php"
                    method="POST"
                    class=" space-y-4 md:space-y-7 border-2 bg-[#f4f4f4ca] px-10 py-5 shadow-lg xl:space-y-7 xl:rounded-l-lg ">
                    <h1 class="text-center  text-3xl xl:text-4xl text-textColor ">
                        Create Your Conductor Account
                    </h1>
                    <div
                        class="flex flex-col items-center   space-y-4 md:space-y-7 lg:flex-col xl:flex-row xl:space-x-5 xl:space-y-0">
                        <span class="w-full flex flex-col">
                            <label
                                class="text-base text-textColor mb-2  sm:mb-2 sm:text-xl"
                                for="FirstName">First Name</label>
                            <!-- FIRST NAME -->
                            <input
                                class="rounded-[5px] border border-[#949494] py-2 pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500  xl:text-[18px] "
                                type="text"
                                name="firstName"
                                id="firstName"
                                value="<?php #echo $firstName; 
                                        ?>" />
                            <div class=" text-red-500"><?php #echo $errors['firstName'];; 
                                                        ?></div>
                        </span>
                        <span class="w-full flex flex-col">
                            <label
                                class="text-base text-textColor mb-2 sm:mb-2 sm:text-xl"
                                for="LastName">Last Name</label>
                            <!-- LAST NAME -->
                            <input
                                class="rounded-[5px] border border-[#949494] py-2 pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500  xl:text-[18px] "
                                type="text"
                                name="lastName"
                                id="lastName"
                                value="<?php #echo $lastName; 
                                        ?>" />
                            <div class=" text-red-500"><?php #echo $errors['lastName'];; 
                                                        ?></div>
                        </span>
                    </div>
                    <div class="flex flex-col">
                        <label
                            class="text-base text-textColor mb-2  sm:mb-2 sm:text-xl"
                            for="username">Username</label>
                        <!-- USERNAME -->
                        <input
                            class="rounded-[5px] border border-[#949494] py-2 pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500  xl:text-[18px]"
                            type="text"
                            name="userName"
                            id="username"
                            value="<?php #echo $userName; 
                                    ?>" ; />
                        <div class=" text-red-500"><? #php echo $errors['userName'];; 
                                                    ?></div>
                    </div>
                    <div class="flex flex-col">
                        <label
                            class="text-base text-textColor  mb-2 sm:mb-2 sm:text-xl"
                            for="phoneNumber">Phone Number</label>
                        <!-- PHONE NUMBER -->
                        <input
                            class="rounded-[5px] border border-[#949494] py-2 pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500  xl:text-[18px]"
                            type="text"
                            name="phoneNumber"
                            id="phoneNumber"
                            value="<?php #echo $phoneNumber; 
                                    ?>" />
                        <div class=" text-red-500"><?php #echo $errors['phoneNumber'];; 
                                                    ?></div>
                    </div>
                    <div class="flex flex-col relative">
                        <label
                            class="text-base text-textColor mb-2  sm:mb-2 sm:text-xl"
                            for="password">Password</label>
                        <!-- PASSWORD -->
                        <input
                            class="rounded-[5px] relative border border-[#949494] py-2 pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500  xl:text-[18px]"
                            type="password"
                            name="password"
                            id="password"
                            value="<?php #echo $password; 
                                    ?>" />
                        <i class=" absolute right-0 top-10 fa-solid fa-eye mt-3 mr-2"></i>
                        <div class=" text-red-500"><?php #echo $errors['password']; 
                                                    ?></div>
                    </div>
                    <div class="flex flex-col relative">
                        <!-- CONFIRM PASSWORD -->
                        <label
                            class="text-base text-textColor mb-2  sm:mb-2 sm:text-xl"
                            for="confirmPassword">Confirm Password</label>
                        <input
                            class="rounded-[5px] border border-[#949494] py-2 pl-2 text-[15px] text-[#222422] transition-all duration-100 ease-in hover:border-blue-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500  xl:text-[18px]"
                            type="password"
                            name="confirmPassword"
                            id="confirmPassword"
                            value="<?php #echo $confirmPassword; 
                                    ?>" />
                        <i class=" absolute right-0 top-10 fa-solid fa-eye mt-3 mr-2"></i>
                        <div class=" text-red-500"><?php #echo $errors['confirmPassword']; 
                                                    ?></div>
                    </div>
                    <script src="../js/ToggleList.js"></script>
                    <div class="text-center">
                        <!-- SUBMIT BUTTON -->
                        <button class="cursor-pointer rounded-[5px] bg-button px-10 py-2 text-base  text-white transition-all duration-300 ease-in hover:bg-primary hover:opacity-85 sm:text-xl" type="submit" value="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
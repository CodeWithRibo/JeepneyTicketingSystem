<?php
include '../Database/dbconfig.php';

session_start();
if (!isset($_SESSION["user_id"])) {  //if the user's not loggin in, redirect to home-page logout page
    header('Location: ../Logout/home_page.php');
    exit();
}

if (isset($_SESSION['user_id'])) {
    $isLogin = $_SESSION['user_id'];
}

$sql = "SELECT email FROM jts_users WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param('i', $isLogin);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $row['email'];
}
include '../handler/settings_process.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/jts/src/output.css" />
    <link rel="stylesheet" href="/jts/src/input.css" />
    <link rel="stylesheet" href="/jts/src/plugin.css" />
    <link rel="stylesheet" href="/jts/src/custom.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Settings</title>
</head>

<body class="font-sanscalp">
    <?php include '../Components/header.php'; ?>
    <div class="mx-4 min-h-screen max-w-screen-xl sm:mx-8 xl:mx-auto pt-28">
        <h1 class="border-b py-6 text-4xl font-semibold">Settings</h1>
        <div class="grid grid-cols-8 pt-3 sm:grid-cols-10">
            <div class="relative my-4 w-56 sm:hidden">
                <input class="peer hidden" type="checkbox" name="select-1" id="select-1" />
                <label for="select-1" class="flex w-full cursor-pointer select-none rounded-lg border p-2 px-3 text-sm text-gray-700 ring-blue-700 peer-checked:ring">Accounts </label>
                <svg xmlns="http://www.w3.org/2000/svg" class="pointer-events-none absolute right-0 top-3 ml-auto mr-5 h-4 text-slate-700 transition peer-checked:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
                <ul class="max-h-0 select-none flex-col overflow-hidden rounded-b-lg shadow-md transition-all duration-300 peer-checked:max-h-56 peer-checked:py-3">
                    <li class="cursor-pointer px-3 py-2 text-sm text-slate-600 hover:bg-primary hover:text-white">Accounts</li>
                    <li class="cursor-pointer px-3 py-2 text-sm text-slate-600 hover:bg-primary hover:text-white">Profile</li>
                </ul>
            </div>

            <div class="col-span-2 hidden sm:block">
                <ul>
                    <li class="mt-5 cursor-pointer border-l-2 border-l-primary px-2 py-2 font-semibold text-primary transition hover:border-l-primary hover:text-primary">Accounts</li>
                    <li class="mt-5 cursor-pointer border-l-2 border-transparent px-2 py-2 font-semibold transition hover:border-l-primary hover:text-primary">Profile</li>
                </ul>
            </div>

            <div class="col-span-8 overflow-hidden rounded-xl sm:bg-gray-50 sm:px-8 sm:shadow">
                <div class="pt-4">
                    <h1 class="py-2 text-2xl font-semibold">Account settings</h1>
                </div>
                <hr class="mt-4 mb-8" />
                <!-- CHANGE EMAIL ADDRESS -->
                <form action="settings.php" method="POST" class="flex md:flex-col flex-col-reverse ">
                    <p class="py-2 text-xl font-semibold">Email Address</p>
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-gray-600">Your email address is <strong><?php echo $_SESSION['email']; ?></strong></p>
                        <button class="inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                    </div>
                    <label for="#" class="pt-5">New Email Address</label>
                    <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                        <input type="text" name="newEmail" id="" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="Type your email address" />
                    </div>
                    <div class="text-red-500"><?php echo $validateEmail['email']; ?></div>
                </form>
                <hr class="mt-4 mb-8" />
                <p class="py-2 text-xl font-semibold">Password</p>
                <div class="flex items-center">
                    <div class="grid grid-cols-4 ">
                        <!-- CURRENT PASSWORD -->
                        <div class="col-span-2">
                            <label for="login-password">
                                <span class="text-sm text-gray-500">Current Password</span>
                                <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                                    <input type="password" name="currentPassword" id="login-password" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="***********" />
                                </div>
                            </label>
                        </div>
                        <!-- NEW PASSWORD -->
                        <div class="mr-2">
                            <label for="login-password">
                                <span class="text-sm text-gray-500">New Password</span>
                                <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                                    <input type="password" name="newPassword" id="login-password" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="***********" />
                                </div>
                            </label>
                        </div>
                        <!-- CONFIRM PASSWORD -->
                        <div>
                            <label for="login-password">
                                <span class="text-sm text-gray-500">Confirm Password</span>
                                <div class="relative flex overflow-hidden rounded-md border-2 transition focus-within:border-blue-600">
                                    <input type="password" name="confirmPassword" id="login-password" class="w-full flex-shrink appearance-none border-gray-300 bg-white py-2 px-4 text-base text-gray-700 placeholder-gray-400 focus:outline-none" placeholder="***********" />
                                </div>
                            </label>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="mt-5 ml-2 h-6 w-6 cursor-pointer text-sm font-semibold text-gray-600 underline decoration-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                </div>
                <p class="mt-2">Can't remember your current password. <a class="text-sm font-semibold text-blue-600 underline decoration-2" href="#">Recover Account</a></p>
                <button class="mt-4 rounded-lg bg-blue-600 px-4 py-2 text-white">Save Password</button>
                <hr class="mt-4 mb-8" />

                <div class="mb-10">
                    <p class="py-2 text-xl font-semibold">Delete Account</p>
                    <p class="inline-flex items-center rounded-full bg-rose-100 px-4 py-1 text-rose-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                        Proceed with caution
                    </p>
                    <p class="mt-2">Make sure you have taken backup of your account in case you ever need to get access to your data. We will completely wipe your data. There is no way to access your account after this action.</p>
                    <button class="ml-auto text-sm font-semibold text-rose-600 underline decoration-2">Continue with deletion</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
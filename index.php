<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navigation</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <section id="hero">
        <!-- NAVIGATION -->
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="#">
                            <img class="h-10 w-40" src="logo.png" alt="Logo">
                        </a>
                    </div>
                    <!-- Navigation Links -->
                    <div class="hidden md:flex md:justify-center md:space-x-8">
                        <a href="#">
                            <p class="text-gray-900 inline-flex items-center px-8 pt-3 border-b-2 border-transparent hover:border-gray-300">HOME</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-900 inline-flex items-center px-8 pt-3 border-b-2 border-transparent hover:border-gray-300">SPORTS</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-900 inline-flex items-center px-8 pt-3 border-b-2 border-transparent hover:border-gray-300">SERVICES</p>
                        </a>
                        <a href="#">
                            <p class="text-gray-900 inline-flex items-center px-8 pt-3 border-b-2 border-transparent hover:border-gray-300">ABOUT</p>
                        </a>
                    </div>
                    <!-- Menu Toggle Button for Mobile -->
                    <div class="flex md:hidden">
                        <button class="text-black bg-white px-4 py-2 rounded-md border-2 border-black" id="menu-button">Menu</button>
                    </div>
                    <!-- Sign Up Button -->
                    <div class="flex-shrink-0">
                        <a href="login.php">
                            <button class="text-black bg-white px-4 py-2 rounded-md border-2 border-black">Sign Up</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu, hidden by default -->
        <div class="md:hidden fixed inset-0 bg-gray-800 bg-opacity-75 z-50 hidden" id="mobile-menu">
            <div class="flex flex-col items-center justify-center min-h-screen">
                <a href="#" class="text-white text-xl py-2">HOME</a>
                <a href="#" class="text-white text-xl py-2">SPORTS</a>
                <a href="#" class="text-white text-xl py-2">SERVICES</a>
                <a href="#" class="text-white text-xl py-2">ABOUT</a>
                <a href="login.php" class="text-black bg-white px-4 py-2 rounded-md border-2 border-black mt-4">Sign Up</a>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>


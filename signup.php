<?php
include 'connection.php'


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="/vite.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sign up</title>
    
        <!-- Include Tailwind CSS from CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    
        <!-- Include Alpine.js from CDN -->
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    </head>
  <body>
    <div class="min-h-screen py-12" style="background-image: linear-gradient(115deg, rgb(51, 51, 51), #000000)">
      <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
          <div class="w-full lg:w-1/2 flex flex-col items-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('images/Register-Background.png');">
            <img src="images/white.png" alt="" class="w-6/6">
          </div>
          <div class="w-full lg:w-1/2 py-16 px-12">
              <h2  class="text-3xl mb-4">Register</h2>
            <p class="mb-4">
              Create your account.
            </p>
            <form action="#">
              <div class="grid grid-cols-2 gap-5">
                <input type="text" placeholder="Firstname" class="border border-gray-400 py-1 px-2">
                <input type="text" placeholder="Surname" class="border border-gray-400 py-1 px-2">
              </div>
              <div class="mt-5">
                <input type="text" placeholder="Email" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" placeholder="Confirm Password" class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <span>
                  already have an account? <a href="login.php" class="text-purple-500 font-semibold">log in</a>
                </span>
              </div>
              <div class="mt-5">
                <button class="w-full bg-cyan-500 py-3 text-center text-white">Register Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script type="module" src="/main.js"></script>
  </body>
</html>
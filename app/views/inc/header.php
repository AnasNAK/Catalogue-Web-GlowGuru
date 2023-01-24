<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/a4fc922de4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>
    <?php echo SITENAME ?>
  </title>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
  <link rel="icon" type="image/png" href="../public/img/logo-1.png" />
  <link rel="stylesheet" href="./public/css/style.css">
</head>

<body class="bg-[#FFF2DF] font-[sitika]">

  <!--  start navbar-->
  <nav class="bg-[#DBC4A1] shadow-lg z-10 shadow-[#DBC5A4] px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap items-center justify-around mx-auto">
      <!--logo hero-->
      <a href="#cursole" class="flex items-center w-52 md:order-1">
        <img src="<?php echo URLROOT . '/img/logo-2.png'; ?>" class="h-6 mr-3 w-max sm:h-9" alt="GlowGuru">
      </a>
      <div class="flex md:order-2 ">
        <a href=" <?php echo URLROOT;  ?>/Users/login">
          <i class="bi bi-person-circle transition duration-300 hover:text-white  "></i>
        </a>
        <!--button burgger -->
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!--menu-->
      <div class="items-center justify-between hidden w-full md:flex md:w-auto " id="navbar-sticky">
        <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  dark:bg-gray-800  ">
          <li>
            <a href="#cursole" class="block font-bold py-2 pl-3 pr-4 text-white bg-white rounded md:bg-transparent md:text-black md:p-0 dark:text-black transition duration-300 hover:text-white" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#items" class="block font-bold py-2 pl-3 pr-4 text-white bg-white rounded md:bg-transparent md:text-black md:p-0 dark:text-black transition duration-300 hover:text-white" aria-current="page">Items</a>
          </li>
          <li>
            <a href="#conatct" class="block font-bold py-2 pl-3 pr-4 text-white bg-white rounded md:bg-transparent md:text-black md:p-0 dark:text-black transition duration-300 hover:text-white" aria-current="page">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!--  end navbar-->

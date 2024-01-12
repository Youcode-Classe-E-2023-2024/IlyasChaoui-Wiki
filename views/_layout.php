<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tw-elements@1.1.0/dist/css/tw-elements.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= ucfirst($page) ?></title>
</head>
<body>

<?php if((isset($_GET["page"]) && $_GET["page"] !== "authentication") || empty($_GET["page"])) { ?>

    <nav class="relative mx-10 mb-32 rounded-b-2xl px-4 py-4 flex justify-between items-center bg-white">
        <a class="text-3xl font-bold leading-none" href="../index.php">
            <img src="./assets/img/Group%201.png" alt="" width="100">
        </a>
        <form>
            <div class=" hidden md:flex w-full" style="width: 600px; height: 40px">
                <label for="search-dropdown" class="mb-2 text-xl font-medium text-gray-900 sr-only dark:text-white">Your
                    Email</label>
                <select name="" id=""
                        class="w-fit border-1 bg-gray-300 pl-4 font-bold uppercase rounded-l-2xl text-xl p-1 ">
                    <option value="">test</option>
                    <option value="">tes2</option>
                    <option value="">test3</option>
                </select>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown" style="height: 40px"
                           class="block p-2.5 w-full z-20 text-2xl text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                           placeholder="Search Mockups, Logos, Design Templates..." required>
                    <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="w-10 sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>


        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>

        <!----------- connected -------------->

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

        <?php if (isset($userData)) { ?>
            <div class="flex">
                <div id="connected" x-data="{ open: false }"
                     class="bg-white rounded-full relative w-64 h-16 mr-5 hidden lg:block shadow flex left-[10%] justify-center items-center">
                    <div @click="open = !open" class="relative  border-b-4 border-transparent py-3"
                         :class="{'border-indigo-700 transform transition duration-300 ': open}"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100">
                        <div class="flex justify-center items-center space-x-3 cursor-pointer">
                            <div class="w-12 h-12 rounded-full mr-5 overflow-hidden border-2 dark:border-white border-gray-900">
                                <img src="./assets/img/<?= $userData["picture"] ?>" alt=""
                                     class="w-full h-full object-cover"/>';
                            </div>
                            <div class="font-semibold dark:text-white text-gray-900 text-2xl">
                                <div class="cursor-pointer"><?= $userData["username"] ?></div>
                            </div>
                        </div>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="absolute w-60 px-5 py-3 dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5">
                            <ul class="space-y-3 dark:text-dark">
                                <li class="font-medium">
                                    <a href="../pages/User-Profile.php"
                                       class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                        <div class="mr-3">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                </path>
                                            </svg>
                                        </div>
                                        Account
                                    </a>
                                </li>
                                <li class="font-medium">
                                    <a href="index.php?page=wiki"
                                       class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                        <div class="mr-3">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                        Mes annonces
                                    </a>
                                </li>
                                <hr class="dark:border-gray-700">
                                <li class="font-medium">
                                    <form action="index.php?page=home" method="POST">
                                        <a
                                                class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                            <div class="mr-3 text-red-600">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                    </path>
                                                </svg>
                                            </div>
                                            <button type="submit" name="logout">Logout</button>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button id="addWikiBtn" data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                        class="hidden bg-red-300 hover:bg-red-500 text-white text-2xl font-bold py-3 px-6 rounded-full shadow-lg hover:text-white shadow-white transform transition-all duration-500 ease-in-out hover:scale-110 hover:brightness-110 hover:animate-pulse active:animate-bounce"
                        type="button">
                    Add wiki
                </button>
                <!-- Main modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true"
                     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 max-h-full" style="width: 400px">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Create New Wiki
                                </h3>
                                <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form action="index.php?page=home" method="post" class="p-4 md:p-5">
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <div class="col-span-2">
                                        <label for="name"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                        <input type="text" name="title" id="name"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                               placeholder="Type product name" required="">
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="price"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
                                        <select name="tag[]"
                                                data-te-select-init
                                                data-te-select-placeholder="Select tags"
                                                multiple>
                                            <?php foreach ($tags as $tag) { ?>
                                                <option value="<?= $tag["tag_id"] ?>"><?= $tag["tag"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1">
                                        <label for="category"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                                        <select id="category" name="category"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?= $category["category_id"] ?>"><?= $category["category"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="description"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                                            Description</label>
                                        <textarea id="description" name="description" rows="4"
                                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                  placeholder="Write product description here"></textarea>
                                    </div>
                                </div>
                                <button type="submit" name="create_wiki"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                    Add new product
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!------------ not connected -------------->
        <?php } ?>
        <div id="notConnected" class="hidden md:block">
            <a href="index.php?page=authentication">
                <button class="animated-button">
                    <span>Se connecter</span>
                    <span></span>
                </button>
            </a>
        </div>

        <?php if (isset($_SESSION["login"])) { ?>
            <script>
                $("#notConnected").hide();
                $("#connected").show();
            </script>
        <?php } ?>

        <?php if (isset($_GET["page"]) && $_GET["page"] == "home" ) { ?>
            <script>
                $("#addWikiBtn").show();
            </script>
        <?php } ?>

    </nav>
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex flex-col  items-center mb-8 ">
                <a class="mr-auto  mb-6 text-3xl font-bold leading-none" href="#">
                    <a class="text-3xl font-bold leading-none" href="#">
                        <img src="./assets/img/Group%201.png" alt="" width="100">
                    </a>
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col" style="width: 200px; height: 30px">
                <label for="search-dropdown" class="mb-2 text-xl font-medium text-gray-900 sr-only dark:text-white">Your
                    Email</label>
                <select name="" id=""
                        class="w-fit mb-4 border-1 bg-gray-300 pl-4 font-bold uppercase rounded-xl text-xl p-1 ">
                    <option value="">test</option>
                    <option value="">tes2</option>
                    <option value="">test3</option>
                </select>

                <div class="relative w-full">
                    <input type="search" id="search-dropdown" style="height: 40px"
                           class="block p-2.5 w-full z-20 text-2xl text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                           placeholder="Search Mockups, Logos, Design Templates..." required>
                    <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="w-10 sr-only">Search</span>
                    </button>
                </div>
            </div>
            <div class="mt-auto">
                <div class="flex justify-center">
                    <a href="index.php?page=authentication">
                        <button class="animated-button">
                            <span>Se connecter</span>
                            <span></span>
                        </button>
                    </a>
                </div>
                <p class="my-4 mt-96 text-xs text-center text-gray-400">
                    <span>Copyright © 2021</span>
                </p>
            </div>
        </nav>
    </div>

<?php } ?>


<main>
    <?php include_once 'views/' . $page . '_view.php'; ?>
</main>

<?php if((isset($_GET["page"]) && $_GET["page"] !== "authentication") || empty($_GET["page"])) { ?>

    <footer>
        <div class="footerBoxes">

            <div class="footerBox">
                <h3>LOREM IPSUM</h3>
                <hr>
                <p>
                    Sed ut perspiciatis unde omnis
                    iste natus voluptatem fringilla
                    tempor dignissim at, pretium et arcu.
                    Sed ut perspiciatis unde omnis iste
                    tempor dignissim at, pretium et arcu
                    natus voluptatem fringilla.
                </p>
            </div>

            <div class="footerBox">
                <h3>LOREM IPSUM</h3>
                <hr>
                <p>
                    Sed ut perspiciatis unde omnis
                    iste natus voluptatem fringilla
                    tempor dignissim at, pretium et arcu.
                    Sed ut perspiciatis unde omnis iste
                    tempor dignissim at, pretium et arcu
                    natus voluptatem fringilla.
                </p>
            </div>

            <div class="footerBox">
                <h3>LOREM IPSUM</h3>
                <hr>
                <p>
                    Sed ut perspiciatis unde omnis
                    iste natus voluptatem fringilla
                    tempor dignissim at, pretium et arcu.
                    Sed ut perspiciatis unde omnis iste
                    tempor dignissim at, pretium et arcu
                    natus voluptatem fringilla.
                </p>
            </div>

        </div>
        <hr class="splitter">
        <p class="copy-right">©2021 Blog Template | Mohammad Reza Ebrahimi</p>
    </footer>

<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/tw-elements@1.1.0/dist/js/tw-elements.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
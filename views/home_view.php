<link rel="stylesheet" href="<?= PATH ?>assets/css/home.css">

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

    <?php if(isset($userData)) { ?>
    <div id="notConnected" x-data="{ open: false }"
         class="bg-white rounded-full relative w-64 h-14 hidden lg:block shadow flex left-[10%] justify-center items-center">
        <div @click="open = !open" class="relative  border-b-4 border-transparent py-3"
             :class="{'border-indigo-700 transform transition duration-300 ': open}"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="transform opacity-100 scale-100">
            <div class="flex justify-center items-center space-x-3 cursor-pointer">
                <div class="w-10 h-10 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                    <img src="./assets/img/<?= $userData["picture"] ?>" alt="" class="w-full h-full object-cover"/>';
                </div>
                <div class="font-semibold dark:text-white text-gray-900 text-lg">
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
                        <a href="../pages/my_article.php"
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
    <!------------ not connected -------------->
    <?php } ?>
    <div id="connected" class="hidden md:block">
        <a href="index.php?page=authentication">
            <button class="animated-button">
                <span>Se connecter</span>
                <span></span>
            </button>
        </a>
    </div>

    <?php if (isset($_SESSION["login"])) { ?>
        <script>
            $("#connected").hide();
            $("#notConnected").show();
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

<div class="container">

    <header>

        <section class="slider">
            <img src="assets/images/top-image.jpg" alt="Slider Image" loading="lazy">
            <div class="content">
                <h2>The Backpacker</h2>
                <p>Jobs fill your pockets, adventures fill your soul.</p>
            </div>
        </section>

    </header>

    <div class="services">

        <div class="service">
            <img src="assets/images/services/icon1.png" alt="Who I am Icon" loading="lazy">
            <h3>Who I am</h3>
            <p>
                Lorem ipsum dolor sit amet,
                cons ecte tur adipi scing elit,
                sed do eius mod tempor inci didunt
                ut labore et dolore magna aliqua.
            </p>
        </div>

        <div class="service">
            <img src="assets/images/services/icon2.png" alt="Why I Write Icon" loading="lazy">
            <h3>Why I Write</h3>
            <p>
                Lorem ipsum dolor sit amet,
                cons ecte tur adipi scing elit,
                sed do eius mod tempor inci didunt
                ut labore et dolore magna aliqua.
            </p>
        </div>

        <div class="service">
            <img src="assets/images/services/icon3.png" alt="What I Do Icon" loading="lazy">
            <h3>What I Do</h3>
            <p>
                Lorem ipsum dolor sit amet,
                cons ecte tur adipi scing elit,
                sed do eius mod tempor inci didunt
                ut labore et dolore magna aliqua.
            </p>
        </div>

    </div>

    <div class="main-content">

        <div class="blog" id="Blog">

            <article class="posts">

                <div class="post">
                    <div class="post-image">
                        <img src="assets/images/posts/post-1.png" alt="How to Ace Your Life Image" loading="lazy">
                    </div>
                    <div class="post-content">
                        <a class="post-title">How to Ace Your Life</a>
                        <p class="post-info">Posted on January 31, 2020 by superbthemes</p>
                        <p class="post-summary">
                            Etiam placerat velit vitae duiblandit sollicitudin.
                            Vestibulum tincidunt sed dolor sit amet volutpat.
                            Nullam egestas sem at mollis sodales.
                            Nunc eget lacinia eros, ut tincidunt nunc.
                            Quisque volutpat, enim id volutpat interdum,
                            purus odio euismod neque, sit amet faucibus…
                        </p>
                    </div>
                    <div class="post-read-more">
                        <span>+</span>
                    </div>
                </div>

                <div class="post">
                    <div class="post-image">
                        <img src="assets/images/posts/post-2.png" alt="The Joys Of Being A Morning Person Image"
                             loading="lazy">
                    </div>
                    <div class="post-content">
                        <a class="post-title">The Joys Of Being A Morning Person</a>
                        <p class="post-info">Posted on January 24, 2020 by superbthemes</p>
                        <p class="post-summary">
                            Etiam placerat velit vitae dui blandit sollicitudin.
                            Vestibulum tincidunt sed dolor sit amet volutpat.
                            Nullam egestas sem at mollis sodales.
                            Nunc eget lacinia eros, ut tincidunt nunc.
                            Quisque volutpat, enim id volutpat interdum,
                            purus odio euismod neque, sit amet faucibus…
                        </p>
                    </div>
                    <div class="post-read-more">
                        <span>+</span>
                    </div>
                </div>

                <div class="post">
                    <div class="post-image">
                        <img src="assets/images/posts/post-3.png" alt="Travelling with Strangers Image" loading="lazy">
                    </div>
                    <div class="post-content">
                        <a class="post-title">Travelling with Strangers</a>
                        <p class="post-info">Posted on January 22, 2020 by superbthemes</p>
                        <p class="post-summary">
                            Etiam placerat velit vitae duiblandit sollicitudin.
                            Vestibulum tincidunt sed dolor sit amet volutpat.
                            Nullam egestas sem at mollis sodales.
                            Nunc eget lacinia eros, ut tincidunt nunc.
                            Quisque volutpat, enim id volutpat interdum,
                            purus odio euismod neque, sit amet faucibus…
                        </p>
                    </div>
                    <div class="post-read-more">
                        <span>+</span>
                    </div>
                </div>

                <div class="post">
                    <div class="post-image">
                        <img src="assets/images/posts/post-4.png" alt="What I’ve learned from road trips Image"
                             loading="lazy">
                    </div>
                    <div class="post-content">
                        <a class="post-title">What I’ve learned from road trips</a>
                        <p class="post-info">Posted on January 22, 2020 by superbthemes</p>
                        <p class="post-summary">
                            Etiam placerat velit vitae duiblandit sollicitudin.
                            Vestibulum tincidunt sed dolor sit amet volutpat.
                            Nullam egestas sem at mollis sodales.
                            Nunc eget lacinia eros, ut tincidunt nunc.
                            Quisque volutpat, enim id volutpat interdum,
                            purus odio euismod neque, sit amet faucibus…
                        </p>
                    </div>
                    <div class="post-read-more">
                        <span>+</span>
                    </div>
                </div>

                <div class="post">
                    <div class="post-image">
                        <img src="assets/images/posts/post-5.png" alt="Why Long Walks Will Change Your Life Image"
                             loading="lazy">
                    </div>
                    <div class="post-content">
                        <a class="post-title">Why Long Walks Will Change Your Life</a>
                        <p class="post-info">Posted on December 16, 2019 by superbthemes</p>
                        <p class="post-summary">
                            Etiam placerat velit vitae duiblandit sollicitudin.
                            Vestibulum tincidunt sed dolor sit amet volutpat.
                            Nullam egestas sem at mollis sodales.
                            Nunc eget lacinia eros, ut tincidunt nunc.
                            Quisque volutpat, enim id volutpat interdum,
                            purus odio euismod neque, sit amet faucibus…
                        </p>
                    </div>
                    <div class="post-read-more">
                        <span>+</span>
                    </div>
                </div>

            </article>

            <div class="pagination-blog">
                <div class="active">1</div>
                <div>2</div>
                <div>NEXT</div>
            </div>

        </div>

        <div class="sidebar">

            <div class="popular-posts-side">
                <h2>POPULAR POSTS</h2>
                <div class="popular-posts">
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-1.png" alt="How to Ace Your Life Image" loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">How to Ace Your Life</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-2.png" alt="The Joys Of Being A Morning Person Image"
                                 loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">The Joys Of Being A …</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-3.png" alt="Travelling with Strangers Image"
                                 loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">Travelling with Stra…</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-4.png" alt="What I’ve learned from road trips Image"
                                 loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">What I’ve learned fr…</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="popular-post-image">
                            <img src="assets/images/posts/post-4.png" alt="Why Long Walks Will Change Your Life Image"
                                 loading="lazy">
                        </div>
                        <div class="popular-post-content">
                            <a href="#" class="popular-post-title">Why Long Walks Will …</a>
                            <p class="popular-post-desc">
                                Etiam placerat velit vitae dui blandit sollicitudin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="archives-side">
                <h2>ARCHIVES</h2>
                <div class="archive-box"><a href="#">January 2020</a></div>
                <div class="archive-box"><a href="#">December 2019</a></div>
                <div class="archive-box"><a href="#">September 2019</a></div>
                <div class="archive-box"><a href="#">June 2019</a></div>
            </div>

            <div class="social-side">
                <h2>LETS GET SOCIAL!</h2>
                <div>
                    <a href="#"><img src="assets/images/social/twitter.png" alt="Twitter Logo" loading="lazy"></a>
                    <a href="#"><img src="assets/images/social/facebook.png" alt="Facebook Logo" loading="lazy"></a>
                    <a href="#"><img src="assets/images/social/pinterest.png" alt="Pinterest Logo" loading="lazy"></a>
                    <a href="#"><img src="assets/images/social/linkedin.png" alt="Linkedin Logo" loading="lazy"></a>
                </div>
            </div>

            <div class="advertisement-side">
                <h2>ADVERTISEMENT</h2>
                <div class="my-advertisement-box">
                    <p>Banner Ad 300x300</p>
                </div>
            </div>

        </div>

    </div>

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

</div>

<script src="<?= PATH ?>assets/js/home.js"></script>
<link rel="stylesheet" href="./assets/css/style.css">


<div
        class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white bg-gray-700 text-white">

    <!-- Header -->
    <div class="fixed w-full flex items-center  justify-between h-14 text-white z-10">
        <div
                class="flex items-center justify-start md:justify-center pl-3 z-20 w-14 md:w-64 h-28 bg-gray-900 border-none">
        </div>
        <div class="flex items-center mt-6 h-20 bg-gray-800 header-right">
            <!-- component -->
            <div class=' mx-auto'>
                <div class="relative flex items-center h-12 rounded-lg focus-within:shadow-lg bg-white overflow-hidden"
                     style="width: 600px">
                    <div class="grid place-items-center h-full w-12 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>

                    <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text"
                           id="search"
                           placeholder="Search something.."/>
                </div>
            </div>
            <ul class="flex items-center justify-between">
                <li>
                    <div class="block w-px h-6 mx-3 bg-gray-700"></div>
                </li>
                <li>
                    <form action="index.php?page=dashboard" method="POST">
                        <a href="#" class="flex items-center mr-4 hover:text-blue-100">
                                <span class="inline-flex mr-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </span>
                            <button type="submit" name="logout">Logout</button>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- ./Header -->

    <!-- Sidebar -->
    <div
            class="fixed flex flex-col mt-6 top-14 left-0 w-14 hover:w-64 md:w-64 bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
            <ul class="flex flex-col z-0 py-4 space-y-1">
                <li class="px-5 hidden md:block">
                    <div class="flex mt-6 mb-6 flex-row items-center justify-center h-8">
                        <div class="text-sm font-light  tracking-wide text-gray-400 uppercase">Main</div>
                    </div>
                </li>
                <li>
                    <a id="dashboard"
                       class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                        </path>
                                    </svg>
                                </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a id="user"
                       class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                        </path>
                                    </svg>
                                </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Tags</span>
                        <span
                                class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                    </a>
                </li>
                <li>
                    <a id="product"
                       class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"/>
                                    </svg>

                                </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Category</span>
                    </a>
                </li>
                <li class="px-5 hidden md:block">
                    <div class="flex mb-6 flex-row items-center justify-center mt-5 h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Profile</div>
                    </div>
                </li>
                <div class="space-y-6 hidden md:block">
                    <div class="flex flex-col items-center gap-x-2">
                        <img class="object-cover w-16 h-16 rounded-lg"
                             src="./assets/img/<?= $userData["picture"] ?>"
                             alt="">
                        <div class="flex flex-col items-center justify-center">
                            <h1 class="text-xl font-semibold  capitalize text-white"><?= $userData["username"] ?></h1>
                            <p class="text-base text-gray-400"><?= $userData["email"] ?></p>
                        </div>
                    </div>
                </div>

            </ul>
            <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
        </div>
    </div>
    <!-- ./Sidebar -->

    <div class=" h-full ml-14 mt-14 mb-10 md:ml-64">

        <!-- Statistics Cards -->
        <div id="dashboard_section">
            <h2 class="font-bold text-center ml-4 mt-10">Dashboard</h2>
            <div class="grid grid-cols-1 mt-10 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4" style="margin-left: 430px">
                <div
                        class="bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-600 text-white font-medium group">
                    <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p id="user-count" class="text-2xl">557</p>
                        <p>Tags</p>
                    </div>
                </div>
                <div
                        class="bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-gray-600 text-white font-medium group">
                    <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="stroke-current text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="text-right">
                        <p id="product-count" class="text-2xl">257</p>
                        <p>Categories</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="mt-5 bg-gray-900 text-gray-800" style="width: 600px;">
                    <div class="shadow-lg p-4" id="chart"></div>
                </div>
            </div>
        </div>

        <!-- tag Table -->
        <div id="user_section" class=" mt-4 mx-4">
            <h2 class="font-bold mt-10 text-center mb-10">All tags</h2>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                            class="block mb-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                        Add tag
                    </button>


                    <!-- Main modal -->
                    <div id="formsContainer" class="flex flex-col"
                         style="display: flex;flex-direction: column;gap: 20px;">
                        <div id="crud-modal" tabindex="-1" aria-hidden="true"
                             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative  p-4 w-full max-w-md max-h-full">
                                <!-- Modal content -->
                                <div class="relative rounded-lg shadow bg-gray-700">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
                                        <h3 class="text-lg font-semibold text-white">
                                            Create New Tag
                                        </h3>
                                        <button type="button" id="close"
                                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-toggle="crud-modal">
                                            <svg class="w-3 h-3" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <form id="productForm"
                                          class="user-form p-4 md:p-5">
                                        <div id="Parent_form" class="flex flex-col">
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="name"
                                                           class="block mb-2 text-sm font-medium text-white">Tag
                                                        name</label>
                                                    <input type="text" name="tag" id="tag-input"
                                                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                           placeholder="Type product name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <button id="addTagBtn" type="submit" name="add_tag"
                                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor"
                                                     viewBox="0 0 20 20"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                Add New Tag
                                            </button>
                                            <hr>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- component -->
                    <!-- This is an example component -->
                    <div class="max-w-2xl mx-auto">

                        <div class="flex flex-col">
                            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden ">
                                        <table class="min-w-full divide-y divide-gray-200 table-fixed divide-gray-700">
                                            <thead class="bg-gray-700">
                                            <tr>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs text-center bg-gray-500 font-medium tracking-wider text-left uppercase text-gray-400">
                                                    Tag id
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs text-center bg-gray-500 font-medium tracking-wider text-left uppercase text-gray-400">
                                                    Tag Name
                                                </th>
                                                <th scope="col"
                                                    class="py-3 px-6 text-xs text-center bg-gray-500 font-medium tracking-wider text-left uppercase text-gray-400">
                                                    Operations
                                                </th>
                                                <th scope="col" class="p-4 ">
                                                    <span class="sr-only">Delete</span>
                                                </th>

                                                <th scope="col" class="p-4">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                            </tr>
                                            </thead>

                                            <?php foreach ($tags as $tag) { ?>
                                                <tbody id="tag-section" class="divide-y bg-gray-800 divide-gray-700">
                                                <td class="py-4 px-6 text-sm text-center font-medium whitespace-nowrap text-white">
                                                    <?= $tag["tag_id"] ?>
                                                </td>
                                                <td class="py-4 px-6 text-sm text-center font-medium whitespace-nowrap text-white">
                                                    <?= $tag["tag"] ?>
                                                </td>
                                                <td class="py-4 px-6 text-sm flex justify-center font-medium text-right whitespace-nowrap">
                                                    <button data-tag-id=" <?= $tag["tag"] ?>" name="deleteTag"
                                                            data-modal-target="popup-modal"
                                                            data-modal-toggle="popup-modal"
                                                            class="delete-tag block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800"
                                                            type="button">
                                                        Delete
                                                    </button>
                                                    <button data-tag-id=" <?= $tag["tag_id"] ?>"
                                                            data-tag-name=" <?= $tag["tag"] ?>"
                                                            data-modal-target="select-modal"
                                                            data-modal-toggle="select-modal"
                                                            class="editBtn block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                            type="button">
                                                        Edit
                                                    </button>
                                                </td>
                                                </tbody>
                                                <div id="select-modal" tabindex="-1" aria-hidden="true"
                                                     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                                        <!-- Modal content -->
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <!-- Modal header -->
                                                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                    Edit Tag
                                                                </h3>
                                                                <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        data-modal-toggle="select-modal">
                                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                                         xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                         viewBox="0 0 14 14">
                                                                        <path stroke="currentColor"
                                                                              stroke-linecap="round"
                                                                              stroke-linejoin="round" stroke-width="2"
                                                                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                            </div>
                                                            <!-- Modal body -->
                                                            <form action="index.php?page=dashboard&add_tag=true"
                                                                  method="post" id="productForm"
                                                                  class="user-form p-4 md:p-5">
                                                                <div id="Parent_form" class="flex flex-col">
                                                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                                                        <div class="col-span-2">
                                                                            <label for="name"
                                                                                   class="block mb-2 text-sm font-medium text-white">Tag
                                                                                name</label>
                                                                            <input type="hidden" name="tag_id"
                                                                                   id="editTagId" value="">
                                                                            <input type="text" name="tag" id="editInput"
                                                                                   value=""
                                                                                   class="input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                                   placeholder="Type product name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="flex flex-row justify-between">
                                                                    <button id="addTagBtn" type="submit" name="editTag"
                                                                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                        <svg class="me-1 -ms-1 w-5 h-5"
                                                                             fill="currentColor"
                                                                             viewBox="0 0 20 20"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                                                  clip-rule="evenodd"></path>
                                                                        </svg>
                                                                        Edit Tag
                                                                    </button>
                                                                    <hr>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="popup-modal" tabindex="-1"
                                                     class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <button type="button" id="modal_body"
                                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                    data-modal-hide="popup-modal">
                                                                <svg class="w-3 h-3" aria-hidden="true"
                                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 14 14">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                          stroke-linejoin="round" stroke-width="2"
                                                                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                            <div class="p-4 md:p-5  text-center">
                                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                                     aria-hidden="true"
                                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                     viewBox="0 0 20 20">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                          stroke-linejoin="round" stroke-width="2"
                                                                          d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                                </svg>
                                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                    Are you sure you want to
                                                                    delete this product?</h3>

                                                                <a href="index.php?page=dashboard&add_tag=true&tag_id=<?= $tag['tag_id'] ?>">
                                                                    <button
                                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                                        Yes, I'm sure
                                                                    </button>
                                                                </a>

                                                                <button data-modal-hide="popup-modal" type="button"
                                                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                    No, cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tag Table -->
        <!-- category Table -->
        <div id="product_section" class=" mt-4 mx-4">
            <h2 class="font-bold mt-10 text-center mb-10">All categories</h2>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">


                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                            class="block text-white mb-5 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800"
                            type="button">
                        Add category
                    </button>

                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative rounded-lg shadow bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-600">
                                    <h3 class="text-xl font-semibold text-white">
                                        Add New Category
                                    </h3>
                                    <button type="button"
                                            class="end-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center hover:bg-gray-600 hover:text-white"
                                            data-modal-hide="authentication-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                             fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="2"
                                                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form id="productForm" class="user-form p-4 md:p-5">
                                    <div id="Parent_form" class="flex flex-col">
                                        <div class="grid gap-4 mb-4 grid-cols-2">
                                            <div class="col-span-2">
                                                <label for="name"
                                                       class="block mb-2 text-sm font-medium text-white">Name</label>
                                                <input type="text" name="full_name" id="category-input"
                                                       class=" text-sm rounded-lg block w-full p-2.5 bg-gray-600 border-gray-500 placeholder-gray-400 text-white focus:ring-primary-500 focus:border-primary-500"
                                                       placeholder="Type product name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row justify-between">
                                        <button id="addCategoryBtn" type="button"
                                                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor"
                                                 viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            Add New Category
                                        </button>
                                        <hr>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <table class="w-full">
                        <thead class="bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3 px-6 text-xs text-center bg-gray-500 font-medium tracking-wider text-left uppercase text-gray-400">
                                Category id
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs text-center bg-gray-500 font-medium tracking-wider text-left uppercase text-gray-400">
                                Category Name
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs text-center bg-gray-500 font-medium tracking-wider text-left uppercase text-gray-400">
                                Operations
                            </th>
                            <th scope="col" class="p-4 ">
                                <span class="sr-only">Delete</span>
                            </th>

                            <th scope="col" class="p-4">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <?php foreach ($categories as $category) { ?>
                            <tbody id="tag-section" class="divide-y bg-gray-800 divide-gray-700">
                            <td class="py-4 px-6 text-sm text-center font-medium whitespace-nowrap text-white">
                                <?= $category["category_id"] ?>
                            </td>
                            <td class="py-4 px-6 text-sm text-center font-medium whitespace-nowrap text-white">
                                <?= $category["category"] ?>
                            </td>
                            <td class="py-4 px-6 text-sm flex justify-center font-medium text-right whitespace-nowrap">
                                <input type="hidden" value="<?= $category["category_id"] ?>">
                                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-blue-800"
                                        type="button">
                                    Delete
                                </button>
                                <button data-modal-target="progress-modal" data-modal-toggle="progress-modal"
                                        data-category-id=" <?= $category["category_id"] ?>"
                                        data-category-name=" <?= $category["category"] ?>"
                                        class="categoryEditBtn block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="button">
                                    Edit
                                </button>
                            </td>
                            </tbody>
                            <div id="progress-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <form action="index.php?page=dashboard&edit_category=true"
                                          method="post" id="productForm"
                                          class="user-form p-4 md:p-5">
                                        <div id="Parent_form" class="flex flex-col">
                                            <div class="grid gap-4 mb-4 grid-cols-2">
                                                <div class="col-span-2">
                                                    <label for="name"
                                                           class="block mb-2 text-sm font-medium text-white">Tag
                                                        name</label>
                                                    <input type="hidden" name="category_id"
                                                           id="editCategoryId" value="">
                                                    <input type="text" name="category" id="categoryEditInput"
                                                           value=""
                                                           class="category-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                           placeholder="Type product name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row justify-between">
                                            <button id="addCategoryBtn" type="submit" name="editCategory"
                                                    class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                <svg class="me-1 -ms-1 w-5 h-5"
                                                     fill="currentColor"
                                                     viewBox="0 0 20 20"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                Edit category
                                            </button>
                                            <hr>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="default-modal" tabindex="-1" aria-hidden="true"
                                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Terms of Service
                                            </h3>
                                            <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="default-modal">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                          stroke-linejoin="round" stroke-width="2"
                                                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5  text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                 aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                Are you sure you want to
                                                delete this product?</h3>

                                            <a href="index.php?page=dashboard&add_tag=true&category_id=<?= $category['category_id'] ?>">
                                                <button
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                                    Yes, I'm sure
                                                </button>
                                            </a>

                                            <button data-modal-hide="popup-modal" type="button"
                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                No, cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- category Table -->

        <!-- Contact Form -->
        <div class="hidden mt-8 mx-4">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6 mr-2 bg-gray-100 bg-gray-800 sm:rounded-lg">
                    <h1
                            class="text-4xl sm:text-5xl text-gray-800 text-white font-extrabold tracking-tight">
                        Get
                        in touch</h1>
                    <p
                            class="text-normal text-lg sm:text-2xl font-medium text-gray-400 mt-2">
                        Fill in the form to submit any query</p>

                    <div class="flex items-center mt-8 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">Dhaka, Street, State, Postal
                            Code
                        </div>
                    </div>

                    <div class="flex items-center mt-4 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">+880 1234567890</div>
                    </div>

                    <div class="flex items-center mt-4 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">info@demo.com</div>
                    </div>
                </div>
                <form class="p-6 flex flex-col justify-center">
                    <div class="flex flex-col">
                        <label for="name" class="hidden">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Full Name"
                               class="w-100 mt-2 py-3 px-3 rounded-lg bg-gray-800 border border-gray-700 text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"/>
                    </div>

                    <div class="flex flex-col mt-2">
                        <label for="email" class="hidden">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email"
                               class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"/>
                    </div>

                    <div class="flex flex-col mt-2">
                        <label for="tel" class="hidden">Number</label>
                        <input type="tel" name="tel" id="tel" placeholder="Telephone Number"
                               class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none"/>
                    </div>

                    <button type="submit"
                            class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">
                        Submit
                    </button>
                </form>
            </div>
        </div>
        <!-- ./Contact Form -->

        <!-- External resources -->
        <div class="hidden mt-8 mx-4">
            <div
                    class="p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <h4 class="text-lg font-semibold">Have taken ideas & reused components from the following
                    resources:
                </h4>
                <ul>
                    <li class="mt-3">
                        <a class="flex items-center text-blue-700 dark:text-gray-100"
                           href="https://tailwindcomponents.com/component/sidebar-navigation-1"
                           target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Sidebar Navigation</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-blue-700 dark:text-gray-100"
                           href="https://tailwindcomponents.com/component/contact-form-1" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Contact Form</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-blue-700 dark:text-gray-100"
                           href="https://tailwindcomponents.com/component/trello-panel-clone" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Section: Task Summaries</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-blue-700 dark:text-gray-100"
                           href="https://windmill-dashboard.vercel.app/" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Section: Client Table</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-blue-700 dark:text-gray-100"
                           href="https://demos.creative-tim.com/notus-js/pages/admin/dashboard.html"
                           target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Section: Social Traffic</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-blue-700 dark:text-gray-100"
                           href="https://mosaic.cruip.com" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Section: Recent Activities</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./External resources -->
    </div>
</div>
<script src="./assets/js/dashboard.js"></script>
<?php if (isset($_GET["add_tag"])) { ?>
    <script>
        document.getElementById("dashboard_section").classList.add("hidden");
        document.getElementById("user_section").classList.remove("hidden");
        document.getElementById("product_section").classList.add("hidden");
    </script>
<?php } ?>

<?php if (isset($_GET["add_category"])) { ?>
    <script>
        document.getElementById("dashboard_section").classList.add("hidden");
        document.getElementById("user_section").classList.add("hidden");
        document.getElementById("product_section").classList.remove("hidden");
    </script>
<?php } ?>



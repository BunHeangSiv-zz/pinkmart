
<link rel="stylesheet" href="../../assets/style.css">
<!-- component -->
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
        <!-- Header -->
        <?php include '../../includes/header.php'; ?>
        <!-- ./Header -->

        <!-- Sidebar -->
        <?php include '../../includes/sidebar.php'; ?>
        <!-- ./Sidebar -->

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
        <div class="contanner">
        <div class="p-2 text-center grid gap-x-1 gap-y-1 grid-cols-12 border border-transparent">
            <a href="Create.php"
                class="mt-4 col-span-4 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
                New Staff</a>
        </div>
        <!-- overflow-x-auto shadow-md -->
        <div class="relative  shadow-md sm:rounded-lg flex justify-between m-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Password
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            sarak
                        </th>
                        <td class="px-6 py-4">
                            sarak@gmail.com
                        </td>
                        <td class="px-6 py-4">
                            0987237839
                        </td>
                        <td class="px-6 py-4">
                            1111
                        </td>
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4 ">
                            <div class="text-left ">
                                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                                    class=" px-6 py-1 text-center inline-flex items-center " type="button"><i
                                        class="material-icons py-1" style="font-size:16px;">more_horiz</i>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdown"
                                    class=" overflow-x-auto shadow-md z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-28 dark:bg-gray-700">
                                    <ul class="text-sm text-black dark:text-gray-200"
                                        aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="Edit.php"
                                                class="block px-4 py-2 hover:bg-pink-300 dark:hover:bg-pink-300 dark:hover:text-white"><i
                                                    class="material-icons" style="font-size:16px;">edit</i> Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="block px-4 py-2 hover:bg-pink-300 dark:hover:bg-pink-300 dark:hover:text-white"><i
                                                    class="material-icons" style="font-size:16px;">delete</i> Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <!-- ./External resources -->
        </div>
    </div>
</div>
<!-- change the color script -->
<script src="../../assets/home.js"></script>
<!-- end -->
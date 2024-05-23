<?php
    include("../../connection/conect.php");
    $sql_sex = "SELECT * FROM tblsex";
    $result_sex = mysqli_query($conn, $sql_sex);
?>
<link rel="stylesheet" href="../../assets/style.css">
<!-- component -->
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div
        class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
        <!-- Header -->
        <?php include '../../includes/header.php'; ?>
        <!-- ./Header -->

        <!-- Sidebar -->
        <?php include '../../includes/sidebar.php'; ?>
        <!-- ./Sidebar -->

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
            <div class="max-w-6xl mx-auto bg-white p-5 rounded-lg shadow-xl">
                <!-- header -->
                <h1 class="text-xl font-bold text-pink-400">Add Staff Information</h1>
                <div class="border-b border-1 border-pink-400 my-3"></div>
                <form class="w-full">
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div>
                            <label for="txtname" class="block text-lg font-medium leading-6 text-pink-400">Customer's
                                Name</label>
                            <div class="mt-2">
                                <input type="text" id="txtname" name="txtname" autocomplete="off"
                                    class="block w-full  border pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-lg sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="products" class="block text-lg font-medium leading-6 text-pink-400">Customer's
                                Sex</label>
                            <div class="mt-2">
                                <select id="sexid" name="sexid"
                                    class="block w-full  border pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-lg sm:leading-6"
                                    required>
                                    <?php
            while ($row = mysqli_fetch_assoc($result_sex)) {
                echo "<option value='{$row['sexid']}'>{$row['sexen']}</option>";
            }
            ?>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="txtaddress" class="block text-lg font-medium leading-6 text-pink-400">Customer's
                                Address</label>
                            <div class="mt-2">
                                <input type="text" id="txtaddress" name="txtaddress" autocomplete="off"
                                    class="block w-full  border pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-lg sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="txtphone" class="block text-lg font-medium leading-6 text-pink-400">Phone
                                Number</label>
                            <div class="mt-2">
                                <input type="text" id="txtphone" name="txtphone" autocomplete="off"
                                    class="block  w-full  border pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-lg sm:leading-6">
                            </div>
                        </div>
                    </div>
                    <div class="space-x-2">
                        <button type="submit"
                            class="reset-button bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4">
                            Submit
                        </button>
                        <a href="#"
                            class="inline-block bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 text-center no-underline hover:no-underline">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
            <!-- ./External resources -->
        </div>
    </div>
</div>
<!-- change the color script -->
<script src="../../assets/home.js"></script>
<!-- end -->
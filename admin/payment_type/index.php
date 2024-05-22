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

        <!-- ./External resources -->
        </div>
    </div>
</div>
<!-- change the color script -->
<script src="../../assets/home.js"></script>
<!-- end -->
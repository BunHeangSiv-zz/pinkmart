<link href="/dist/tailwind.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
<span id="toggle" class="absolute text-white text-2xl top-15 left-0 cursor-pointer" onclick="openSidebar()">
    <i class="bi bi-filter-left px-1 bg-pink-200 hover:bg-pink-500 rounded-md lg:hidden"></i>
</span>
<aside class="sidebar h-screen flex flex-col top-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-pink-200">
    <div class="inline-block text-gray-100 text-xl">
        <div class="inline-block p-2.5 mt-1 flex items-center">
            <img src="https://logos-world.net/wp-content/uploads/2023/04/Hello-Kitty-Logo.png" class="w-20 mb-2" alt="">
            <h1 class="inline-block font-bold text-[15px] mr-3 text-pink-600 transition-opacity duration-300">Pink Mart</h1>
            <!-- <i class="bi bi-x cursor-pointer ml-auto lg:hidden" onclick="openSidebar()"></i> -->
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
    </div>
    <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-pink-400 hover:bg-pink-600 text-gray-500 hover:text-white">
        <i class="bi bi-search text-sm"></i>
        <input type="text" placeholder="Search" class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
    </div>
    <a href="/admin/home.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Dashboard</span>
    </a>
    <a href="/admin/suppliers/index.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Suppliers</span>
    </a>
    <a href="/admin/customers/index.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Customers</span>
    </a>
    <a href="/admin/stock_in/index.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Stock</span>
    </a>
    <a href="/admin/Order/index.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Orders</span>
    </a>
    <a href="/admin/payments/index.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Payment</span>
    </a>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white" onclick="dropdown()">
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
            <span class="text-[15px] ml-4 font-bold">Employees</span>
            <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
            </span>
        </div>
    </div>
    <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-500 hover:text-white font-bold hidden" id="submenu">
    <ul class="desplegable ml-4">
                    <li>
                        <a href="/admin/employees/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                            Staffs
                        </a>
                    </li>
                    <li>
                        <a href="/admin/Permission/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                            Staff Permission
                        </a>
                    </li>
                </ul>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Bookmark</span>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Home</span>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-gray-500 hover:text-white">
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 font-bold">Bookmark</span>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-pink-500 text-white">
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-500 hover:text-white font-bold">Logout</span>
    </div>
</aside>

<script type="text/javascript">
    function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();

    function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
    }
</script>

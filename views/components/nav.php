<header class="bg-white shadow-md p-4 sticky top-0 z-10">
    <div class="max-w-7xl mx-auto flex justify-between items-center relative">
        <!-- Hamburger Menu Button for Mobile -->
        <button id="menu-btn" class="md:hidden text-gray-500 hover:text-gray-700 focus:outline-none p-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <?php
        $currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        ?>

        <nav class="md:bg-gray-100 md:rounded-full md:px-6 md:py-2 md:flex md:space-x-6 bg-gray-100 rounded-lg px-4 py-2 absolute md:static top-14 left-0 w-full md:w-auto transition-all duration-300 ease-in-out nav-closed z-40" id="nav-menu">
            <a href="/" class="block py-2 md:inline-block md:py-0 <?= $currentUri === '/' ? 'text-blue-500' : 'text-gray-700 hover:text-blue-500' ?>">Home</a>
            <a href="/about" class="block py-2 md:inline-block md:py-0 <?= $currentUri === '/about' ? 'text-blue-500' : 'text-gray-700 hover:text-blue-500' ?>">About</a>
            <a href="/articles" class="block py-2 md:inline-block md:py-0 <?= $currentUri === '/articles' ? 'text-blue-500' : 'text-gray-700 hover:text-blue-500' ?>">Articles</a>
            <a href="/projects" class="block py-2 md:inline-block md:py-0 <?= $currentUri === '/projects' ? 'text-blue-500' : 'text-gray-700 hover:text-blue-500' ?>">Projects</a>
            <a href="/posts" class="block py-2 md:inline-block md:py-0 <?= $currentUri === '/posts' ? 'text-blue-500' : 'text-gray-700 hover:text-blue-500' ?>">Post</a>
        </nav>

        <!-- Icons and Auth Buttons -->
        <div class="flex space-x-2 items-center md:absolute md:right-0">
            <!-- Profile Picture -->
            <button class="bg-gray-100 rounded-full p-1 text-gray-500 hover:text-gray-700 focus:outline-none">
                <img src="/images/pp.jpg" alt="Profile Picture" class="w-7 h-7 object-cover rounded-full">
            </button>

            <!-- Auth Buttons -->
            <?php if (!isset($_SESSION['user'])): ?>
                <a href="/login" class="text-gray-700 hover:text-blue-600 text-sm font-medium px-3 py-1 border border-gray-300 rounded hover:border-blue-600 transition">Login</a>
                <a href="/register" class="bg-blue-600 text-white text-sm font-medium px-3 py-1 rounded hover:bg-blue-700 transition">Register</a>
            <?php else: ?>
                <span class="text-sm font-semibold text-blue-600 px-3 py-1 bg-blue-50 rounded-full">
                    <?= htmlspecialchars($_SESSION['user']['email']) ?>
                </span>
                <a href="/logout" class="text-sm font-medium text-red-600 hover:text-red-800 px-3 py-1 border border-red-300 rounded hover:border-red-500 transition">Logout</a>
            <?php endif; ?>
        </div>
    </div>
</header>
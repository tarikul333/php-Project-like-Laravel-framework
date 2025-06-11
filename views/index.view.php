<?php
require 'components/header.php';
require 'components/nav.php';
?>

<main class="flex-1 max-w-7xl mx-auto px-4 py-6 sm:py-8 md:py-12">
    <!-- Hero Section -->
    <section class="text-center mb-10 sm:mb-12 md:mb-16 fade-in delay-1">
        <img src="images/pp.jpg" alt="Tarikul Islam" class="w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 rounded-full mx-auto mb-4 profile-animation">
        <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">Diploma Student in Power Engineering</h1>
        <p class="text-gray-600 mt-2 sm:mt-3 md:mt-4 max-w-2xl mx-auto text-sm sm:text-base md:text-lg">
            I’m Tarikul Islam, a diploma student in Power Engineering based in Chirirbandor, Dinajpur. I am passionate about learning and exploring the field of power engineering.
        </p>
        <div class="flex justify-center space-x-4 mt-4 sm:mt-6 md:mt-8">
            <a href="#" class="text-gray-500 hover:text-blue-500 hover-scale"><i class="fab fa-twitter text-lg sm:text-xl md:text-2xl"></i></a>
            <a href="#" class="text-gray-500 hover:text-blue-500 hover-scale"><i class="fab fa-instagram text-lg sm:text-xl md:text-2xl"></i></a>
            <a href="#" class="text-gray-500 hover:text-blue-500 hover-scale"><i class="fab fa-facebook text-lg sm:text-xl md:text-2xl"></i></a>
            <a href="#" class="text-gray-500 hover:text-blue-500 hover-scale"><i class="fab fa-linkedin text-lg sm:text-xl md:text-2xl"></i></a>
        </div>
    </section>

    <!-- About Web Developer Section -->
    <section class="mb-10 sm:mb-12 md:mb-16 fade-in delay-2">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-6 sm:mb-8 md:mb-10">About Web Developer</h2>
        <div class="max-w-3xl mx-auto text-center text-sm sm:text-base md:text-lg">
            <p class="mb-4 sm:mb-6 md:mb-8">
                In addition to my studies in Power Engineering, I am an aspiring web developer with a growing skill set. I have been learning and practicing:
            </p>
            <ul class="list-disc list-inside text-left max-w-2xl mx-auto mb-4 sm:mb-6 md:mb-8">
                <li class="mb-2">HTML - Building the structure of web pages.</li>
                <li class="mb-2">CSS - Styling and designing responsive layouts.</li>
                <li class="mb-2">PHP - Developing dynamic server-side applications.</li>
                <li class="mb-2">Laravel - Creating robust web applications with this PHP framework.</li>
                <li class="mb-2">Vue.js - Crafting interactive front-end interfaces.</li>
            </ul>
            <p>
                I’m self-learning these technologies, with 7 months of experience on the Ostad platform, and I’m excited to apply my skills to real-world projects!
            </p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="mb-10 sm:mb-12 md:mb-16 fade-in delay-3">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-6 sm:mb-8 md:mb-10">My Gallery</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <div class="article-card bg-gray-200 h-40 sm:h-48 md:h-56 rounded-lg bg-cover bg-center fade-in-up delay-1" style="background-image: url('https://via.placeholder.com/300x200');"></div>
            <div class="article-card bg-gray-200 h-40 sm:h-48 md:h-56 rounded-lg bg-cover bg-center fade-in-up delay-2" style="background-image: url('https://via.placeholder.com/300x200');"></div>
            <div class="article-card bg-gray-200 h-40 sm:h-48 md:h-56 rounded-lg bg-cover bg-center fade-in-up delay-3" style="background-image: url('https://via.placeholder.com/300x200');"></div>
        </div>
    </section>

    <!-- Sidebar Section -->
    <aside class="md:sticky md:top-24 mb-8 md:mb-0 fade-in delay-4">
        <div class="bg-white p-4 sm:p-6 md:p-8 rounded-lg shadow-md">
            <div class="flex items-center mb-4 sm:mb-6 md:mb-8">
                <img src="images/pp.jpg" alt="Tarikul Islam" class="w-12 sm:w-16 md:w-20 h-12 sm:h-16 md:h-20 rounded-full mr-4 profile-animation">
                <div>
                    <h2 class="text-lg sm:text-xl md:text-2xl font-semibold">Tarikul Islam</h2>
                    <p class="text-gray-600 text-sm sm:text-base md:text-lg">Diploma Student in Power Engineering</p>
                </div>
            </div>
            <p class="text-gray-700 text-sm sm:text-base md:text-lg mb-4 sm:mb-6 md:mb-8">
                I’m Tarikul Islam, a diploma student in Power Engineering based in Chirirbandor, Dinajpur. I am passionate about learning and exploring the field of power engineering.
            </p>
            <div class="flex justify-center space-x-4 mb-4 sm:mb-6 md:mb-8">
                <a href="#" class="text-gray-500 hover:text-blue-500 hover-scale"><i class="fab fa-twitter text-lg sm:text-xl md:text-2xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-blue-500 hover-scale"><i class="fab fa-instagram text-lg sm:text-xl md:text-2xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-blue-500 hover-scale"><i class="fab fa-facebook text-lg sm:text-xl md:text-2xl"></i></a>
                <a href="#" class="text-gray-500 hover:text-blue-500 hover-scale"><i class="fab fa-linkedin text-lg sm:text-xl md:text-2xl"></i></a>
            </div>
            <div class="flex justify-center space-x-2">
                <button class="bg-gray-200 text-gray-700 px-3 sm:px-4 py-1 sm:py-2 rounded-full hover:bg-gray-300 hover-scale">Menu</button>
                <button class="text-gray-500 hover:text-gray-700 focus:outline-none hover-scale">
                    <svg class="w-5 sm:w-6 md:w-7 h-5 sm:h-6 md:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 14v1m-6-6h1m14-6h1m-6 10h1m-6-10h-1m10 6h-1m-6-10v14m6-6h-1"></path>
                    </svg>
                </button>
            </div>
        </div>
    </aside>
</main>

<?php
require 'components/footer.php';
?>
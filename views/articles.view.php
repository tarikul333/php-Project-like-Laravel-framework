<?php
    require 'components/header.php';
    require 'components/nav.php';
?>

<!-- Main Content (Loaded via Router) -->
<header class="bg-white shadow-md p-4 sticky top-0 z-10">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">Md. Tarikul Islam - Articles</h1>
        <nav class="flex space-x-4">
            <a href="#articles" class="text-gray-700 hover:text-blue-500">Articles</a>
            <a href="/about" class="text-gray-700 hover:text-blue-500">About</a>
        </nav>
    </div>
</header>

<!-- Articles Section -->
<section class="py-12" id="articles">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">My Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Article 1 -->
            <div class="article-card bg-white p-6 rounded-lg shadow-md fade-in-up delay-1">
                <h3 class="text-xl font-semibold mb-2">Introduction to Power Engineering</h3>
                <p class="text-gray-600 mb-4">Explore the basics of power engineering, my journey at Dinajpur Polytechnic Institute, and how it shapes my career goals.</p>
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
            </div>
            <!-- Article 2 -->
            <div class="article-card bg-white p-6 rounded-lg shadow-md fade-in-up delay-2">
                <h3 class="text-xl font-semibold mb-2">My 7-Month Journey with PHP & Laravel</h3>
                <p class="text-gray-600 mb-4">A personal account of learning PHP, Laravel, and Vue.js through the Ostad platform, including key projects and challenges.</p>
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
            </div>
            <!-- Article 3 -->
            <div class="article-card bg-white p-6 rounded-lg shadow-md fade-in-up delay-3">
                <h3 class="text-xl font-semibold mb-2">Tips for Self-Learning Programming</h3>
                <p class="text-gray-600 mb-4">Insights from my 1.5 years of self-learning, including resources like Ostad and practical advice for beginners.</p>
                <a href="#" class="text-blue-500 hover:underline">Read More</a>
            </div>
        </div>
    </div>
</section>

<?php
    require 'components/footer.php';
?>
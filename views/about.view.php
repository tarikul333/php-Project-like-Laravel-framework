<?php
    require 'components/header.php';
    require 'components/nav.php';
?>
<!-- Header -->
<header class="bg-white shadow-md p-4 sticky top-0 z-03">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">Md. Tarikul Islam</h1>
        
        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden block text-gray-700">
            ☰
        </button>

        <!-- Navigation Menu -->
        <nav id="menu" class="hidden md:flex space-x-4">
            <a href="#about" class="text-gray-700 hover:text-blue-500">About</a>
            <a href="#education" class="text-gray-700 hover:text-blue-500">Education</a>
            <a href="#experience" class="text-gray-700 hover:text-blue-500">Experience</a>
            <a href="#skills" class="text-gray-700 hover:text-blue-500">Skills</a>
        </nav>
    </div>
</header>

<!-- Mobile Menu JavaScript -->
<script>
    document.getElementById('menuBtn').addEventListener('click', function() {
        let menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
</script>

<!-- Hero Section -->
<section class="bg-blue-500 text-white py-16 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold mb-4">Md. Tarikul Islam</h1>
        <p class="text-lg md:text-xl">Power Engineering Diploma | PHP & Laravel Enthusiast</p>
        <img src="images/pp.jpg" alt="Profile Picture" class="w-24 h-24 md:w-32 md:h-32 rounded-full mx-auto mt-4">
    </div>
</section>

<!-- Personal Information -->
<section class="py-10 px-4 md:px-0">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">Personal Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <p><strong>Name:</strong> Md. Tarikul Islam</p>
                <p><strong>Date of Birth:</strong> 02-Sep-2002</p>
                <p><strong>Current Address:</strong> Dinajpur, Bangladesh</p>
            </div>
            <div>
                <p><strong>Phone:</strong> +8801571315309</p>
                <p><strong>Email:</strong> tariqulislam8652@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<!-- Education -->
<section class="bg-gray-100 py-10 px-4 md:px-0" id="education">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">Education</h2>
        <div class="mb-6">
            <h3 class="text-xl font-semibold">Diploma in Engineering (Power Technology)</h3>
            <p>Dinajpur Polytechnic Institute</p>
            <p>CGPA: 3.33 (out of 4) | Passing Year: 2022</p>
        </div>
        <div>
            <h3 class="text-xl font-semibold">Secondary School Certificate (SSC)</h3>
            <p>Jagannathpur High School</p>
            <p>GPA: 4.56 (out of 5) | Session: 2016-2017</p>
        </div>
    </div>
</section>

<!-- Learning -->
<section class="bg-gray-100 py-10 px-4 md:px-0" id="skills">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">My Path to Web Development</h2>
        <ul class="list-disc list-inside">
            <li><b>Technologies:</b> HTMl & CSS</li>
            <li><b>Learning Duration:</b> 2-3 months</li>
            <li>
                <b>Source:</b> <br>
                <li class="pl-10 hover:underline hover:text-blue-600 text-blue-800" ><a href="https://www.youtube.com/watch?v=HcOc7P5BMi4"><b>HTML : </b>https://www.youtube.com/watch?v=HcOc7P5BMi4</a></li>
                <li class="pl-10 hover:underline hover:text-blue-600 text-blue-800" ><a href="https://www.youtube.com/watch?v=ESnrn1kAD4E"><b>CSS : </b>https://www.youtube.com/watch?v=ESnrn1kAD4E</a></li>
            </li>
        </ul>
        <ul class="list-disc list-inside mt-6">
            <li><b>Technologies:</b> PHP</li>
            <li><b>Learning Duration:</b> 6-7 months</li>
            <li>
                <b>Source:</b> <br>
                <li class="pl-10 hover:underline hover:text-blue-600 text-blue-800" ><a href="https://www.youtube.com/watch?v=gphBeDNGOuA"><b>Coding Kalakar : </b>https://www.youtube.com/watch?v=gphBeDNGOuA</a></li>
                <li class="pl-10 hover:underline hover:text-blue-600 text-blue-800" ><a href="https://www.youtube.com/watch?v=m52ljs78S24&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih"><b>Dani Krossing : </b>https://www.youtube.com/watch?v=m52ljs78S24&list=PL0eyrZgxdwhwwQQZA79OzYwl5ewA7HQih</a></li>
                <li class="pl-10 hover:underline hover:text-blue-600 text-blue-800" ><a href="https://www.youtube.com/watch?v=xx0kxaPRbFc"><b>Coding Kalakar(OOP) : </b>https://www.youtube.com/watch?v=xx0kxaPRbFc</a></li>
                <li class="pl-10 hover:underline hover:text-blue-600 text-blue-800" ><a href="https://www.youtube.com/watch?v=fw5ObX8P6as&t=15415s"><b>Laracasts(jeffrey way) : </b>https://www.youtube.com/watch?v=fw5ObX8P6as&t=15415s</a></li>
            </li>
        </ul>
        <ul class="list-disc list-inside mt-6">
            <li><b>Technologies:</b> PHP, Laravel, and Vue.js</li>
            <li><b>Learning Duration:</b> 7 months</li>
            <li>
                <b>Source:</b>
                <li class="pl-10 hover:underline hover:text-blue-600 text-blue-800"><a href="https://ostad.app/" class="text-blue-800 hover:underline hover:text-blue-600">Ostad platform</a> </li>
            </li>
        </ul>
        <ul class="list-disc list-inside mt-6">
            <li><b>Technologies:</b> Laravel</li>
            <li><b>Learning Duration:</b> 1-2 months</li>
            <li>
                <b>Source:</b> <br>
                <li class="pl-10 hover:underline hover:text-blue-600 text-blue-800" ><a href="https://www.youtube.com/watch?v=SqTdHCTWqks&t=1726s"><b>Laracasts(jeffrey way) : </b>https://www.youtube.com/watch?v=SqTdHCTWqks&t=1726s</a></li>
            </li>
        </ul>
    </div>
</section>

<!-- Work Experience -->
<section class="py-10 px-4 md:px-0" id="experience">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">Work Experience</h2>
        <div>
            <h3 class="text-xl font-semibold">Office Assistant, Abedin Group, Dhaka</h3>
            <p>Duration: One year</p>
            <p>Proficient in Microsoft Office (Word, Excel, PowerPoint)</p>
        </div>
    </div>
</section>

<!-- Skills -->
<section class="bg-gray-100 py-10 px-4 md:px-0" id="skills">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">Skills</h2>
        <ul class="list-disc list-inside">
            <li>HTML & CSS</li>
            <li>PHP</li>
            <li>Laravel</li>
            <li>Vue.js</li>
            <li>Microsoft Office (Word, Excel, PowerPoint)</li>
        </ul>
    </div>
</section>

<?php
    require 'components/footer.php';
?>

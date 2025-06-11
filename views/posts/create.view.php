<?php require basePath('views/components/header.php'); ?>
<?php require basePath('views/components/nav.php'); ?>

<main class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Create a New Post</h2>
    <form action="/post/store" method="POST" class="space-y-4">
        <input type="text" name="user_name" placeholder="Your Name" class="w-full px-4 py-2 border rounded" required>

        <input type="text" name="title" placeholder="Post Title" class="w-full px-4 py-2 border rounded" required>

        <textarea name="body" rows="6" placeholder="Write your post here..." class="w-full px-4 py-2 border rounded" required></textarea>

        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
            Publish Post
        </button>
    </form>
</main>

<?php require basePath('views/components/footer.php'); ?>

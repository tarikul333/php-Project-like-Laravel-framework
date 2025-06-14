<?php
session_start();
require basePath('views/components/header.php');
require basePath('views/components/nav.php');
?>

<main class="max-w-4xl mx-auto mt-10 space-y-6">
    <div class="flex items-center justify-between mb-4">
        <h1 class="text-3xl font-bold">All Posts</h1>
        <a href="/post/create" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Create New Post
        </a>
    </div>

    <?php foreach ($posts as $post): ?>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold text-blue-700"><?= htmlspecialchars($post['title']) ?></h2>
            <p class="text-gray-600 text-sm">By <?= htmlspecialchars($post['user_name']) ?> on <?= $post['created_at'] ?></p>
            <p class="mt-3 text-gray-800"><?= nl2br(htmlspecialchars($post['body'])) ?></p>

            <!-- Comment form -->
            <div class="mt-4">
                <form method="POST" action="/comment/store">
                    <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                    <textarea name="comment" placeholder="Write a comment..." class="border p-2 rounded w-full mb-2" rows="2" required></textarea>
                    <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Submit Comment</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</main>

<?php require basePath('views/components/footer.php'); ?>


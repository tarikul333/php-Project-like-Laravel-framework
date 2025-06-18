<?php
require basePath('views/components/header.php');
require basePath('views/components/nav.php');
?>
<main class="max-w-2xl mx-auto my-24 bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Create a New Post</h2>
    <form method="POST" action="/post/store" class="space-y-4">
        <div>
            <label class="block text-sm font-medium">Title</label>
            <input type="text" name="title" class="border p-2 w-full rounded" value="<?= htmlspecialchars($old['title'] ?? '') ?>">
            <?php if (!empty($errors['title'])): ?>
                <p class="text-red-500 text-sm"><?= $errors['title'] ?></p>
            <?php endif; ?>
        </div>

        <div>
            <label class="block text-sm font-medium">Body</label>
            <textarea name="body" class="border p-2 w-full rounded"><?= htmlspecialchars($old['body'] ?? '') ?></textarea>
            <?php if (!empty($errors['body'])): ?>
                <p class="text-red-500 text-sm"><?= $errors['body'] ?></p>
            <?php endif; ?>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
    </form>
</main>

<?php require basePath('views/components/footer.php'); ?>
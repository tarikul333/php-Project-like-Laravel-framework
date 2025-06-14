<?php
session_start();
require basePath('views/components/header.php');
require basePath('views/components/nav.php');
?>

<main class="bg-gray-100 flex mt-2 items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md mx-auto">
        <h1 class="text-2xl font-bold text-center mb-6">Create Account</h1>

        <?php if (!empty($_SESSION['success'])): ?>
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4 text-center">
                <?= $_SESSION['success'];
                unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

        <form action="/register" method="POST" class="space-y-5">
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email"
                    name="email"
                    id="email"
                    value="<?= htmlspecialchars($old['email'] ?? '') ?>"
                    class="w-full border px-3 py-2 rounded <?= isset($errors['email']) ? 'border-red-500' : '' ?>">

                <?php if (isset($errors['email'])): ?>
                    <p class="text-red-600 text-sm mt-1"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password"
                        name="password"
                        id="password"
                        class="w-full border px-3 py-2 rounded <?= isset($errors['password']) ? 'border-red-500' : '' ?>">

                    <button type="button" onclick="togglePassword('password', this)"
                        class="absolute inset-y-0 right-3 px-2 text-sm font-medium text-blue-600 hover:text-blue-800 focus:outline-none">
                        Show
                    </button>
                </div>

                <?php if (isset($errors['password'])): ?>
                    <p class="text-red-600 text-sm mt-1"><?= $errors['password'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <div class="relative">
                    <input type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="w-full border px-3 py-2 rounded <?= isset($errors['password_confirmation']) ? 'border-red-500' : '' ?>">
                    
                        <button type="button" onclick="togglePassword('password_confirmation', this)"
                        class="absolute inset-y-0 right-3 px-2 text-sm font-medium text-blue-600 hover:text-blue-800 focus:outline-none">
                        Show
                    </button>
                </div>

                <?php if (isset($errors['password_confirmation'])): ?>
                    <p class="text-red-600 text-sm mt-1"><?= $errors['password_confirmation'] ?></p>
                <?php endif; ?>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-200">
                Register
            </button>
        </form>
    </div>
</main>

<script>
    function togglePassword(id, btn) {
        const input = document.getElementById(id);
        if (input.type === "password") {
            input.type = "text";
            btn.textContent = "Hide";
            btn.classList.add("text-red-600");
            btn.classList.remove("text-blue-600");
        } else {
            input.type = "password";
            btn.textContent = "Show";
            btn.classList.add("text-blue-600");
            btn.classList.remove("text-red-600");
        }
    }
</script>

<?php require basePath('views/components/footer.php'); ?>
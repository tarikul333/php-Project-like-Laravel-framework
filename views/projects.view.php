<?php
require 'components/header.php';
require 'components/nav.php';

// Function to fetch GitHub repositories
function fetchGitHubRepos($username) {
    $url = "https://api.github.com/users/{$username}/repos";
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'); // GitHub API requires a user agent
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200) {
        return [];
    }
    
    $repos = json_decode($response, true);
    return is_array($repos) ? $repos : [];
}

// Fetch your repositories
$githubUsername = 'tarikul333';
$repos = fetchGitHubRepos($githubUsername);
?>

<!-- Projects Section -->
<main class="flex-1 max-w-7xl mx-auto px-4 py-6 sm:py-8 md:py-12">
    <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-4 sm:mb-6 md:mb-8 fade-in delay-1">My Projects</h1>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">

        <!-- Dynamically Added GitHub Projects -->
        <?php if (!empty($repos)): ?>
            <?php
            $delayCounter = 5; // Start delay after manually defined projects
            foreach ($repos as $repo):
                // Skip if the repo is a fork or has no description (optional)
                if ($repo['fork'] || empty($repo['description'])) continue;
                $delayClass = "delay-" . ($delayCounter % 4 == 0 ? 4 : $delayCounter % 4); // Cycle through delay-1 to delay-4
                $delayCounter++;
            ?>
                <div class="article-card bg-white p-4 sm:p-5 md:p-6 rounded-lg shadow-md fade-in-up <?php echo $delayClass; ?>">
                    <h2 class="text-lg sm:text-xl md:text-2xl font-semibold mb-2 sm:mb-3 md:mb-4"><?php echo htmlspecialchars($repo['name']); ?></h2>
                    <p class="text-sm sm:text-base md:text-lg text-gray-600 mb-3 sm:mb-4 md:mb-4">
                        <?php echo htmlspecialchars($repo['description'] ?: 'No description available.'); ?>
                    </p>
                    <a href="<?php echo htmlspecialchars($repo['html_url']); ?>" target="_blank" rel="noopener noreferrer" class="text-blue-500 hover:underline text-sm sm:text-base">View on GitHub</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-span-full text-center text-gray-600 text-sm sm:text-base md:text-lg">Unable to fetch GitHub projects at this time. Please check back later.</div>
        <?php endif; ?>
    </div>
</main>

<?php
require 'components/footer.php';
?>
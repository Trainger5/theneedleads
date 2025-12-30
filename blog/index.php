<?php
// Load blog config (API base + blog base path)
$cfg = require __DIR__ . '/include/config.php';

// Tell shared header/footer where to find main /assets and page links from /blog
$assetBase = '../';
$linkBase = '../';

// Basic page title for the main header include
$page_title = 'Blog';
require __DIR__ . '/../include/header.php';
?>

<!-- Blog-specific styles (layout for cards/grid) -->
<link rel="stylesheet" href="<?php echo htmlspecialchars($cfg['basePath'] . 'assets/css/style.css', ENT_QUOTES); ?>">

<div class="blog-container">
  <h1>Latest Blogs</h1>
  <div class="card-grid" id="blogList"></div>

  <div class="load-more-wrap">
    <button id="loadMoreBtn" class="load-more-btn">Load More</button>
  </div>
</div>

<script>
  // Pass config to the blog JS so it knows where to load data from
  window.__BLOG_CONFIG = {
    apiBase: <?php echo json_encode($cfg['apiBase']); ?>,
    basePath: <?php echo json_encode($cfg['basePath']); ?>,
  };
</script>
<script src="<?php echo $cfg['basePath']; ?>assets/js/blogList.js" defer></script>

<?php require __DIR__ . '/../include/footer.php'; ?>

<?php
// Load shared blog config (API base + blog base path)
$cfg = require __DIR__ . '/include/config.php';
$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';

// Page/meta setup for the main header
$page_title = $slug ? ('Blog - ' . $slug) : 'Blog Post';
$meta_title = $page_title;

// From /blog/{slug}, make header/footer assets and links point back to site root
$assetBase = '../';
$linkBase  = '../';

require __DIR__ . '/../include/header.php';
?>

<!-- Blog-specific styles (layout/content for single post) -->
<link rel="stylesheet" href="<?php echo htmlspecialchars($cfg['basePath'] . 'assets/css/style.css', ENT_QUOTES); ?>">

<script>
  // Share config + current slug with the blog JS
  window.__BLOG_CONFIG = {
    apiBase: <?php echo json_encode($cfg['apiBase']); ?>,
    basePath: <?php echo json_encode($cfg['basePath']); ?>,
  };
  window.__BLOG_SLUG = <?php echo json_encode($slug); ?>;
</script>

<div class="blog-container" style="margin-top:20px;">
  <?php echo '<a class="back-link" href="' . htmlspecialchars($cfg['basePath']) . '">&larr; Back to Blog</a>'; ?>
</div>

<div class="blog-layout">
  <div class="blog-full" id="blogContent"></div>

  <aside class="blog-sidebar">
    <h3 class="sidebar-title">Latest Blogs</h3>
    <div id="latestBlogs" class="latest-list"></div>
  </aside>
</div>

<script src="<?php echo $cfg['basePath']; ?>assets/js/blog.js" defer></script>

<?php require __DIR__ . '/../include/footer.php'; ?>

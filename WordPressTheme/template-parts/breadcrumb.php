<nav class="breadcrumb breadcrumb--position <?php echo is_404() ? 'error-page' : ''; ?>">
  <div class="breadcrumb__inner inner">
    <?php if (!is_front_page() || is_404()) { ?>
      <?php if (function_exists('bcn_display')) { ?>
        <div id="breadcrumb" class="w_inner" vocab="http://schema.org/" typeof="BreadcrumbList">
          <?php bcn_display(); ?>
        </div>
      <?php } ?>
    <?php } ?>
  </div>
</nav>

    
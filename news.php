<?php include 'includes/header.php'; ?>

<section class="pt-32 pb-20 bg-white dark:bg-body min-h-screen">
  <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-white mb-10">Update Seru</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php for($i=1; $i<=6; $i++): ?>
      <div class="w-full relative rounded-2xl overflow-hidden shadow-lg shadow-box-shadow border border-box-border group">
        <img
          src="images/sidebiew.webp"
          alt="News cover"
          class="w-full aspect-video object-cover rounded-t-2xl transition duration-300 group-hover:scale-105"
        />
        <div class="p-5 bg-box-bg rounded-b-2xl">
          <p class="text-sm text-primary mb-2">Technology • <?php echo date('M d, Y'); ?></p>
          <h2 class="text-gray-800 dark:text-white font-semibold text-lg md:text-xl line-clamp-2 mb-4">
            How Sintesa Corp is revolutionizing the industry with new IT Solutions
          </h2>
          <a href="news-detail.php" class="inline-flex items-center text-primary hover:underline font-medium">
            Baca Artikel
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
          </a>
        </div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

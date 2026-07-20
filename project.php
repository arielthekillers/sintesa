<?php include 'includes/header.php'; ?>

<section class="pt-32 pb-20 bg-white dark:bg-body min-h-screen">
  <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-white mb-10">Karya Kita</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php 
        $projects = ['Event Organizer', 'Information Technology', 'Desain Arsitektur', 'Information Technology', 'Event Organizer', 'Desain Arsitektur'];
        foreach($projects as $index => $category): 
      ?>
      <div class="w-full relative rounded-2xl overflow-hidden shadow-lg shadow-box-shadow border border-box-border group">
        <img
          src="images/podCast.webp"
          alt="Project cover"
          class="w-full aspect-square object-cover rounded-2xl transition duration-300 group-hover:scale-105"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent opacity-80"></div>
        <div class="absolute bottom-0 left-0 w-full p-6">
          <span class="px-3 py-1 bg-primary text-white text-xs font-bold rounded-full mb-3 inline-block">
            <?php echo $category; ?>
          </span>
          <h2 class="text-white font-bold text-xl md:text-2xl mb-2">
            Project Title <?php echo $index + 1; ?>
          </h2>
          <a href="project-detail.php" class="inline-flex items-center text-gray-300 hover:text-white font-medium text-sm">
            Lihat Detail
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

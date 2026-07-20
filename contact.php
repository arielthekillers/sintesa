<?php include 'includes/header.php'; ?>

<section class="pt-32 pb-20 bg-white dark:bg-body min-h-screen">
  <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg mx-auto">
    <div class="text-center mb-16">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-800 dark:text-white mb-6">Contact Us</h1>
      <p class="text-gray-600 dark:text-gray-300 max-w-2xl mx-auto text-lg">
        Ready to start your next big project? Whether it's an event, an IT infrastructure upgrade, or a new architectural design, we'd love to hear from you.
      </p>
    </div>
    
    <div class="grid md:grid-cols-2 gap-12">
      <!-- Contact Info -->
      <div class="space-y-8">
        <div class="flex items-start">
          <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
          </div>
          <div class="ml-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-1">Kantor Kami</h3>
            <p class="text-gray-600 dark:text-gray-300">Jl. Sultan Syahrir No.58 RT.18, Kel. Tanjung Laut Indah<br />Kec. Bontang Selatan, Bontang, Kalimantan Timur</p>
          </div>
        </div>
        
        <div class="flex items-start">
          <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
          </div>
          <div class="ml-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-1">Email Kami</h3>
            <p class="text-gray-600 dark:text-gray-300">sintesacorporation@gmail.com<br />&nbsp;</p>
          </div>
        </div>
        
        <div class="flex items-start">
          <div class="flex-shrink-0 w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
          </div>
          <div class="ml-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-1">Call Us</h3>
            <p class="text-gray-600 dark:text-gray-300">+1 (555) 123-4567<br />Mon-Fri 9am to 6pm</p>
          </div>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="bg-box-bg rounded-2xl p-8 shadow-lg shadow-box-shadow border border-box-border">
        <form action="#" method="POST" class="space-y-6">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Full Name</label>
            <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-box-border bg-white dark:bg-body text-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary transition" placeholder="John Doe">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
            <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-box-border bg-white dark:bg-body text-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary transition" placeholder="john@example.com">
          </div>
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Your Message</label>
            <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-box-border bg-white dark:bg-body text-gray-800 dark:text-gray-200 focus:outline-none focus:border-primary transition" placeholder="How can we help you?"></textarea>
          </div>
          <button type="button" class="w-full py-3 px-6 text-white bg-primary rounded-lg hover:bg-primary/90 transition font-medium text-lg">
            Send Message
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

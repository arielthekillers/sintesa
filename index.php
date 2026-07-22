<?php
session_start();
$cta_message = "";

if (isset($_SESSION['cta_message'])) {
    $cta_message = $_SESSION['cta_message'];
    unset($_SESSION['cta_message']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_cta'])) {
    // Honeypot sederhana untuk menangkal spam (bot biasanya akan mengisi field tersembunyi ini)
    if (empty($_POST['website_url'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Karena tidak menggunakan database, email disimpan dalam file teks
            $file = fopen("subscribers.txt", "a");
            fwrite($file, $email . " - " . date("Y-m-d H:i:s") . "\n");
            fclose($file);
        }
    }
    $_SESSION['cta_message'] = "Terima kasih! Tim kami akan segera menghubungi Anda.";
    header("Location: index.php#cta-section");
    exit();
}
?>
<?php include 'includes/header.php'; ?>
        <!--[--><!--[-->
        <div>
          <!-- Hero Section -->
          <section class="relative w-full">

            <div
              class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto relative"
            >
              <div
                aria-hidden="true"
                class="absolute inset-y-0 w-44 left-0 hidden dark:flex"
              >
                <div
                  class="h-full md:h-1/2 lg:h-full w-full bg-gradient-to-tr opacity-40 dark:blur-2xl dark:from-[#570cac] dark:opacity-20"
                ></div>
              </div>
              <div
                class="grid lg:grid-cols-2 gap-10 xl:gap-14 relative pt-24 lg:max-w-none max-w-2xl md:max-w-3xl mx-auto"
              >
                <div class="lg:py-6">
                  <div class="text-center lg:text-left">
                    <span
                      class="px-2 py-1 rounded-md bg-gray-100 dark:bg-body text-primary uppercase text-sm font-bold tracking-wider"
                      >Katalisator Kreativitas</span
                    >
                    <h1
                      class="text-gray-800 pt-4 dark:text-white font-bold text-4xl md:text-5xl lg:text-5xl leading-tight"
                    >
                      Wujudin Ide <br />
                      <span
                        class="text-transparent bg-clip-text bg-gradient-to-br from-primary to-[#8cd66a]"
                        >Kreatif Kamu,</span
                      >
                      Bikin Nyata!
                    </h1>
                  </div>
                  <p
                    class="text-gray-600 dark:text-gray-300 pt-8 text-center lg:text-left mx-auto max-w-xl"
                  >
                    Bontang emang kota industri, tapi kreativitas kita nggak ada batasnya! <strong>Sintesa</strong> hadir buat jadi <em>partner in crime</em> kamu dalam ngembangin ide, <em>event</em>, sampai produk kreatif yang <em>out of the box</em> buat seluruh Indonesia.
                  </p>
                  <div
                    class="flex justify-center lg:justify-start gap-3 pt-9 w-full"
                  >
                    <a
                      href="about"
                      class="px-8 md:px-10 py-3 rounded-full relative group w-max flex justify-center"
                      ><span
                        class="absolute inset-0 rounded-full group-hover:scale-105 origin-center transition-all ease-in-out bg-transparent border-2 border-primary group-hover:!bg-primary group-active:!bg-primary"
                      ></span
                      ><span
                        class="relative flex items-center justify-center text-primary group-hover:!text-white group-active:!text-white font-semibold transition-colors duration-300"
                        >Kenalan Yuk!</span
                      ></a
                    >
                  </div>
                </div>
                <div class="lg:h-full hidden md:flex">
                  <div
                    class="flex w-full h-96 min-h-[24rem] lg:min-h-[none] lg:w-full lg:h-full items-center justify-end relative gap-4 xl:gap-6"
                  >
                    <div
                      class="absolute z-0 top-1/2 -translate-y-1/2 w-5/6 right-0 h-[calc(80%+20px)] bg-gradient-to-tr opacity-25 from-primary to-pink-300 dark:from-[#570cac] dark:to-primary blur-2xl"
                    ></div>
                    
                    <!-- Gambar Kiri (Lebih pendek dan lebih ramping) -->
                    <div
                      class="relative w-[42%] h-[75%] z-20 p-1.5 rounded-3xl bg-white dark:bg-body shadow-xl border border-box-border"
                    >
                      <img
                        src="images/podCast.webp"
                        alt="Creative"
                        width="200"
                        class="w-full h-full rounded-2xl object-cover"
                      />
                    </div>
                    
                    <!-- Gambar Kanan (Lebih tinggi dan besar) -->
                    <div
                      class="relative w-[52%] h-[95%] z-10 p-1.5 rounded-3xl bg-white dark:bg-body shadow-xl border border-box-border"
                    >
                      <img
                        src="images/concentrated-young-african-american.webp"
                        alt="Bontang"
                        width="500"
                        class="w-full h-full rounded-2xl object-cover"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Fokus Produk dan Layanan -->
          <section class="pt-20 md:pt-24 relative">
            <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto">
              <div class="text-center mb-16">
                <h2 class="text-2xl md:text-3xl text-gray-800 dark:text-white font-bold uppercase tracking-widest">
                  Apa Aja Sih Yang Bisa Kita Bikin?
                </h2>
                <div class="w-24 h-1 bg-primary mx-auto mt-4 rounded-full"></div>
              </div>
                <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-6 px-5 -mx-5 scroll-px-5 [&>div]:w-[75%] [&>div]:max-w-[300px] sm:[&>div]:w-[45%] [&>div]:flex-none [&>div]:snap-start md:grid md:grid-cols-2 lg:grid-cols-4 md:overflow-visible md:pb-0 md:px-0 md:mx-0 md:scroll-px-0 md:[&>div]:w-auto md:[&>div]:max-w-none md:[&>div]:snap-align-none hide-scrollbar">
                  <!-- Service 1 -->
                <div class="bg-white dark:bg-box-bg p-8 rounded-3xl shadow-sm border border-box-border hover:shadow-2xl hover:shadow-primary/20 hover:-translate-y-3 transition-all duration-500 group relative overflow-hidden">
                  <div class="absolute -right-12 -top-12 w-40 h-40 bg-primary/10 rounded-full blur-2xl group-hover:scale-150 group-hover:bg-primary/20 transition-all duration-700"></div>
                  <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition">
                    <svg class="w-7 h-7 text-primary group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Event Organizer</h3>
                  <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Bikin event yang nggak cuma seru, tapi juga memorable dan pecah abis!
                  </p>
                </div>
                <!-- Service 2 -->
                <div class="bg-white dark:bg-box-bg p-8 rounded-3xl shadow-sm border border-box-border hover:shadow-2xl hover:shadow-[#8cd66a]/20 hover:-translate-y-3 transition-all duration-500 group relative overflow-hidden">
                  <div class="absolute -left-12 -bottom-12 w-40 h-40 bg-[#8cd66a]/10 rounded-full blur-2xl group-hover:scale-150 group-hover:bg-[#8cd66a]/20 transition-all duration-700"></div>
                  <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition">
                    <svg class="w-7 h-7 text-primary group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Design & Arch</h3>
                  <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Desain arsitektur estetik & fungsional yang bikin siapapun betah berlama-lama.
                  </p>
                </div>
                <!-- Service 3 -->
                <div class="bg-white dark:bg-box-bg p-8 rounded-3xl shadow-sm border border-box-border hover:shadow-2xl hover:shadow-blue-500/20 hover:-translate-y-3 transition-all duration-500 group relative overflow-hidden">
                  <div class="absolute -right-12 -bottom-12 w-40 h-40 bg-blue-500/10 rounded-full blur-2xl group-hover:scale-150 group-hover:bg-blue-500/20 transition-all duration-700"></div>
                  <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition">
                    <svg class="w-7 h-7 text-primary group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Information Technology</h3>
                  <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Solusi IT keren yang bikin bisnis kamu makin lincah dan nggak ketinggalan zaman.
                  </p>
                </div>
                <!-- Service 4 -->
                <div class="bg-white dark:bg-box-bg p-8 rounded-3xl shadow-sm border border-box-border hover:shadow-2xl hover:shadow-purple-500/20 hover:-translate-y-3 transition-all duration-500 group relative overflow-hidden">
                  <div class="absolute -left-12 -top-12 w-40 h-40 bg-purple-500/10 rounded-full blur-2xl group-hover:scale-150 group-hover:bg-purple-500/20 transition-all duration-700"></div>
                  <div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary transition">
                    <svg class="w-7 h-7 text-primary group-hover:text-white transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                  </div>
                  <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Digital Media</h3>
                  <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                    Konten digital yang ngena, desain kece, sampai ngelola sosmed kamu biar makin rame.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- Latest News -->
          <section class="pt-20 md:pt-24 relative">
            <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto relative">
              <div class="flex justify-between pb-6 relative">
                <div>
                  <h2 class="text-2xl md:text-3xl text-gray-800 dark:text-white font-bold">Update Seru</h2>
                </div>
                <div class="flex items-center min-w-max gap-5">
                  <a href="news" class="px-6 md:px-7 py-3 rounded-full relative group">
                    <span class="absolute inset-0 rounded-full group-hover:scale-105 origin-center transition-all ease-in-out bg-primary border-2 border-transparent"></span>
                    <span class="relative flex items-center justify-center text-white">Explore more</span>
                  </a>
                </div>
              </div>
              <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-6 px-5 -mx-5 scroll-px-5 [&>div]:w-[75%] [&>div]:max-w-[300px] sm:[&>div]:w-[45%] [&>div]:flex-none [&>div]:snap-start md:grid md:grid-cols-2 lg:grid-cols-4 md:overflow-visible md:pb-0 md:px-0 md:mx-0 md:scroll-px-0 md:[&>div]:w-auto md:[&>div]:max-w-none md:[&>div]:snap-align-none hide-scrollbar">
                <!-- News 1 -->
                <div class="relative rounded-[2rem] overflow-hidden group hover:shadow-2xl hover:shadow-primary/30 hover:-translate-y-2 transition-all duration-500 cursor-pointer">
                  <img src="images/sidebiew.webp" onerror="this.src='images/podCast.webp'" class="w-full aspect-square object-cover group-hover:scale-110 group-hover:rotate-1 transition-transform duration-700 ease-in-out" />
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                  <div class="absolute bottom-0 inset-x-0 p-5 flex flex-col justify-end h-full">
                    <h2 class="text-white font-semibold text-lg line-clamp-2 mb-3">
                      How to hack a website with Html in simple way
                    </h2>
                    <a href="news" class="flex items-center text-white rounded-full p-1 pr-3 gap-2 text-sm border border-gray-100/30 w-max hover:bg-white/10 transition">
                      <span class="p-1.5 rounded-full bg-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" /></svg></span>
                      Read article
                    </a>
                  </div>
                </div>
                <!-- News 2 -->
                <div class="relative rounded-[2rem] overflow-hidden group hover:shadow-2xl hover:shadow-[#8cd66a]/30 hover:-translate-y-2 transition-all duration-500 cursor-pointer">
                  <img src="images/podCast.webp" onerror="this.src='images/sidebiew.webp'" class="w-full aspect-square object-cover group-hover:scale-110 group-hover:-rotate-1 transition-transform duration-700 ease-in-out" />
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                  <div class="absolute bottom-0 inset-x-0 p-5 flex flex-col justify-end h-full">
                    <h2 class="text-white font-semibold text-lg line-clamp-2 mb-3">
                      5 Principales you must know for writting clear code
                    </h2>
                    <a href="news" class="flex items-center text-white rounded-full p-1 pr-3 gap-2 text-sm border border-gray-100/30 w-max hover:bg-white/10 transition">
                      <span class="p-1.5 rounded-full bg-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" /></svg></span>
                      Read article
                    </a>
                  </div>
                </div>
                <!-- News 3 -->
                <div class="relative rounded-[2rem] overflow-hidden group hover:shadow-2xl hover:shadow-blue-500/30 hover:-translate-y-2 transition-all duration-500 cursor-pointer">
                  <img src="images/sidebiew.webp" onerror="this.src='images/podCast.webp'" class="w-full aspect-square object-cover group-hover:scale-110 group-hover:rotate-1 transition-transform duration-700 ease-in-out" />
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                  <div class="absolute bottom-0 inset-x-0 p-5 flex flex-col justify-end h-full">
                    <h2 class="text-white font-semibold text-lg line-clamp-2 mb-3">
                      Make you website request secure than you could mind
                    </h2>
                    <a href="news" class="flex items-center text-white rounded-full p-1 pr-3 gap-2 text-sm border border-gray-100/30 w-max hover:bg-white/10 transition">
                      <span class="p-1.5 rounded-full bg-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" /></svg></span>
                      Read article
                    </a>
                  </div>
                </div>
                <!-- News 4 -->
                <div class="relative rounded-[2rem] overflow-hidden group hover:shadow-2xl hover:shadow-purple-500/30 hover:-translate-y-2 transition-all duration-500 cursor-pointer">
                  <img src="images/sidebiew.webp" onerror="this.src='images/podCast.webp'" class="w-full aspect-square object-cover group-hover:scale-110 group-hover:-rotate-1 transition-transform duration-700 ease-in-out" />
                  <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/60 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                  <div class="absolute bottom-0 inset-x-0 p-5 flex flex-col justify-end h-full">
                    <h2 class="text-white font-semibold text-lg line-clamp-2 mb-3">
                      How to get started with desktop developpement
                    </h2>
                    <a href="news" class="flex items-center text-white rounded-full p-1 pr-3 gap-2 text-sm border border-gray-100/30 w-max hover:bg-white/10 transition">
                      <span class="p-1.5 rounded-full bg-primary"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-3 h-3"><path fill-rule="evenodd" d="M3 10a.75.75 0 01.75-.75h10.638L10.23 5.29a.75.75 0 111.04-1.08l5.5 5.25a.75.75 0 010 1.08l-5.5 5.25a.75.75 0 11-1.04-1.08l4.158-3.96H3.75A.75.75 0 013 10z" clip-rule="evenodd" /></svg></span>
                      Read article
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Projects Done (1 Row only - 4 items) -->
          <section class="pt-16 relative">
            <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto relative">
              <div class="flex justify-between pb-6 relative">
                <div>
                  <h2 class="text-2xl md:text-3xl text-gray-800 dark:text-white font-bold">Karya Kita</h2>
                </div>
                <div class="flex items-center min-w-max gap-5">
                  <a href="project" class="px-6 md:px-7 py-3 rounded-full relative group">
                    <span class="absolute inset-0 rounded-full group-hover:scale-105 origin-center transition-all ease-in-out bg-primary border-2 border-transparent"></span>
                    <span class="relative flex items-center justify-center text-white">See all</span>
                  </a>
                </div>
              </div>
              <div class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-6 px-5 -mx-5 scroll-px-5 [&>div]:w-[75%] [&>div]:max-w-[300px] sm:[&>div]:w-[45%] [&>div]:flex-none [&>div]:snap-start md:grid md:grid-cols-2 lg:grid-cols-4 md:overflow-visible md:pb-0 md:px-0 md:mx-0 md:scroll-px-0 md:[&>div]:w-auto md:[&>div]:max-w-none md:[&>div]:snap-align-none hide-scrollbar">
                <!-- Project 1 -->
                <div class="bg-box-bg rounded-3xl shadow-lg border border-box-border flex flex-col p-2 group hover:-translate-y-3 hover:shadow-2xl hover:shadow-primary/20 transition-all duration-500">
                  <div class="overflow-hidden rounded-2xl w-full h-40">
                    <img src="images/podCast.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
                  </div>
                  <div class="p-4 flex flex-col justify-between flex-grow">
                    <h2 class="font-semibold text-lg line-clamp-2 text-gray-700 dark:text-white mb-4">
                      Start your journey in SEO
                    </h2>
                    <a href="project" class="flex items-center justify-center gap-2 text-white px-5 py-2.5 bg-primary rounded-full hover:bg-primary/90 transition text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10 2a.75.75 0 01.75.75v7.5a.75.75 0 01-1.5 0v-7.5A.75.75 0 0110 2zM5.22 5.22a.75.75 0 011.06 0 7.5 7.5 0 107.44 0 .75.75 0 111.06-1.06 9 9 0 11-8.92 0 .75.75 0 010 1.06z" clip-rule="evenodd" /></svg> View Detail
                    </a>
                  </div>
                </div>
                <!-- Project 2 -->
                <div class="bg-box-bg rounded-3xl shadow-lg border border-box-border flex flex-col p-2 group hover:-translate-y-3 hover:shadow-2xl hover:shadow-[#8cd66a]/20 transition-all duration-500">
                  <div class="overflow-hidden rounded-2xl w-full h-40">
                    <img src="images/podCast.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
                  </div>
                  <div class="p-4 flex flex-col justify-between flex-grow">
                    <h2 class="font-semibold text-lg line-clamp-2 text-gray-700 dark:text-white mb-4">
                      Modern Web Architecture
                    </h2>
                    <a href="project" class="flex items-center justify-center gap-2 text-white px-5 py-2.5 bg-primary rounded-full hover:bg-primary/90 transition text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10 2a.75.75 0 01.75.75v7.5a.75.75 0 01-1.5 0v-7.5A.75.75 0 0110 2zM5.22 5.22a.75.75 0 011.06 0 7.5 7.5 0 107.44 0 .75.75 0 111.06-1.06 9 9 0 11-8.92 0 .75.75 0 010 1.06z" clip-rule="evenodd" /></svg> View Detail
                    </a>
                  </div>
                </div>
                <!-- Project 3 -->
                <div class="bg-box-bg rounded-3xl shadow-lg border border-box-border flex flex-col p-2 group hover:-translate-y-3 hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-500">
                  <div class="overflow-hidden rounded-2xl w-full h-40">
                    <img src="images/podCast.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
                  </div>
                  <div class="p-4 flex flex-col justify-between flex-grow">
                    <h2 class="font-semibold text-lg line-clamp-2 text-gray-700 dark:text-white mb-4">
                      Digital Transformation
                    </h2>
                    <a href="project" class="flex items-center justify-center gap-2 text-white px-5 py-2.5 bg-primary rounded-full hover:bg-primary/90 transition text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10 2a.75.75 0 01.75.75v7.5a.75.75 0 01-1.5 0v-7.5A.75.75 0 0110 2zM5.22 5.22a.75.75 0 011.06 0 7.5 7.5 0 107.44 0 .75.75 0 111.06-1.06 9 9 0 11-8.92 0 .75.75 0 010 1.06z" clip-rule="evenodd" /></svg> View Detail
                    </a>
                  </div>
                </div>
                <!-- Project 4 -->
                <div class="bg-box-bg rounded-3xl shadow-lg border border-box-border flex flex-col p-2 group hover:-translate-y-3 hover:shadow-2xl hover:shadow-purple-500/20 transition-all duration-500">
                  <div class="overflow-hidden rounded-2xl w-full h-40">
                    <img src="images/podCast.webp" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-in-out" />
                  </div>
                  <div class="p-4 flex flex-col justify-between flex-grow">
                    <h2 class="font-semibold text-lg line-clamp-2 text-gray-700 dark:text-white mb-4">
                      Cloud Migration Strategy
                    </h2>
                    <a href="project" class="flex items-center justify-center gap-2 text-white px-5 py-2.5 bg-primary rounded-full hover:bg-primary/90 transition text-sm">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10 2a.75.75 0 01.75.75v7.5a.75.75 0 01-1.5 0v-7.5A.75.75 0 0110 2zM5.22 5.22a.75.75 0 011.06 0 7.5 7.5 0 107.44 0 .75.75 0 111.06-1.06 9 9 0 11-8.92 0 .75.75 0 010 1.06z" clip-rule="evenodd" /></svg> View Detail
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Mitra Kerja -->
          <style>
            @keyframes infinite-scroll {
              0% { transform: translateX(0); }
              100% { transform: translateX(-50%); }
            }
            .animate-infinite-scroll {
              animation: infinite-scroll 20s linear infinite;
              width: max-content;
            }
            .animate-infinite-scroll:hover {
              animation-play-state: paused;
            }
            .mask-image-gradient {
              -webkit-mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
              mask-image: linear-gradient(to right, transparent, black 15%, black 85%, transparent);
            }
          </style>
          <section class="pt-12 md:pt-24 pb-8 md:pb-16 relative overflow-hidden">
            <div class="w-full mx-auto">
              <div class="text-center mb-8 md:mb-16 px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto">
                <h2 class="text-2xl md:text-3xl text-gray-800 dark:text-white font-bold uppercase tracking-widest">
                  Partner Kolaborasi
                </h2>
                <div class="w-24 h-1 bg-primary mx-auto mt-4 rounded-full"></div>
              </div>
              
              <!-- Infinite Scroll Container -->
              <div class="relative w-full md:w-[60%] mx-auto overflow-hidden mask-image-gradient group pt-2 pb-8 md:py-12">
                <div class="flex items-center gap-12 md:gap-24 animate-infinite-scroll pr-12 md:pr-24">
                  <!-- Set 1 -->
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pemkot-bontang.webp" alt="Pemerintah Kota Bontang" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pemerintah Kota Bontang</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pemprov-kaltim.webp" alt="Pemerintah Provinsi Kalimantan Timur" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pemprov Kalimantan Timur</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pupuk_kaltim.webp" alt="Pupuk Kaltim" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pupuk Kaltim</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/exabytes.webp" alt="Exabytes" class="h-24 sm:h-28 md:h-32 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Exabytes</span>
                  </div>
                  
                  <!-- Set 2 -->
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pemkot-bontang.webp" alt="Pemerintah Kota Bontang" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pemerintah Kota Bontang</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pemprov-kaltim.webp" alt="Pemerintah Provinsi Kalimantan Timur" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pemprov Kalimantan Timur</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pupuk_kaltim.webp" alt="Pupuk Kaltim" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pupuk Kaltim</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/exabytes.webp" alt="Exabytes" class="h-24 sm:h-28 md:h-32 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Exabytes</span>
                  </div>

                  <!-- Set 3 (Untuk memastikan tidak putus) -->
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pemkot-bontang.webp" alt="Pemerintah Kota Bontang" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pemerintah Kota Bontang</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pemprov-kaltim.webp" alt="Pemerintah Provinsi Kalimantan Timur" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pemprov Kalimantan Timur</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pupuk_kaltim.webp" alt="Pupuk Kaltim" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pupuk Kaltim</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/exabytes.webp" alt="Exabytes" class="h-24 sm:h-28 md:h-32 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Exabytes</span>
                  </div>

                  <!-- Set 4 (Untuk memastikan tidak putus) -->
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pemkot-bontang.webp" alt="Pemerintah Kota Bontang" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pemerintah Kota Bontang</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pemprov-kaltim.webp" alt="Pemerintah Provinsi Kalimantan Timur" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pemprov Kalimantan Timur</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/pupuk_kaltim.webp" alt="Pupuk Kaltim" class="h-28 sm:h-32 md:h-36 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Pupuk Kaltim</span>
                  </div>
                  <div class="relative group/item flex flex-col items-center justify-center cursor-pointer">
                    <img src="images/partner/exabytes.webp" alt="Exabytes" class="h-24 sm:h-28 md:h-32 w-auto object-contain grayscale group-hover/item:grayscale-0 opacity-60 group-hover/item:opacity-100 transition-all duration-300 drop-shadow-md" />
                    <span class="absolute -bottom-5 opacity-0 group-hover/item:opacity-100 group-hover/item:translate-y-0 translate-y-2 transition-all duration-300 text-xs font-semibold text-gray-700 dark:text-gray-300 whitespace-nowrap bg-white dark:bg-box-bg px-3 py-1.5 rounded-full shadow-lg border border-gray-100 dark:border-box-border z-20">Exabytes</span>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="cta-section" class="py-20">
            <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto">
              <div class="w-full relative py-8 md:py-10 px-6 md:px-8 rounded-2xl bg-gradient-to-tr from-gray-100 to-gray-200 dark:from-gray-900 dark:to-body-color">
                <div class="absolute right-0 top-0 h-full w-full flex justify-end">
                  <span class="flex opacity-20"><span class="w-16 h-32 rounded-l-full flex bg-primary blur-2xl"></span><span class="w-16 h-32 rounded-r-full flex bg-[#f88fc2] blur-2xl mt-14"></span></span>
                </div>
                <div class="absolute left-0 bottom-0 h-full w-full flex items-end">
                  <span class="flex opacity-20"><span class="w-16 h-32 rounded-l-full flex bg-primary blur-2xl"></span><span class="w-16 h-32 rounded-r-full flex bg-[#f88fc2] blur-2xl mt-14"></span></span>
                </div>
                <div class="mx-auto text-center max-w-xl md:max-w-2xl relative">
                  <h2 class="text-gray-800 pt-4 dark:text-white font-bold text-4xl md:text-5xl lg:text-6x">
                    Ada Ide Gila? <span class="text-transparent bg-clip-text bg-gradient-to-br from-primary to-[#8cd66a]">Sini Kita Eksekusi Bareng!</span>
                  </h2>
                  <p class="text-gray-600 dark:text-gray-300 pt-8 mx-auto max-w-xl">
                    Nggak usah ragu, ceritain aja dulu project atau mimpimu. Kita siap dengerin dan wujudin bareng jadi karya nyata yang keren abis!
                  </p>
                  <div class="mx-auto max-w-md sm:max-w-xl pt-10">
                    <?php if(!empty($cta_message)): ?>
                      <div class="mb-6 p-4 rounded-xl bg-green-500/10 text-green-600 dark:text-green-400 font-semibold text-center border border-green-500/20">
                        <?php echo $cta_message; ?>
                      </div>
                    <?php endif; ?>
                    <form action="#cta-section" method="POST" class="flex items-center relative gap-x-2">
                      <input type="text" name="website_url" style="display:none" tabindex="-1" autocomplete="off" />
                      <input type="email" name="email" required placeholder="Masukin email kamu di sini..." class="outline-none border-2 border-transparent focus:border-primary bg-body text-gray-600 dark:text-gray-200 rounded-3xl px-6 py-3 w-full" />
                      <div class="sm:inline-flex sm:min-w-max absolute sm:relative top-0.5 right-0.5 sm:top-0 sm:right-0">
                        <button type="submit" name="submit_cta" class="min-w-max p-3 sm:py-3 sm:px-6 text-white border-2 border-transparent relative group">
                          <span class="absolute inset-0 rounded-full group-hover:scale-105 origin-center transition-all ease-in-out bg-primary"></span>
                          <span aria-hidden="true" class="relative hidden sm:flex">Gaskeun!</span>
                          <span class="relative flex sm:hidden"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"></path></svg></span>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!--]--><!--]-->
<?php include 'includes/footer.php'; ?>

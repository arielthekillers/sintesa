<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Sintesa Corp</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" type="image/png" href="images/logo/favicon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="images/logo/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/logo/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/logo/apple-touch-icon-114x114.png">
  <link rel="stylesheet" href="style.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            body: 'rgb(var(--color-bg))',
            'box-bg': 'rgb(var(--color-box))',
            'box-shadow': 'rgb(var(--box-sd))',
            'box-border': 'rgb(var(--box-border))',
            primary: '#00D8A5',
            secondary: '#7E43AD',
            'body-color': '#462C64',
          }
        }
      }
    }
  </script>
  <script src="main.js" defer></script>
</head>

<body>
  <div id="__nuxt">
    <!--[-->
    <div class="relative w-full">
      <!-- Global Blurry Background -->
      <div class="absolute top-0 inset-x-0 h-64 flex items-start z-0 pointer-events-none">
        <div class="h-24 w-2/3 bg-gradient-to-br from-primary opacity-40 blur-3xl dark:from-[#570cac] dark:opacity-50">
        </div>
        <div class="h-20 w-3/5 bg-gradient-to-r from-[#8cd66a] opacity-50 blur-3xl dark:from-[#670ccf] dark:opacity-50">
        </div>
      </div>
      <header class="absolute inset-x-0 top-0 py-3 z-50">
        <div class="w-full px-5 sm:px-8 md:px-12 lg:px-8 max-w-screen-lg lg:max-w-screen-xl mx-auto relative">
          <!--[-->
          <nav class="flex items-center justify-between w-full relative">
            <div class="inline-flex relative bg-inherit">
              <a aria-current="page" href="./"
                class="router-link-active router-link-exact-active flex items-center gap-2">
                <img src="images/logo/logo.png" alt="Sintesa Corp Logo" class="h-10 w-auto" />
                <span
                  class="text-xl md:text-2xl font-extrabold bg-gradient-to-r from-[#154b77] to-primary bg-clip-text text-transparent dark:from-blue-400 dark:to-primary tracking-tight">Sintesa
                  Corp</span></a>
            </div>
            <div id="mobile-nav-menu"
              class="absolute top-full px-5 sm:px-8 md:px-12 lg:px-0 lg:pt-0 lg:top-0 invisible opacity-40 lg:opacity-100 bg-body rounded-xl border border-box-border shadow-lg shadow-box-shadow lg:border-none lg:shadow-none lg:rounded-none lg:bg-transparent w-full lg:w-max py-6 lg:py-0 lg:visible lg:relative flex transition-all duration-300 ease-linear origin-top translate-y-6 lg:translate-y-0">
              <ul
                class="text-gray-700 dark:text-gray-100 w-full flex lg:items-center gap-y-4 lg:gap-x-8 flex-col lg:flex-row">
                <li class="lg:inline-flex">
                  <a aria-current="page" href="./"
                    class="router-link-active router-link-exact-active lg:inline-flex transition hover:text-primary ease-linear text-lg">Lounge</a>
                </li>
                <li class="lg:inline-flex">
                  <a href="about"
                    class="px-2 md:px-0 py-2.5 transition-colors text-lg md:text-base hover:text-primary">Kenalan</a>
                </li>
                <li class="lg:inline-flex">
                  <a href="project"
                    class="px-2 md:px-0 py-2.5 transition-colors text-lg md:text-base hover:text-primary">Karya Kita</a>
                </li>
                <li class="lg:inline-flex">
                  <a href="news"
                    class="px-2 md:px-0 py-2.5 transition-colors text-lg md:text-base hover:text-primary">Update
                    Seru</a>
                </li>
                <!--]-->
              </ul>
            </div>
            <div class="flex items-center bg-inherit gap-1 lg:gap-3 min-w-max">
              <div class="relative py-2">
                <button id="theme-dropdown-btn"
                  class="outline-none bg-transparent p-2.5 rounded-full text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800">
                  <span><span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5" width="20" height="20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
                        </path>
                      </svg></span></span><!----><!----></button><!---->
                <div id="theme-dropdown" style="display: none"
                  class="absolute border border-box-border shadow-md shadow-box-shadow z-40 top-full right-0 transition-all ease-linear p-2 rounded-xl w-44 bg-box-bg">
                  <ul class="flex flex-col">
                    <li onclick="window.toggleColorMode('system')"
                      class="flex select-none cursor-pointer items-center gap-3 px-2 py-2 rounded-md transition hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-600 dark:text-gray-200">
                      <span><span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5" width="20" height="20">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25">
                            </path>
                          </svg></span></span><span> System </span>
                    </li>
                    <li onclick="window.toggleColorMode('system')"
                      class="flex select-none cursor-pointer items-center gap-3 px-2 py-2 rounded-md transition hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-600 dark:text-gray-200">
                      <span><span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5" width="20" height="20">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z">
                            </path>
                          </svg></span></span><span> Light </span>
                    </li>
                    <li onclick="window.toggleColorMode('system')"
                      class="flex select-none cursor-pointer items-center gap-3 px-2 py-2 rounded-md transition hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-600 dark:text-gray-200">
                      <span><span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5" width="20" height="20">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z">
                            </path>
                          </svg></span></span><span> Dark </span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="flex lg:hidden border-l border-box-border pl-2">
                <button id="mobile-nav-toggle" class="outline-none w-7 h-auto flex flex-col relative">
                  <span id="nav-line-1"
                    class="scale-x-50 origin-left w-6 h-0.5 rounded-full bg-gray-500 dark:bg-gray-200 transition-all duration-300 ease-linear"></span><span
                    id="nav-line-2"
                    class="w-6 origin-center mt-1 h-0.5 rounded-full bg-gray-500 dark:bg-gray-200 transition-all duration-300 ease-linear"></span><span
                    id="nav-line-3"
                    class="scale-x-75 origin-left w-6 mt-1 h-0.5 rounded-full bg-gray-500 dark:bg-gray-200 transition-all duration-300 ease-linear"></span>
                </button>
              </div>
            </div>
          </nav>
          <!--]-->
        </div>
      </header>
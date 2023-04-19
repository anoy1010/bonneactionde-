<body>
<header class="bg-white absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-2.5 p-2.5">
                <span class="sr-only">Bonne Action de +</span>
                <img class="h-16 w-auto" src="images/logoba+.svg" alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button onclick="onToggleMenu(this)" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="index.php" class="rounded-md px-3.5 py-2.5 text-sm font-semibold leading-6 hover:bg-black hover:text-white text-gray-900">Acceuil</a>
        
                <a href="Activity.php" class="rounded-md px-3.5 py-2.5 text-sm font-semibold leading-6 hover:bg-black hover:text-white text-gray-900">Nos activitées</a>
        
                <a href="Team.php" class="rounded-md px-3.5 py-2.5 text-sm font-semibold leading-6 hover:bg-black hover:text-white text-gray-900">Notre équipe</a>
        
                <a href="Contact.php" class="rounded-md px-3.5 py-2.5 text-sm font-semibold leading-6 hover:bg-black hover:text-white text-gray-900">Contact</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <button class="btn bg-[#cb0d0e] border-0 text-white hover:bg-[#290301] hover:text-white">Faire un don</button>
            </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed sideBar inset-0 z-50"></div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-16 w-auto" src="images/logoba+1.svg" alt="">
                </a>
                <button onclick="onToggleMenu(this)" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>
                <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base hover:bg-black hover:text-white font-semibold leading-7 text-gray-900 hover:bg-gray-50">Acceuil</a>
        
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base hover:bg-black hover:text-white font-semibold leading-7 text-gray-900 hover:bg-gray-50">Nos missions</a>
        
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base hover:bg-black hover:text-white font-semibold leading-7 text-gray-900 hover:bg-gray-50">Notre équipe</a>
        
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base hover:bg-black hover:text-white font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
                    </div>
                    <div class="py-6">
                        <button class="btn bg-[#cb0d0e] border-0 text-white hover:bg-[#290301] hover:text-white">Faire un don</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
</header>
<button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-3 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out bottom-5 right-5" id="btn-back-to-top">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path></svg>
</button>
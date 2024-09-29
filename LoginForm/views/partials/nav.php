<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-10 w-20" src="../../views/mlogo.png" alt=" Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/controllers/index.php" class="<?= $_SERVER['REQUEST_URI'] == '/index.php'? 'bg-gray-900 text-white': 'text-gray-300'?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                        <a href="/controllers/about.php" class="<?= $_SERVER['REQUEST_URI'] == '/about.php'? 'bg-gray-900 text-white': 'text-gray-300'?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <a href="/controllers/contact.php" class="<?= $_SERVER['REQUEST_URI'] == '/contact.php'? 'bg-gray-900 text-white': 'text-gray-300'?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Contacts</a>
                        <a href="/controllers/loginForm.php" class="<?= $_SERVER['REQUEST_URI'] == '/'? 'bg-gray-900 text-white': 'text-gray-300'?>  hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Login</a>
                       </div>
                </div>
            </div>
        </div>
    </div>
</nav>
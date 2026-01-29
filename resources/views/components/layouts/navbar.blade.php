<nav class="bg-gray-500 shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4 ">

    <!--Top row-->
    <div class="grid grid-cols-3 items-center">
      <!-- Left (empty for spacing) -->
      <div>
        <img src="{{ asset('images/logo.png') }}" alt="Celeste Logo" class="h-14 w-auto scale-125" />
      </div>

      <!--Logo + Menu -->
      <div class="flex flex-col items-center">
        <!-- Menu -->
        <div class="flex gap-4 mt-3 text-lg font-medium">
          <a href="#" class="hover:text-blue-500">Home</a>
          <a href="#" class="hover:text-blue-500">About</a>
          <a href="#" class="hover:text-blue-500">Contact</a>
        </div>
      </div>

      <!--Login -->
      <div class="flex justify-end">
          <button
            class="w-12 h-12 rounded-full
            bg-blue-500 text-white
            flex items-center justify-center
            hover:bg-blue-600 transition">

            
          <x-phosphor-user-circle class="w-6 h-6" />
            
          </button>
        </div>

  </div>
</nav>

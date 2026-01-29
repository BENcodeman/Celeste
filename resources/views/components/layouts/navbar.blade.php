<nav class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4">

    <!--Top row-->
    <div class="grid grid-cols-3 items-center">
      <!-- Left (empty for spacing) -->
      <div>
        <img src="{{ asset('images/logo.png') }}" alt="Celeste Logo" class="h-15 w-auto" />
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
        <button class="bg-blue-500 text-white rounded-lg px-4 py-2">
          Login
        </button>
      </div>
    </div>

  </div>
</nav>

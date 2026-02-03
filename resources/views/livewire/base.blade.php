<div class="mx-auto">
   <div class="div grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 gap-2 mx-auto justify-start  overflow-x-auto bg-red-500">
      <div class="break-words m-4 p-4 bg-gray-400">hello</div>
      <div class="flex break-words m-4 p-4 gap-4 justify-center bg-blue-300 ">
         <div class="pl-8 bg-green-300 dropdown">Home</div>
         <div class="pl-8 bg-green-500">About</div>
         <div class="pl-8 bg-green-800">Contact</div>
      </div>
      <div class="break-words m-4 p-4 text-center">
         <x-bladewind::button outline="true" class="px-4 py-1 border-green-500 bg-blue-800 hover:bg-blue-600 hover:text-white hover:border-blue-600  transition">
            Login
         </x-bladewind::button>
      </div>

   </div>
   
   <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 bg-blue-500 min-h-[500px] p-4">

   <x-bladewind::card title="Clusters" class="m-4 p-0 bg-gray-200">
    
      <div class="flex flex-col items-center justify-center  gap-3 p-6 text-center min-h-[180px]">

         <x-phosphor-house-line
            class="w-10 h-10 sm:w-12 sm:h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 text-blue-600"
         />

         <p class="font-medium break-words">
            View Village Clusters
         </p>

      </div>

   </x-bladewind::card>

   <x-bladewind::card
      title="Clusters" class="flex flex-col items-center justify-center gap-3 m-4 p-6 bg-gray-200 text-center min-h-[180px]">
      <x-phosphor-house-line class="w-10 h-10 sm:w-12 sm:h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 text-blue-600"/>
      <p class="font-medium text-center break-words w-full">
         View Village Clusters
      </p>
   </x-bladewind::card>
   <x-bladewind::card
      title="Clusters" class="flex flex-col items-center justify-center gap-3 m-4 p-6 bg-gray-200 text-center min-h-[180px]">
      <x-phosphor-house-line class="w-10 h-10 sm:w-12 sm:h-12 md:w-14 md:h-14 lg:w-16 lg:h-16 text-blue-600"/>
      <p class="font-medium text-center break-words w-full">
         View Village Clusters
      </p>
   </x-bladewind::card>

</div>

    
</div>

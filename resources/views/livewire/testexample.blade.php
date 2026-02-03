<style>
    .clip-box {
  width: 300px;
  padding: 20px;
  border: 10px solid transparent;

  background:
    /* content */
    linear-gradient(#4ade80, #4ade80) content-box,
    /* padding */
    linear-gradient(#60a5fa, #60a5fa) padding-box,
    /* border */
    linear-gradient(#f87171, #000000) border-box;
}
</style>


<div class="mx-auto bg-red-500">
    <navbar class="bg-green-600">
        my navbar
    </navbar>
    hi
    <div class="flex bg-gray-500 overflow-x-auto justify-start p-4 ">
        <div class=" m-4 p-4 bg-white rounded-lg shadow-lg  ">
            <x-phosphor-icon name="test-icon" class="w-6 h-6 text-blue-500"/>
        </div>
        <div class=" m-4 p-4 bg-white rounded-lg shadow-lg  ">
            This is a test example component.
        </div>
        <div class="m-4 p-4 bg-white rounded-lg shadow-lg">
            It uses the app layout.
        </div> 
        <div class="clip-box m-4 p-4 bg-white rounded-lg shadow-lg">
            This box has a colorful border using background-clip.   
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 bg-yellow-300 p-4 mx-auto justify-start  overflow-x-auto">
        <div class="break-words m-4 p-4 bg-red-500 lg:col-span-3 md:col-span-2">hello</div>
        <div class="m-4 p-4 bg-red-500 break-words">My</div>
        <div class="m-4 p-4 bg-red-500 break-words">Name</div>
    </div>
</div>

<div x-data="{ open: false }">

    <div class="flex flex-row text-gray px-5 py-2">
      <p class="flex flex-grow">Filters</p>
      <p  @click="open = ! open"><i class="fa fa-filter" :class="{ 'text-primary': ! open }"></i></p>  
    </div>
    <div class="px-5 py-2 flex-col bg-white shadow-sm rounded"  x-show="open" x-transition>
      <div class="space-x-2 flex">
        <span class="flex-inline px-4 py-2 text-base rounded-full text-white bg-primary">
          <i class="fa fa-user-md mr-3"></i>
          Specialists
          <button class="bg-transparent hover">
            <i class="fas fa-times ml-3"></i>
          </button>
        </span>
        <span class="flex-inline px-4 py-2 text-base rounded-full text-primary bg-white">
          <i class="fa fa-hospital mr-3"></i>
          Facilities
          <button class="bg-transparent hover">
            <i class="fas fa-plus ml-3"></i>
          </button>
        </span>      
        
      </div>
      <!-- This example requires Tailwind CSS v2.0+ -->
      <div class="py-5">
        <div class="flex items-center ">
          <select  placeholder="Select loction" class="w-full pr-10 pl-4 py-2 border rounded-lg text-gray focus:outline-none">
            <option>Select location</option>
            <option>Accra</option>
            <option>Abuja</option>
          </select>
          <i class="fa fa-location fill-current text-gray -ml-8 z-10"></i>
       </div>        
      </div>

    </div>
    
</div>
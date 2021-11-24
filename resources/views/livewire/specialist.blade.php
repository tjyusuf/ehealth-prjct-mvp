<div>
    <div class="flex w-full bg-primary p-5 pb-10 flex-row text-white">
        <div class="flex-initital">
            <i class="fa fa-long-arrow-left"></i>
        </div>
        <div class="flex-grow justify-center text-center">
            <span class="text-amber text-md font-bold">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="far fa-star"></i>
            </span>
        </div>
        <div class="flex-initial">
          <span class="bg-primary-light text-primary-dark font-semibold text-xs px-2 py-1 rounded">dentist</span>
        </div>
    </div>

    <div class="flex mx-auto w-4/5 -mt-5 bg-white shadow-md  rounded-md p-2 text-gray">
        <img alt="" class="w-12 h-12 rounded-full mr-3" src="https://source.unsplash.com/41x41/?portrait"/>
        <div class="flex-col flex-grow justify-center px-2 py-1">
            <div class="flex justify-between items-center ">
                <h2 class="text-sm font-semibold">Pharm. Aminu Hamza</h2>
            </div>
            <div class="flex pt-2  text-sm">
                <div class="flex items-center mr-auto">
                    <i class="fa fa-circle text-md font-bold text-success"></i>
                    <p class="primary ml-2">avalable</p> 
                </div>
            </div>
        </div>
        <div class="flex flex-intiial items-center">
            <div class="flex flex-col text-center items-center">
                <span class="text-xs">
                    24 <i class="fa fa-users"></i>
                </span>
                <span class="text-primary text-2xl font-extrabold">4.0</span>
                <span class="text-sm tracking-tight">rating</span>
            </div>          
        </div>
    </div>

    <div class="container p-5 space-y-2 bg-white rounded-md shadow-md my-2">
        <div class="space-y-2 ">
            <p class="text-gray-dark text-md font-bold">About specialist</p>
            <p class="text-gray text-justify ">
                Phaem. Aminu Hamza is a clinical pharmacist that specialises in drug manufacturing and administering.
            </p>
        </div>   

        <div class="space-y-2">
            <p class="text-gray-dark text-md font-bold">Location</p>
            <iframe
            style="border:0"
            loading="lazy"
            allowfullscreen
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDZjbLAjakQuwZ2ia1__ccYGQhGBH7zLXA
            &q=Legislative+quarters+kaduna" class="w-full h-60">
            </iframe>
        </div>
        
        <x-ui.button class="flex w-full">
            Make Appointment 
        </x-ui.button>
    </div>
  

<!--  
    <div  x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'today' }" id="tab_wrapper">
      <nav>
        <a :class="{ 'active': tab === 'today' }" @click.prevent="tab = 'today'" href="#">Today</a>
        <a :class="{ 'active': tab === 'tomorrow' }" @click.prevent="tab = 'tomorrow'" href="#">Tomorrow</a>
        <a :class="{ 'active': tab === 'next' }" @click.prevent="tab = 'next'" href="#">20th Nov</a>
      </nav>

      <div x-show="tab === 'today'">
        Lorem ipsum today.
      </div>
      <div x-show="tab === 'tmorrow'">
        Lorem ipsum tomorrow.
      </div>
      <div x-show="tab === 'next'">
        Lorem ipsum next.
      </div>

    </div> -->


</div>

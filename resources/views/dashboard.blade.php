<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<div class="bg-gray-50 min-h-screen">


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="w-full bg-white ">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
          <div class="flex justify-start lg:w-0 lg:flex-1">
            <a href="#">
              <img class=" flex-inline h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt=""/>
            </a>
          </div>
          <nav class="hidden md:flex space-x-10">
            <div class="relative">
              <a href="#" class="no-underline px-2 my-2 font-medium text-gray-500 hover:text-blue-400">
                <i class="fa fa-search"></i> Explore
              </a>          
               <a href="#" class="no-underline px-2 my-2 font-medium text-gray-500 hover:text-blue-400">
                <i class="fa fa-list"></i> Appointments
              </a>
                                
            </div>
          </nav>
          <div class="flex items-center justify-end md:flex-1 lg:w-0">
            <i class="fa fa-bell text-blue-400 text-2xl"></i>
          </div>                    
        </div>
      </div>
    </div> 

    <!-- header -->
    <header class=" ">
      <div class="max-w-7xl mx-auto text-gray-500 p-5 md:px-10 flex flex-row">
        <h1 class="flex-grow">
          <p>Hello</p>
          <p class="text-xl font-bold ">Tijjani</p>
        </h1>      
        <div class="flex-initial">
          <img alt="" class="w-12 h-12 rounded-full ring-2 ring-offset-4 bg-coolGray-500 ring-violet-600 ring-offset-coolGray-100" src="https://source.unsplash.com/41x41/?portrait">
        </div> 
      </div>       
    </header>

    <div class="max-w-7xl mx-auto p-5 md:p-10">
      <div class="flex w-full bg-white border p-4 space-x-4 rounded-lg">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 opacity-30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input class="w-full bg-white outline-none" type="text" placeholder="Professionals, facilities, specialists..." />
      </div>  

      <div class="py-3 space-y-4 z-0">
        <div class="flex items-center justify-between md:justify-center text-gray-500 cursor-pointer space-x-6">
           <div class="flex flex-col text-center text-gray-500 space-y-2">
            <div class="flex items-center shadow-md justify-center w-20 h-20  rounded-lg bg-white">
              <i class="fa fa-user-md text-blue-400 text-4xl"></i>
            </div>          
            <p>Specialists</p>
          </div>
           <div class="flex flex-col text-center text-gray-500 space-y-2">
            <div class="flex items-center shadow-md justify-center w-20 h-20  rounded-lg bg-white">
              <i class="fa fa-hospital text-blue-400 text-4xl"></i>
            </div>          
            <p>Facilities</p>
          </div>
           <div class="flex flex-col text-center text-gray-500 space-y-2">
            <div class="flex items-center shadow-md justify-center w-20 h-20  rounded-lg bg-white">
              <i class="fa fa-cart-plus text-blue-400 text-4xl"></i>
            </div>          
            <p>Orders</p>
          </div>
           <div class="flex flex-col text-center text-gray-500 space-y-2">
            <div class="flex items-center shadow-md justify-center w-20 h-20  rounded-lg bg-white">
              <i class="fa fa-hamburger text-blue-400 text-4xl"></i>
            </div>          
            <p>More</p>
          </div>
        </div>
      </div>

      <p class="my-2 text-left text-md font-bold text-blue-800">Upcoming Appointments</p>
      <div class="w-full bg-blue-400 rounded-lg text-white p-5 md:px-10 ">
        <div class="flex flex-row">
          <div class="flex-initial">
            <img alt="" class="w-12 h-12 rounded-full ring-2 ring-offset-4 ring-blue-500 ring-offset-blue-100" src="https://source.unsplash.com/41x41/?portrait">
          </div>           
          <h1 class="ml-5 flex-grow">
            <p class="text-xl font-bold ">Dr Sani Ahmad</p>
            <p>Dental Specialist</p>
          </h1>      
        </div>  
        <hr class="border-blue-300 my-2"/>
        <div class="flex flex-row py-2 px-3 bg-blue-500 rounded-lg text-blue-100">
           <p class="flex-1 text-center">
             <i class="fa fa-calendar"></i> Wed, 17th Nov
           </p>
           <p class="flex-1 text-center">
             <i class="fa fa-clock"></i> 5:30pm - 6:00pm
           </p>
        </div>
      </div>


      <p class="my-5 text-left text-md font-bold text-blue-800">Suggested Professionals</p>
			<div class="grid grid-cols-1">
				<div class="my-1">
					<div class="flex  bg-white shadow-md  rounded-2xl p-2">
            <img alt="" class="w-12 h-12 rounded-full mr-3" src="https://source.unsplash.com/41x41/?portrait">
            <div class="flex-col flex-grow justify-center px-2 py-1">
							<div class="flex justify-between items-center ">
                <h2 class="text-sm font-medium">Pharm. Aminu Hamza</h2>
							</div>
							<div class="flex pt-2  text-sm text-gray-400">
								<div class="flex items-center mr-auto">
									<i class="fa fa-star text-md font-bold text-yellow-400"></i>
									<p class="font-semibold text-blue-800 ml-2">4.5</p>
								</div>
							</div>
						</div>
            <div class="flex flex-intiial items-center">
							<i class="fa fa-chevron-right"></i>
            </div>

					</div>
				</div>
				<div class="my-1">
					<div class="flex  bg-white shadow-md  rounded-2xl p-2">
            <img alt="" class="w-12 h-12 rounded-full mr-3" src="https://source.unsplash.com/41x41/?portrait">
            <div class="flex-col flex-grow justify-center px-2 py-1">
							<div class="flex justify-between items-center ">
                <h2 class="text-sm font-medium">Pharm. Aminu Hamza</h2>
							</div>
							<div class="flex pt-2  text-sm text-gray-400">
								<div class="flex items-center mr-auto">
									<i class="fa fa-star text-md font-bold text-yellow-400"></i>
									<p class="font-semibold text-blue-800 ml-2">4.5</p>
								</div>
							</div>
						</div>
            <div class="flex flex-intiial items-center">
							<i class="fa fa-chevron-right"></i>
            </div>

					</div>
				</div>
				<div class="my-1">
					<div class="flex  bg-white shadow-md  rounded-2xl p-2">
            <img alt="" class="w-12 h-12 rounded-full mr-3" src="https://source.unsplash.com/41x41/?portrait">
            <div class="flex-col flex-grow justify-center px-2 py-1">
							<div class="flex justify-between items-center ">
                <h2 class="text-sm font-medium">Pharm. Aminu Hamza</h2>
							</div>
							<div class="flex pt-2  text-sm text-gray-400">
								<div class="flex items-center mr-auto">
									<i class="fa fa-star text-md font-bold text-yellow-400"></i>
									<p class="font-semibold text-blue-800 ml-2">4.5</p>
								</div>
							</div>
						</div>
            <div class="flex flex-intiial items-center">
							<i class="fa fa-chevron-right"></i>
            </div>
					</div>
				</div>
				
        
			</div>      

    </div>

    <!-- Mobile navigation menu -->
    <div class="md:hidden fixed bottom-1 w-full p-5 px-6 flex items-center justify-between bg-white shadow-lg text-blue-400 rounded-md cursor-pointer">
      <div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
        <i class="fa fa-home"></i>
      </div>
      <div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
        <i class="fa fa-search"></i>
      </div>
      <div class="flex flex-col items-center  hover:text-blue-400 ">
        <div
          class="absolute bottom-5 shadow-2xl text-center flex items-center justify-center rounded-full border-4 text-3xl border-gray-50 hover:border-blue-500 bg-blue-500 w-20 h-20 p-2 text-white transition ease-in duration-200 ">
          +
          <span class="animate-pingg absolute inline-flex h-full w-full rounded-full border-4 opacity-50"></span>
        </div>
      </div>
      <div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
        <i class="fa fa-bookmark"></i>
      </div>
      <div class="flex flex-col items-center transition ease-in duration-200 hover:text-blue-400 ">
        <i class="fa fa-user"></i>
      </div>
    </div>


</div>
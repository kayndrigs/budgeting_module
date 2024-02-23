<div>
    <nav class="fixed flex top-0 z-50 w-full bg-white border-b-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700">

        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between w-16 h-16-">

                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                        </svg>
                    </button>
                    <a href="#" class="flex ms-2 md:me-24">
                    <img src="{{ asset('css/images/image 5.png') }}" class="w-20 h-20" alt="PLM Logo" />
                    <span class="flex items-center w-80 text-indigo-800 text-2xl font-extrabold font-['Inter'] ml-3 leading-10">PLM Budget System</span>
                    </a>
                </div>
                
                <!--Search Bar-->
                <div class="flex items-left ml-[-20px]">
                    <div class="relative">
                        <svg class="absolute left-5 top-1/2 transform -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none" aria-hidden="true">
                            <path d="M20.3778 22.6405L14.6174 16.8801M16.5376 12.0798C16.5376 12.9624 16.3637 13.8362 16.026 14.6516C15.6883 15.467 15.1932 16.2078 14.5692 16.8319C13.9451 17.4559 13.2043 17.951 12.3889 18.2887C11.5736 18.6264 10.6997 18.8002 9.81712 18.8002C8.93458 18.8002 8.06068 18.6264 7.24532 18.2887C6.42996 17.951 5.6891 17.4559 5.06505 16.8319C4.441 16.2078 3.94598 15.467 3.60824 14.6516C3.27051 13.8362 3.09668 12.9624 3.09668 12.0798C3.09668 10.2974 3.80472 8.58807 5.06505 7.32774C6.32538 6.06742 8.03475 5.35938 9.81712 5.35938C11.5995 5.35937 13.3089 6.06742 14.5692 7.32774C15.8295 8.58807 16.5376 10.2974 16.5376 12.0798Z" stroke="#434343" stroke-width="1.92012" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <input class="w-[950px] h-12 pl-10 py-1 bg-zinc-100 rounded-lg flex items-center grow shrink basis-0 text-neutral-700 text-base font-normal font-nunito leading-normal ml-2" placeholder="Search here"></input>
                    </div>
                </div>

                <!-- User menu -->
                <div class="hidden sm:flex sm:items-center justify-end relative ml-[70px]">
                    <div class="relative stroke-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M19.88 9.04991C19.88 11.7082 17.725 13.8632 15.0666 13.8632C12.4083 13.8632 10.2533 11.7082 10.2533 9.04991C10.2533 6.39157 12.4083 4.23657 15.0666 4.23657C17.725 4.23657 19.88 6.39157 19.88 9.04991Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15.0666 17.4732C10.4146 17.4732 6.64331 21.2445 6.64331 25.8966H23.49C23.49 21.2445 19.7187 17.4732 15.0666 17.4732Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <select wire:model="state" class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150 border-transparent">
                        <option value="" class="ml-2 font-inter" selected>Maribeth Solquio</option>
                        <option value="MyAccount" class="font-bold border-b hover:bg-blue-700 hover:text-white active:bg-[#4F74BB] rounded-md">My Account</option>
                        <option value="LogOut" class="hover:bg-blue-700 hover:text-[#EFF0FF] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md flex items-center justify-between stroke-[#71717A] hover:stroke-white">Log Out</option>
                    </select>
                </div>



            </div>
        </div>

    </nav>

    <aside id="logo-sidebar" class="fixed top-8 left-0 z-40 w-75 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
        <div class="h-full px-4 pb-4 overflow-y-auto bg-indigo-800 dark:bg-gray-800 ">
            <div class="text-white text-2xl font-extrabold font-['Inter'] leading-10 my-10">Budgeting</div>
            <ul class="space-y-2 font-medium w-78 h-10 flex-col top-5 justify-start items-start gap-1 inline-flex">

                <li>
                    <a href="#" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="28" viewBox="0 0 27 28" fill="none">
                        <path d="M3.52881 13.896L5.72683 11.698M5.72683 11.698L13.4199 4.00488L21.113 11.698M5.72683 11.698V22.6881C5.72683 23.295 6.21887 23.7871 6.82584 23.7871H10.1229M21.113 11.698L23.311 13.896M21.113 11.698V22.6881C21.113 23.295 20.6209 23.7871 20.014 23.7871H16.7169M10.1229 23.7871C10.7298 23.7871 11.2219 23.295 11.2219 22.6881V18.292C11.2219 17.6851 11.7139 17.193 12.3209 17.193H14.5189C15.1259 17.193 15.6179 17.6851 15.6179 18.292V22.6881C15.6179 23.295 16.11 23.7871 16.7169 23.7871M10.1229 23.7871H16.7169" stroke="white" stroke-width="2.19802" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Home</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                        <path d="M4.87988 7.81878C4.87988 7.18049 5.13344 6.56834 5.58478 6.11701C6.03612 5.66567 6.64826 5.41211 7.28655 5.41211H9.69322C10.3315 5.41211 10.9436 5.66567 11.395 6.11701C11.8463 6.56834 12.0999 7.18049 12.0999 7.81878V10.2254C12.0999 10.8637 11.8463 11.4759 11.395 11.9272C10.9436 12.3786 10.3315 12.6321 9.69322 12.6321H7.28655C6.64826 12.6321 6.03612 12.3786 5.58478 11.9272C5.13344 11.4759 4.87988 10.8637 4.87988 10.2254V7.81878ZM16.9132 7.81878C16.9132 7.18049 17.1668 6.56834 17.6181 6.11701C18.0695 5.66567 18.6816 5.41211 19.3199 5.41211H21.7266C22.3648 5.41211 22.977 5.66567 23.4283 6.11701C23.8797 6.56834 24.1332 7.18049 24.1332 7.81878V10.2254C24.1332 10.8637 23.8797 11.4759 23.4283 11.9272C22.977 12.3786 22.3648 12.6321 21.7266 12.6321H19.3199C18.6816 12.6321 18.0695 12.3786 17.6181 11.9272C17.1668 11.4759 16.9132 10.8637 16.9132 10.2254V7.81878ZM4.87988 19.8521C4.87988 19.2138 5.13344 18.6017 5.58478 18.1503C6.03612 17.699 6.64826 17.4454 7.28655 17.4454H9.69322C10.3315 17.4454 10.9436 17.699 11.395 18.1503C11.8463 18.6017 12.0999 19.2138 12.0999 19.8521V22.2588C12.0999 22.8971 11.8463 23.5092 11.395 23.9605C10.9436 24.4119 10.3315 24.6654 9.69322 24.6654H7.28655C6.64826 24.6654 6.03612 24.4119 5.58478 23.9605C5.13344 23.5092 4.87988 22.8971 4.87988 22.2588V19.8521ZM16.9132 19.8521C16.9132 19.2138 17.1668 18.6017 17.6181 18.1503C18.0695 17.699 18.6816 17.4454 19.3199 17.4454H21.7266C22.3648 17.4454 22.977 17.699 23.4283 18.1503C23.8797 18.6017 24.1332 19.2138 24.1332 19.8521V22.2588C24.1332 22.8971 23.8797 23.5092 23.4283 23.9605C22.977 24.4119 22.3648 24.6654 21.7266 24.6654H19.3199C18.6816 24.6654 18.0695 24.4119 17.6181 23.9605C17.1668 23.5092 16.9132 22.8971 16.9132 22.2588V19.8521Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Budget Call</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                        <path d="M4.87988 7.81878C4.87988 7.18049 5.13344 6.56834 5.58478 6.11701C6.03612 5.66567 6.64826 5.41211 7.28655 5.41211H9.69322C10.3315 5.41211 10.9436 5.66567 11.395 6.11701C11.8463 6.56834 12.0999 7.18049 12.0999 7.81878V10.2254C12.0999 10.8637 11.8463 11.4759 11.395 11.9272C10.9436 12.3786 10.3315 12.6321 9.69322 12.6321H7.28655C6.64826 12.6321 6.03612 12.3786 5.58478 11.9272C5.13344 11.4759 4.87988 10.8637 4.87988 10.2254V7.81878ZM16.9132 7.81878C16.9132 7.18049 17.1668 6.56834 17.6181 6.11701C18.0695 5.66567 18.6816 5.41211 19.3199 5.41211H21.7266C22.3648 5.41211 22.977 5.66567 23.4283 6.11701C23.8797 6.56834 24.1332 7.18049 24.1332 7.81878V10.2254C24.1332 10.8637 23.8797 11.4759 23.4283 11.9272C22.977 12.3786 22.3648 12.6321 21.7266 12.6321H19.3199C18.6816 12.6321 18.0695 12.3786 17.6181 11.9272C17.1668 11.4759 16.9132 10.8637 16.9132 10.2254V7.81878ZM4.87988 19.8521C4.87988 19.2138 5.13344 18.6017 5.58478 18.1503C6.03612 17.699 6.64826 17.4454 7.28655 17.4454H9.69322C10.3315 17.4454 10.9436 17.699 11.395 18.1503C11.8463 18.6017 12.0999 19.2138 12.0999 19.8521V22.2588C12.0999 22.8971 11.8463 23.5092 11.395 23.9605C10.9436 24.4119 10.3315 24.6654 9.69322 24.6654H7.28655C6.64826 24.6654 6.03612 24.4119 5.58478 23.9605C5.13344 23.5092 4.87988 22.8971 4.87988 22.2588V19.8521ZM16.9132 19.8521C16.9132 19.2138 17.1668 18.6017 17.6181 18.1503C18.0695 17.699 18.6816 17.4454 19.3199 17.4454H21.7266C22.3648 17.4454 22.977 17.699 23.4283 18.1503C23.8797 18.6017 24.1332 19.2138 24.1332 19.8521V22.2588C24.1332 22.8971 23.8797 23.5092 23.4283 23.9605C22.977 24.4119 22.3648 24.6654 21.7266 24.6654H19.3199C18.6816 24.6654 18.0695 24.4119 17.6181 23.9605C17.1668 23.5092 16.9132 22.8971 16.9132 22.2588V19.8521Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Payment Request</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="w-56 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="30" viewBox="0 0 29 30" fill="none">
                        <path d="M4.87988 7.81878C4.87988 7.18049 5.13344 6.56834 5.58478 6.11701C6.03612 5.66567 6.64826 5.41211 7.28655 5.41211H9.69322C10.3315 5.41211 10.9436 5.66567 11.395 6.11701C11.8463 6.56834 12.0999 7.18049 12.0999 7.81878V10.2254C12.0999 10.8637 11.8463 11.4759 11.395 11.9272C10.9436 12.3786 10.3315 12.6321 9.69322 12.6321H7.28655C6.64826 12.6321 6.03612 12.3786 5.58478 11.9272C5.13344 11.4759 4.87988 10.8637 4.87988 10.2254V7.81878ZM16.9132 7.81878C16.9132 7.18049 17.1668 6.56834 17.6181 6.11701C18.0695 5.66567 18.6816 5.41211 19.3199 5.41211H21.7266C22.3648 5.41211 22.977 5.66567 23.4283 6.11701C23.8797 6.56834 24.1332 7.18049 24.1332 7.81878V10.2254C24.1332 10.8637 23.8797 11.4759 23.4283 11.9272C22.977 12.3786 22.3648 12.6321 21.7266 12.6321H19.3199C18.6816 12.6321 18.0695 12.3786 17.6181 11.9272C17.1668 11.4759 16.9132 10.8637 16.9132 10.2254V7.81878ZM4.87988 19.8521C4.87988 19.2138 5.13344 18.6017 5.58478 18.1503C6.03612 17.699 6.64826 17.4454 7.28655 17.4454H9.69322C10.3315 17.4454 10.9436 17.699 11.395 18.1503C11.8463 18.6017 12.0999 19.2138 12.0999 19.8521V22.2588C12.0999 22.8971 11.8463 23.5092 11.395 23.9605C10.9436 24.4119 10.3315 24.6654 9.69322 24.6654H7.28655C6.64826 24.6654 6.03612 24.4119 5.58478 23.9605C5.13344 23.5092 4.87988 22.8971 4.87988 22.2588V19.8521ZM16.9132 19.8521C16.9132 19.2138 17.1668 18.6017 17.6181 18.1503C18.0695 17.699 18.6816 17.4454 19.3199 17.4454H21.7266C22.3648 17.4454 22.977 17.699 23.4283 18.1503C23.8797 18.6017 24.1332 19.2138 24.1332 19.8521V22.2588C24.1332 22.8971 23.8797 23.5092 23.4283 23.9605C22.977 24.4119 22.3648 24.6654 21.7266 24.6654H19.3199C18.6816 24.6654 18.0695 24.4119 17.6181 23.9605C17.1668 23.5092 16.9132 22.8971 16.9132 22.2588V19.8521Z" fill="white" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Appropriations</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex-w-50 px-4 py-2 flex items-center rounded-md hover:bg-[#2C56A6] active:bg-[#4F74BB]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M13.0503 6.06856C13.5634 3.95501 16.5693 3.95501 17.0824 6.06856C17.4138 7.43389 18.9781 8.08182 20.1779 7.35076C22.0352 6.21907 24.1607 8.34454 23.029 10.2019C22.2979 11.4017 22.9458 12.9659 24.3112 13.2974C26.4247 13.8105 26.4247 16.8163 24.3112 17.3294C22.9458 17.6609 22.2979 19.2251 23.029 20.4249C24.1607 22.2823 22.0352 24.4077 20.1779 23.276C18.9781 22.545 17.4138 23.1929 17.0824 24.5582C16.5693 26.6718 13.5634 26.6718 13.0503 24.5582C12.7188 23.1929 11.1546 22.545 9.95479 23.276C8.09747 24.4077 5.972 22.2823 7.10369 20.4249C7.83475 19.2251 7.18682 17.6609 5.82149 17.3294C3.70794 16.8163 3.70794 13.8105 5.82149 13.2974C7.18682 12.9659 7.83475 11.4017 7.10369 10.2019C5.972 8.34454 8.09747 6.21907 9.95479 7.35076C11.1546 8.08182 12.7188 7.43389 13.0503 6.06856Z" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M18.6763 15.3134C18.6763 17.3071 17.0601 18.9234 15.0663 18.9234C13.0726 18.9234 11.4563 17.3071 11.4563 15.3134C11.4563 13.3197 13.0726 11.7034 15.0663 11.7034C17.0601 11.7034 18.6763 13.3197 18.6763 15.3134Z" stroke="white" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="flex items-bot ms-3 whitespace-nowrap text-white text-normal font-normal font-['Nunito Sans'] leading-7">Settings</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <!-- WELCOME! -->
    <div class="relative w-[500px] h-80 rounded-lg shadow border border-gray border-opacity-20 bg-cover bg-center ml-[280px] mt-[142px]" style="background-image: url('css/images/background.png')">
        <div class="absolute inset-0 bg-gray-300 bg-opacity-90 rounded-lg"></div> 
        <img class="w-[500px] h-[320px] opacity-40 mx-auto mt-auto" src="css/images/background.png">
        <div class= "absolute inset-0 flex flex-col items-start ml-6 justify-top text-left left-2 mt-8">
            <div class="flex items-center">
                <img class="w-[50px] h-[50px]" src="css/images/image 5.png">
                <img class="h-[40px] ml-2" src="css/images/image 4.png">
            </div>
            <h1 class="text-2xl font-extrabold ml-2 mt-3 mb-3 text-blue-800 z-10 relative">PLM Budget System</h1>
            <h2 class="text-[55px] font-extrabold ml-2 mb-1 text-blue-800 z-10 relative">Welcome,</h1>
            <p class= "text-2xl font-bold ml-2 text-cyan-800 z-10 relative">Maribeth Solquio.</p>
        </div>
    </div>
    
    <!-- Status of Appropriations -->
    <div class="flex flex-col w-[500px] h-80 rounded-lg shadow border border-gray border-opacity-20 ml-[280px] mt-5">
        <div class="flex items-center ml-5 mt-5">
            <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
            <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Status of Appropriations</h1>
        </div>
        <h2 class="text-[15px] font-extrabold ml-14 text-cyan-800">Personal Services</h2>
        <img class="flex justify-center items-center ml-12 w-[400px] h-[350px] mr-1" src="css/images/pie.png">
    </div>

    <!-- Project Procuremente Management Plan -->
    <div class="w-[500px] h-80 rounded-lg shadow border border-gray border-opacity-20 ml-[805px] mt-[-321px]">
        <div class="flex items-center ml-5 mt-5">
            <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
            <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Project Procurement Management Plan</h1>
        </div>
        <h2 class="text-[15px] font-extrabold ml-14 text-cyan-800">Overall Budget</h2>
        <img class="flex justify-center items-center ml-12 w-[390px] h-[240px] mr-1" src="css/images/line.png">
    </div>

    <!-- Payment Request Form -->
    <div class="w-[500px] h-[150px] rounded-lg shadow border border-gray border-opacity-20 ml-[805px] mt-[-491px]">
        <div class="flex items-center ml-5 mt-3">
            <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
            <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Payment Request Form</h1>
        </div>
        <div class="flex items-center justify-center ml-6 mt-2  w-[150px] h-[65px] bg-blue-800 text-[13px] text-white rounded-md p-4">
            <h1 class="text-[11px] text-white">Budget Utilization Request</h1>
        </div>
        <div class="flex items-center justify-center">
            <div class="flex items-center justify-center ml-4 mt-[-65px]  w-[150px] h-[65px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <h1 class="text-[11px] text-white">Amendment Form</h1>
            </div>
        </div>
    </div>
    
    <!-- Budget Call Forms -->
    <div class="w-[500px] h-[150px] rounded-lg shadow border border-gray border-opacity-20 ml-[805px] mt-[-320px]">

        <div class="flex items-center ml-5 mt-1">
            <img class="w-[30px] h-[30px] mr-1" src="css/images/icon1.png">
            <h1 class="text-[20px] font-extrabold text-blue-800 mb-1">Budget Call Forms</h1>
        </div>
        <div class="flex items-center ml-5 mt-1">                    
            <div class="flex items-center justify-center mt-1 w-[150px] h-[45px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <h1 class="text-[11px] text-white">Activity Justification</h1>
            </div>
            <div class="flex items-center justify-center mt-1 ml-2 w-[150px] h-[45px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <h1 class="text-[11px] text-white">Personnel Schedule</h1>
            </div>
            <div class="flex items-center justify-center mt-1 ml-2 w-[150px] h-[45px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <h1 class="text-[11px] text-white">Project Procurement Management Plan</h1>
            </div>
        </div>
        <div class="flex items-center ml-5 mt-">                    
            <div class="flex items-center justify-center mt-1 w-[150px] h-[45px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <h1 class="text-[11px] text-white">Personal Services</h1>
            </div>
            <div class="flex items-center justify-center mt-1 ml-2 w-[150px] h-[45px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <h1 class="text-[11px] text-white">MOOE</h1>
            </div>
            <div class="flex items-center justify-center mt-1 ml-2 w-[150px] h-[45px] bg-blue-800 text-[13px] text-white rounded-md p-4">
                <h1 class="text-[11px] text-white   ">Capital Outlay</h1>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="w-[350px] h-80 rounded-lg shadow border border-gray border-opacity-20 ml-[1330px] mt-[-152px]">
        <div class="flex items-center border-b-2">
            <img class="w-[18px] h-[18px] ml-3" src="css/images/icon2.png">
            <h1 class="flex items-top justify-left text-[15px] font-bold ml-1 mt-2 mb-2">Recent Activities</h1>
        </div>  
        <div class="flex items-center h-[70px] border-b-2">
            <div>
                <h1 class="flex items-top justify-left text-[15px] font-extrabold ml-9">Maribeth Solquio</h1>
                <h2 class="flex items-top justify-left text-[11px] font-bold ml-9">Edited Status of Appropriation</h2>
                <div class="flex items-top"> 
                    <h3 class="flex items-top justify-left text-[11px] ml-9">15 minutes ago</h3>
                    <h4 class="flex items-top justify-left text-[11px] text-blue-800 underline ml-[145px]">View form</h4>
                </div>
            </div> 
        </div>  
        <div class="flex items-center h-[70px] border-b-2">
            <div>
                <h1 class="flex items-top justify-left text-[15px] font-extrabold ml-9">Maribeth Solquio</h1>
                <h2 class="flex items-top justify-left text-[11px] font-bold ml-9">Edited Status of Appropriation</h2>
                <div class="flex items-top"> 
                    <h3 class="flex items-top justify-left text-[11px] ml-9">15 minutes ago</h3>
                    <h4 class="flex items-top justify-left text-[11px] text-blue-800 underline ml-[145px]">View form</h4>
                </div>
            </div> 
        </div>  
        <div class="flex items-center h-[70px] border-b-2">
            <div>
                <h1 class="flex items-top justify-left text-[15px] font-extrabold ml-9">Maribeth Solquio</h1>
                <h2 class="flex items-top justify-left text-[11px] font-bold ml-9">Edited Status of Appropriation</h2>
                <div class="flex items-top"> 
                    <h3 class="flex items-top justify-left text-[11px] ml-9">15 minutes ago</h3>
                    <h4 class="flex items-top justify-left text-[11px] text-blue-800 underline ml-[145px]">View form</h4>
                </div>
            </div> 
        </div>  
        <div class="flex items-center h-[70px] border-b-2">
            <div>
                <h1 class="flex items-top justify-left text-[15px] font-extrabold ml-9">Maribeth Solquio</h1>
                <h2 class="flex items-top justify-left text-[11px] font-bold ml-9">Edited Status of Appropriation</h2>
                <div class="flex items-top"> 
                    <h3 class="flex items-top justify-left text-[11px] ml-9">15 minutes ago</h3>
                    <h4 class="flex items-top justify-left text-[11px] text-blue-800 underline ml-[145px]">View form</h4>
                </div>
            </div> 
        </div>  
        
        
    </div>  
             
    <!-- Calendar -->
    <div class="flex items-top justify-center w-[350px] h-80 rounded-lg shadow border border-gray border-opacity-20 ml-[1330px] mt-[22px]">
        <button class="h-10 rounded-lg shadow border border-gray border-opacity-20 mt-3 text-black font-bold py-2 px-4 rounded">
        &lt; 
        </button>
        <h1 class="text-2xl font-bold mb-4 mt-4 ml-12">January</h1>
        <button class="h-10 rounded-lg shadow border border-gray border-opacity-20 mt-3 ml-12 text-black font-bold py-2 px-4 rounded">
        &gt; 
        </button>
    </div>
</div>
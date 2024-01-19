<template>

<body class="w-full h-full bg-white">
    
    <div class="w-full h-screen flex-nowrap justify-center">

        <div class="object-fill w-full h-4/5 flex items-center justify-center" 
          style="background-image: url('storage/homeBackground.png'); 
          background-repeat: no-repeat; 
          background-size: cover;">

      
          <div class="w-3/5 h-full">
                  
          </div>


          <div class="w-2/5 h-full flex-nowrap">
                
                <div class="w-full h-2/5">

                </div>

                <div class="h-3/5 flex-nowrap justify-center text-center mr-12 ">

                    <div class="shadow-9xl drop-shadow-lg w-full font-bold text-white text-3xl flex-nowrap">
                      <span class="">Book professionals lores epsum dolores doctor corles Book professionals lores epsum dolores doctor corles  </span>
                    </div>

                    <div class=" w-full font-bold text-3xl flex-nowrap">
                      <Link href="/Professionals"> <button class="shadow-2xl bg-white text-2xl font-bold rounded-xl h-1/4 w-2/4 hover:bg-green-500 hover:text-white"> Available Professionals now  </button> </Link>
                    </div>

                </div>

                
          </div>

          

        </div>

        <div class="bg-white w-full h-1/5 ">

                <div class="w-full h-2/5 bg-white flex items-center justify-center font-bold text-4xl text-red-500 "> 
                   Note: This Project is on hold for now due to front-end issues
                </div>

                <div class="w-full h-3/5 bg-white flex items-center justify-between">

                    <Link href="Professionals"  class=" w-full h-full flex items-center justify-center"> 
                      <img class="object-fill w-2/4 h-full " src="/storage/law.png">
                    </Link>

                    <Link href="Professionals"  class=" w-full h-full flex items-center justify-center"> 
                        <img class="object-fill w-2/4 h-full " src="/storage/engineering.png"> 
                    </Link>
                     
                    <Link href="Professionals"  class=" w-full h-full flex items-center justify-center"> 
                        <img class="object-fill w-2/4 h-full " src="/storage/medicine.png"> 
                    </Link>

                </div>
        </div> 
        

    </div>  

  
     
    

</body>


</template>

<script setup>

import { Link } from '@inertiajs/vue3'
defineProps(['data'])
</script>


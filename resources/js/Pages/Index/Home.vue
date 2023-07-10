<template>

<body class="w-full h-full bg-white">
    
    <div class="w-full h-screen flex-nowrap justify-center">

        <div class="object-fill w-full h-4/5 flex items-center justify-center" 
        style="background-image: url('https://scontent.fdvo2-2.fna.fbcdn.net/v/t1.15752-9/357632976_251609360935752_3103613818120488316_n.jpg?stp=dst-jpg_s2048x2048&_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_ohc=XptaT54CnPgAX8a-3_5&_nc_ht=scontent.fdvo2-2.fna&oh=03_AdTvmX_FB1wSWqZc2QGFlHre0q3zYNrvJDI5y05MWbb_1A&oe=64C5F124'); 
        background-repeat: no-repeat; 
        background-size: cover;">

      
          <div class="w-3/5 h-full">
                  
          </div>


          <div class="w-2/5 h-full flex-nowrap">
                
                <div class="w-full h-2/5">

                </div>

                <div class="h-3/5 flex-nowrap justify-center text-center mr-12 ">

                    <div class="mr-12 shadow-9xl drop-shadow-lg w-full pt-4 font-bold text-white text-3xl flex-nowrap">
                      <span class="mr-12">Book professionals lores epsum dolores doctor corles Book professionals lores epsum dolores doctor corles  </span>
                    </div>

                    <div class=" w-full pt-4 font-bold text-3xl flex-nowrap">
                      <button class="shadow-2xl bg-white text-2xl font-bold rounded-xl h-16 w-96"> Available Professionals now  </button>
                    </div>

                </div>

                
          </div>

          

        </div>

        <div class="bg-white w-full h-1/5 ">

                <div class="w-full h-2/5 bg-white flex items-center justify-center font-bold text-4xl "> 
                    Consultation for Every Need
                </div>

                <div class="w-full h-3/5 bg-white flex items-center justify-between">

                     <div class=" w-full h-full flex items-center justify-center"> 
                        <img class="object-fill w-2/4 h-full " src="/storage/law.png"> 
                     </div>

                     <div class=" w-full h-full flex items-center justify-center"> 
                        <img class="object-fill w-2/4 h-full " src="/storage/engineering.png"> 
                     </div>
                     
                     <div class=" w-full h-full flex items-center justify-center"> 
                        <img class="object-fill w-2/4 h-full " src="/storage/medicine.png"> 
                     </div>

                </div>
        </div> 
        

    </div>  

  
     
    

</body>


</template>

<script setup>

import { Link } from '@inertiajs/vue3'
defineProps(['data'])
</script>


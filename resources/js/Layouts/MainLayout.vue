<template>


 <header class="dark:border-gray-700 bg-green-500 dark:bg-gray-800 w-full h-24">
    
    <div class="container mx-auto">
      <nav class="flex items-center justify-between ">
        <div class="text-lg font-medium">
          GBK
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
            Header Content 2
        </div>

        <div class="flex items-center gap-4">
            Header Content 3
        </div>
      </nav>
    </div>

  </header>

<main class="h-screen w-full">  

    <slot> Default </slot> 

    <footer class="w-full h-1/2 bg-gray-300">
      
    <div class="w-full h-full flex-nowrap">

      <div class="w-full h-1/5 flex items-center justify-center font-bold text-2xl"> 
         GBK (Logo Here)
      </div>

      <div class="w-full h-4/5 flex"> 

        <div class="w-1/2 h-full flex items-center justify-between">
          <div class="w-3/4 h-full flex justify-between">

           <div class="w-1/3 mt-6 ml-12 text-white">
             Community <br> Discord <br> Reddit <br> Github <br> Guide  
           </div>

           <div class="w-1/3 mt-6 ml-12 text-white"> 
            Trending Services <br> Software Development <br> Legal Services <br> Medicine <br> Graphic Design <br> Marketing 
           </div>

           <div class="w-1/3 mt-6 ml-12 text-white">
            About Us <br> Open Source <br> Github Profile <br> About Us <br>  
           </div>

          </div>
        </div>

        <div class="w-1/2 h-full"> 1 </div>
      </div>

    </div>  
    </footer>


</main>






</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>


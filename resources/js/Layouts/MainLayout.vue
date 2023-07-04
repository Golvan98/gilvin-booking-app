<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
          <div class="w-3/4 h-full flex justify-between ml-12">

           <div class="w-1/3 mt-6 ml-12 text-white">
             Community <br> Discord <br> Reddit <br> Github <br> Guide  
           </div>

           <div class="w-1/3 mt-6 ml-12 text-white"> 
            Trending Services <br> Software Development <br> Legal Services <br> Medicine <br> Graphic Design <br> Marketing 
           </div>

           <div class="w-1/3 mt-6 ml-12 text-white">
            About Us <br> Open Source <br> Github Profile <br> Contact Us <br>  
           </div>

          </div>
        </div>

        <div class="w-1/2 h-full text-white text-1xl "> 
          <div class="mt-5 border-t"> GBK is a booking app created by Gilvin Zalsos as his magnum opus in his endeavor of mastering web development using laravel, inertia, * vuejs. </div>
          <div class="mt-5"> This project will likely stay on going as I intend to test numerous features. Features can be random but relevant to the purpose of this project (which is to function as a 1v1 consulting booking app for all kinds of professionals) </div>
          <div class="mt-2"> This project will likely stay on going as I intend to test numerous features. Features can be random but relevant to the purpose of this project (which is to function as a 1v1 consulting booking app for all kinds of professionals) </div>

        </div>
      </div>

    </div>  
    </footer>


</main>






</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>


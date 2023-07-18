<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <header class="dark:border-gray-700 bg-green-400 dark:bg-gray-800 w-full h-24">
    
    <div class="container mx-auto">
      <nav class="flex items-center justify-between mb-4">

        <div class="w-1/3 text-3xl font-bold flex justify-between text-white mt-4"> 
          <div> <a href="/home"> 𝔾𝔹𝕂 </a></div> 
        </div>
        
        <div class="text-xl mt-6 text-white dark:text-indigo-300 font-bold text-center flex justify-between">
          <div>Services  ▼ </div>
          <div class="ml-4"> Professionals ▼ </div>
          <div class="ml-4"> Pricing </div>
        </div>

        <div class="w-1/3 flex justify-center gap-4 mt-6">
            
          <div v-if="user" class="flex justify-end ml-20">
             <div> <a href="#"> <button class="py-1 px-4 bg-white text-black rounded-xl"> {{ user.email}}</button> </a> </div>
             <div> <Link href='logout' method="delete" as="button" class="ml-2 py-1 px-4 bg-white text-black rounded-xl"> Logout </Link> </div>
          </div>

          <div v-else-if="professional" class="flex justify-end ml-20">
             <div> <a href="#"> <button class="py-1 px-4 bg-white text-black rounded-xl"> {{ user.email}}</button> </a> </div>
             <div> <Link href='logout' method="delete" as="button" class="ml-2 py-1 px-4 bg-white text-black rounded-xl"> Logout </Link> </div>
          </div>

          <div v-else class="flex justify-end ml-20">
              <a href="/login"> <button class="py-1 px-4 bg-white text-black rounded-xl"> Sign in</button> </a>
              <a href="/register"> <button class="ml-2 py-1 px-4 bg-white text-black rounded-xl"> Register </button> </a>
          </div>

        </div>
      </nav>
    </div>

  </header>

<main class="">  

    <slot> Default </slot> 

    <footer class="w-full h-1/2 bg-green-400">
      
    <div class="w-full h-full flex-nowrap">

      <div class="mt-6 w-full h-1/5 flex items-center justify-center font-bold text-4xl text-white"> 
         <div class="mt-4"> 𝔾𝔹𝕂 </div>
      </div>

      <div class="w-full h-4/5 flex text-xl"> 

        <div class="w-1/2 h-full flex items-center justify-between">
          <div class="w-3/4 h-full flex justify-between ml-12">

           <div class="w-1/3 mt-8 ml-12 text-white h-1/3">
             Community <br> Discord <br> Reddit <br> Github <br> Guide  
           </div>

           <div class="w-1/3 h-1/3 mt-8 ml-12 text-white"> 
            Trending Services <br> Software Development <br> Legal Services <br> Medicine <br> Graphic Design <br> Marketing 
           </div>

           <div class="w-1/3  h-1/3 mt-8 ml-12 text-white">
            About Us <br> Open Source <br> Github Profile <br> Contact Us <br>  
           </div>

          </div>
        </div>

        <div class="w-1/2 h-full text-white text-1xl "> 

          <div class="mt-8 border-t"> 𝔾𝔹𝕂 is a booking app created by Gilvin Zalsos as his current magnum opus in his endeavor of mastering web development using laravel, inertia, & vuejs. </div>
          <div class="mt-5"> This project will likely stay on going as I intend to test numerous features. Features can be random but relevant to the purpose of this project which is to function as a 1v1 consulting booking app for all kinds of professionals </div>
         
          <div class="mt-6 flex justify-between items-start"> 
            <div></div> 
            <div></div> 
            <a href="#"> <div class="fa fa-facebook">   </div> </a>
            <a href="#"> <div class="fa fa-twitter">    </div> </a>
            <a href="#"> <div class="fa fa-linkedin">   </div> </a>
            <a href="#"> <div class="fa fa-instagram">  </div> </a> 
            <a href="#"> <div class="fa fa-youtube">    </div> </a>
            <div></div>
            <div></div>
            <div></div>
          </div>

        </div>
      </div>

    </div>  
    </footer>


</main>






</template>

<script setup>

import { Link } from '@inertiajs/vue3'
import { reactive } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
import { useForm } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
const page = usePage()

const user = computed(() => page.props.user )




</script>


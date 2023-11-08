<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


 <header class="dark:border-gray-700 bg-green-400 dark:bg-gray-800 w-full h-24">
  
    <div class="container mx-auto">
      <nav class="flex items-center justify-between mb-4">

        <div class="w-1/3 text-3xl font-bold flex justify-between text-white mt-4"> 
          <div class="ml-16"> <a href="/home"> 𝔾𝔹𝕂 </a></div> 
          
        </div>
        
        <div class="text-xl mt-6 text-white dark:text-indigo-300 font-bold text-center flex justify-between">
         <!-- This is the center part of the header, left it here just in case I'll need it some time in the future when doing UI improvements -->
        </div>

        <div class="w-1/3 flex justify-center gap-4 mt-6">
            
          <div v-if="user" class="flex justify-end ml-20">
            
             <Link class="text-gray-500 relative pr-2 py-2 text-lg" href="/notifications">
                🔔
                <div v-if="user.notificationCount" class="absolute right-0 top-0 w-5 h-5 bg-red-700 dark:bg-red-400 text-white font-medium border border-white dark:border-gray-900 rounded-full text-xs text-center">
                  {{ user.notificationCount }} 
                </div>
              </Link>
             <div> <Link href="/userProfile"> <button class="py-1 px-4 bg-inherit text-white font-bold text-lg"> {{ user.first_name}}</button> </Link> </div>
             <div> <Link href='/logout' method="delete" as="button" class="ml-2 py-1 px-4 bg-white text-black rounded-xl"> Logout </Link> </div>
          </div>

          <div v-else-if="prof" class="flex justify-end ml-20">
            <Link class="text-gray-500 relative pr-2 py-2 text-lg" href="/professionalNotifications">
                🔔
                <div v-if="prof.notificationCount" class="absolute right-0 top-0 w-5 h-5 bg-red-700 dark:bg-red-400 text-white font-medium border border-white dark:border-gray-900 rounded-full text-xs text-center">
                  {{ prof.notificationCount }} 
                </div>
              </Link>
             <div> <Link href="/professionalProfile"> <button class="py-1 px-4 bg-inherit text-white font-bold text-lg"> {{ prof.first_name}}</button> </Link> </div>
             <div> <Link href='/logout' method="delete" as="button" class="ml-2 py-1 px-4 bg-white text-black rounded-xl"> Logout </Link> </div>
          </div>

          <div v-else class="flex justify-end ml-20">
              <a href="/login"> <button class="py-1 px-4 bg-white text-black rounded-xl"> Sign in</button> </a>
              <Link href="/createUser"> <button class="ml-2 py-1 px-4 bg-white text-black rounded-xl"> Register </button> </Link>
          </div>

        </div>
      </nav>
    </div>

  </header>

<main class="">  
  <div v-if="flashSuccess" 
  x-data="{show: true}"
     x-show="show"
     x-init="setTimeout(() => show = false, 1000)"
  class="alert fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
             {{ flashSuccess }}
  </div>
 
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
            <a href="https://www.reddit.com/user/AstronomerStandard" target="blank"><span> Reddit </span> </a>
             <br> 
             <a href="https://discord.com/users/Golvan#2381" target="blank"> <span>Discord </span> </a> 
             <br> 
            <a href="https://steamcommunity.com/profiles/76561198883444842" target="blank"><span>Steam </span> </a>
           </div>

           <div class="w-1/3 h-1/3 mt-8 ml-12 text-white"> 
          Software Development <br> Legal Services <br> Medicine <br> Graphic Design <br> Marketing 
           </div>

           <div class="w-1/3  h-1/3 mt-8 ml-12 text-white">
             <a href="https://github.com/Golvan98" target="blank"> <span> Github </span> </a>
             <br> 
             <a href="https://www.linkedin.com/in/gilvin-zalsos-213692141/" target="blank"> <span> Linkedin </span> </a>
           </div>

          </div>
        </div>

        <div class="w-1/2 h-full text-white text-1xl "> 

          <div class="mt-8 border-t"> 𝔾𝔹𝕂 is a booking app created by Gilvin Zalsos as his current magnum opus in his endeavor of mastering web development using laravel, inertia, & vuejs. </div>
          <div class="mt-5"> This project will likely stay on going as I intend to test numerous features. Features can be random but relevant to the purpose of this project which is to function as a 1v1 consulting booking app for all kinds of professionals </div>
         
          <div class="mt-6 flex justify-between items-start"> 
            <div></div> 
            <div></div> 
            <a href="https://www.facebook.com/gilvin.zalsos" target="blank"> <div class="fa fa-facebook">   </div> </a>
            <a href="https://twitter.com/GelvenZolsos" target="blank"> <div class="fa fa-twitter">    </div> </a>
            <a href="https://www.linkedin.com/in/gilvin-zalsos-213692141/" target="blank"> <div class="fa fa-linkedin">   </div> </a>
            <a href="https://www.instagram.com/realgilvinz/" target="blank"> <div class="fa fa-instagram">  </div> </a> 
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

const flashSuccess = computed(() => page.props.flash.success, )

const user = computed(() => page.props.user )
// const user = computed(() => page.props.auth.user)


const prof = computed (() => page.props.prof)

const notificationCount = computed(
  () => Math.min(page.props.user.notificationCount, 9),
)

//const professional = computed(() => page.props.professional )



</script>


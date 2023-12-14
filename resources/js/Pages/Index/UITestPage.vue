<template>

  <div id="mainDiv" class="flex items-center justify-center h-screen w-full bg-gray-100">
  
    <div id="contentContainer" class="bg-white w-2/3 h-4/6 border border-red-700">

      <div id="searchBarContainer" class="flex items-center justify-center h-1/5 w-full bg-indigo-300 ">

        <Filters2/>

      </div>

      <div id="profilesMainContainer" class="w-3/4 h-3/5 grid grid-cols-3 grid-rows-4 m-auto justify-center items-center space-x-2">

        <div class="profileBlock col-span-1 row-span-2 rounded-xl bg-green-100 m-auto border w-full h-full flex justify-between">
            <div :style="{ 
                           'background-image': 'url(\'http://127.0.0.1:8000/storage/default.png\')',
                        'background-repeat': 'no-repeat', 
                        'background-size': 'cover' 
                    }"
                    class="w-1/3 h-1/2 rounded-full 
                            inline-flex items-center justify-center 
                            bg-gray-400 text-gray-700 text-xl font-bold shadow-sm ml-2 mt-4 border border-green-300">  
            </div>

            <div class="w-full bg-red-300"> </div>
        </div>

        
     
        

        


      </div>

      <div id="paginationContainer" class="h-1/5 bg-indigo-700 flex items-center justify-center">

          <div> pagination here! </div>

      </div>

    </div>
   
  </div>
  
  
  
  
  </template>
  
  
  
  <script setup>
  import Pagination from '@/Pages/Index/Pagination.vue'
  import SendRequestModal from '@/Pages/Index/Modals/SendRequestModal.vue'
  import { ref } from 'vue'
  import { useForm } from '@inertiajs/vue3'
  import { router } from '@inertiajs/vue3'
  import Filters2 from '@/Pages/Index/Filters2.vue'
 
  
  
  
  
  
  </script>
  
  <style>
  
    .my-25-percent {
      margin-top: 25%;
      margin-bottom: 25%;
    }
  
    .mx-25-percent {
      margin-left: 25%;
      margin-right: 25%;
    }
    
  
    </style>
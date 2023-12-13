<template>

  <div id="mainDiv" class="flex items-center justify-center h-screen w-full bg-gray-100">
  
    <div id="2ndDivContainer" class="bg-white w-2/3 h-4/6 border border-red-700">

      <div id="searchBarContainer" class="flex items-center justify-center h-1/5 w-full bg-indigo-300 ">

        <Filters2/>

      </div>

      <div id="profilesMainContainer" class="w-3/4 h-3/5 grid grid-cols-3 grid-rows-4 m-auto justify-center items-center">

        <div class="profileBlock col-span-1 row-span-2 bg-red-300 m-auto border w-full h-full flex justify-center items-center">
            <div> atay </div>
        </div>
     
        <div class="profileBlock col-span-1 row-span-2 bg-red-300 m-auto border w-full h-full">
            <div> atay </div>
        </div>
        
        <div class="profileBlock col-span-1 row-span-2 bg-red-300 m-auto border w-full h-full">
            <div> atay </div>
        </div>
        
        <div class="profileBlock col-span-1 row-span-2 bg-red-300 m-auto border w-full h-full">
            <div> atay </div>
        </div>
        
        <div class="profileBlock col-span-1 row-span-2 bg-red-300 m-auto border w-full h-full">
            <div> atay </div>
        </div>
        
        <div class="profileBlock col-span-1 row-span-2 bg-red-300 m-auto border w-full h-full">
            <div> atay </div>
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
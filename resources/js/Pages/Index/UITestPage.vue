<template>

  <div id="maindiv" class="flex items-center justify-center h-screen w-full bg-red-300">
  
    <div id="2nddiv" class="bg-white w-2/3 h-4/6">

      <div id="searchbar container" class="flex items-center justify-center h-1/5 w-full bg-indigo-300 ">

        <div id="searchbar content" class="w-3/4 flex border border-red-300 items-center h-3/4">

          <div id="firstflex" class="flex-nowrap w-1/2 h-full bg-green-300 border border-white">
              <div class="h-1/2"> Users Label</div>
              <div class="h-1/2"> Filter Search Bar there</div>
          </div>

          <div id="2ndflex" class=" w-1/2 bg-green-300o">
              Submit/clear button
          </div>




        </div>

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
  import Filters from '@/Pages/Index/Filters.vue'
 
  
  
  
  
  
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
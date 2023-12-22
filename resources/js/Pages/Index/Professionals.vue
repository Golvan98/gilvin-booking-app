<template>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <div id="mainDiv" class="flex items-center justify-center h-screen w-full bg-gray-100">
  
    <div id="contentContainer" class="bg-white w-2/3 h-4/6 border border-red-700">

      <div id="searchBarContainer" class="flex items-center justify-center h-1/5 w-full bg-indigo-300 ">

       <Filters :filters="filters" :Professionals="Professionals"/>

      </div>

      <div id="profilesMainContainer" class="w-3/4 h-3/5 grid lg:grid-cols-3  lg:grid-rows-4 md:grid-cols-3 md:grid-rows-4 sm:grid-cols-2 sm:grid-rows-6 m-auto items-center space-x-2">

        <div v-for="Professionals in Professionals.data" id="profileBlock" class="mt-4 lg:col-span-1 lg:row-span-2 md:col-span-1 md:row-span-2 sm:col-span-1 sm:row-span-2 rounded-xl bg-green-100 border w-auto h-5/6 flex justify-between">

          <div class="flex w-1/3 h-full items-start justify-center ">
            <div
                    :style="{ 
                    'background-image': Professionals.profilepic
                    ? `url('http://127.0.0.1:8000/storage/${Professionals.profilepic}')`
                    : 'url(\'http://127.0.0.1:8000/storage/default.png\')',
                    'background-repeat': 'no-repeat', 
                    'background-size': 'cover' 
                    }"
                    class="lg:w-20 lg:h-20 md:w-12 md:h-12 sm:w-6 sm:h-6 rounded-full inline-flex items-center justify-center bg-gray-400 text-xl font-bold shadow-sm ml-2 mt-4 border border-green-300">                   
            </div>
          </div>


          
          <div class="flex-nowrap w-2/3 h-full justify-between mr-0.5 lg:text-base md:text-sm sm:text-xs">
  
            <div class="flex w-full h-1/2 items-center justify-start ml-2 lg:text-base md:text-sm sm:text-xs"> 
              <div class="h-1/2 w-full"> {{ Professionals.first_name }} {{ Professionals.last_name }}, 
                <span class="font-bold"> {{ Professionals.profession }} </span>
              </div>
            </div>

            <div class="flex items-center w-full h-1/2 space-x-0.5"> 
              <button @click="createRequestModal(Professionals)" data-modal-target="request-modal" data-modal-toggle="request-modal" class="w-1/2 lg:h-1/2 md:h-1/2 sm:h-full bg-white text-xs text-black font-bold rounded-lg border"> Send Request </button>
              <SendRequestModal :Professionals="Professionals" :Professional="selectedProfessional"/>
              <a :href="`/viewProfessionalProfile/${Professionals.id}`" target="_blank" class="w-1/2 lg:h-1/2 md:h-1/2 sm:h-full bg-white flex items-center justify-center text-xs text-black font-bold rounded-lg"> <button class="text-xs"> View Profile </button> </a>
            </div>
            
          </div>

        </div>



      </div>

      <div id="paginationContainer" class="h-1/5 bg-green-300 text-white  font-bold flex items-center justify-center">

        <div v-if="Professionals.data.length" class="w-full flex justify-center mt-8 mb-8 col-span-6" preserve-state>
                          <Pagination :links="Professionals.links" />
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
  const selectedProfessional = ref(null);
  
  const yawa = ref(null);
  
  function createRequestModal(Professional)
  {
    selectedProfessional.value = Professional
  }
  const filterForm = useForm({
    first_name:  null,
    profession:  null
  })
  const props = defineProps ({
    filters: Object,
    Professionals:Object,
  })
  
  
  
  
  
  
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



<template>

<div class="grid grid-cols-6 grid-rows-6 bg-gray-200 items-center justify-center h-screen w-full">

  <div class="bg-white row-start-2 row-end-6 col-start-2 col-end-6 grid grid-cols-6 grid-rows-6 items-center justify-center h-full w-full rounded-xl">
      
      <Filters :filters="filters" :Professionals="Professionals"/>

        <div class="row-span-5 bg bg-white row-start-3 row-end-6 w-full col-start-2 col-end-6 h-full grid grid-cols-6 grid-rows-6rounded-xl">
            
          
          
            <div id="firstrowofProfessionals" class="row-start-1 row-end-4 col-span-6 grid grid-cols-6 rounded-xl"> 


              <div v-for="Professionals in Professionals.data"   class="col-span-2 bg-indigo-200 rounded-xl py-1 flex justify-between border border-green-300 m-2"> 

                <div
                  :style="{ 
                      'background-image': `url('http://127.0.0.1:8000/storage/${Professionals.profilepic}')`,
                      'background-repeat': 'no-repeat', 
                      'background-size': 'cover' 
                  }"
                  class="w-24 h-24 rounded-full 
                          inline-flex items-center justify-center 
                          bg-gray-400 text-gray-700 text-xl font-bold shadow-sm ml-2 mt-4 border border-green-300">                   
                </div>

                <div  class="mt-4 flex-nowrap ml-2">

                    <div class="mt-2 text-xs font-bold">  {{ Professionals.first_name }}</div>
                    <div class="mt-2 text-xs font-bold">  {{ Professionals.profession }}</div>

                    <div class="flex justify-between">

                      <button @click="createRequestModal(Professionals)" data-modal-target="request-modal" data-modal-toggle="request-modal" class="mt-8 mr-2 text-xs text-black font-bold rounded-lg border p-0.5"> Send Request </button>
                      <SendRequestModal :Professionals="Professionals" :Professional="selectedProfessional"/>
                      <a :href="`/viewProfessionalProfile/${Professionals.id}`" target="_blank"> <button class="mt-8 text-xs text-black font-bold rounded-lg border p-0.5"> View Profile </button> </a>
                   
                    </div>

                </div>

              <div> 

                

            </div>

            
        </div>

        <div v-if="Professionals.data.length" class="w-full flex justify-center mt-8 mb-8 col-span-6" preserve-state>
                        <Pagination :links="Professionals.links" />
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
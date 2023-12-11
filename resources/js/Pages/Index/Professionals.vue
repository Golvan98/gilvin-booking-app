<template>

<div class="grid grid-cols-6 grid-rows-6 bg-gray-200 items-center justify-center h-screen w-full">

  <div class=" row-start-2 row-end-6 col-start-2 col-end-6 grid grid-cols-6 grid-rows-6 items-center justify-center h-full w-full rounded-xl border border-emerald-600">
      
      <Filters :filters="filters" :Professionals="Professionals"/>

        <div class="row-start-3 row-end-7 w-full col-start-2 col-end-6 h-full grid grid-cols-6 grid-rows-6 rounded-xl">
            
          
          
            <div id="firstrowofProfessionals" class="sm:col-span-2 md:col-span-6 lg:col-span-6 grid grid-cols-6  grid-rows-6 rounded-xl row-span-6 border border-red-300"> 


              <div v-for="Professionals in Professionals.data" class="row-span-3 col-span-2 grid grid-rows-6 grid-cols-6 sm:text-red-500 md:text-blue-500 lg:text-emerald-500 rounded-xl py-1 justify-between border bg-red-300 m-2 w-full h-full "> 

                  <div
                    :style="{ 
                          'background-image': Professionals.profilepic
                  ? `url('http://127.0.0.1:8000/storage/${Professionals.profilepic}')`
                  : 'url(\'http://127.0.0.1:8000/storage/default.png\')',
                        'background-repeat': 'no-repeat', 
                        'background-size': 'cover' 
                    }"
                    class="w-3/5 row-span-2 col-span-1 h-4/5 rounded-full 
                            flex-nowrap
                            bg-gray-400 text-gray-700 text-xl font-bold shadow-sm ml-2 mt-4 border border-green-300">                   
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
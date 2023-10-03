<template>

<div class="grid grid-cols-6 grid-rows-6 bg-gray-200 items-center justify-center h-screen w-full">

  <div class="bg-white row-start-2 row-end-6 col-start-2 col-end-6 grid grid-cols-6 grid-rows-6 items-center justify-center h-full w-full rounded-xl">
      
      <div class="row-span-1 bg-inherit col-start-2 col-end-6 flex-nowrap mt-12"> 

           <div class="w-full bg-white h-full py-4 font-bold text-2xl">   𝐔𝐬𝐞𝐫𝐬 </div> 

           <div class="w-full bg-white h-full flex justify-between items-center"> 
              <div class="w-2/6"> <input type="text" placeholder="Search bar here">  </div>
              <div class="w-auto bg-red-300">  </div>
              <div class="w-auto bg-red-300"> </div>
              <div class="w-auto bg-red-300"> </div>
              <div class="w-auto bg-red-300"> </div>

              <div class="w-auto bg-white flex items-center">
                <label for="Profession" class="mr-2"> Sort by: </label>
                <select name="Profession" id="Profession">
                  <option value="Legal"> None </option>
                  <option value="Legal"> Legal Services </option>
                  <option value="Medicine"> Medical </option>
                  <option value="Engineering"> Engineering </option>
                  <option value="Information Technology"> IT Services and Consulting </option>
                </select>
              </div>
            </div> 

        </div> 

        <div class="row-span-5 bg bg-white row-start-3 row-end-6 w-full col-start-2 col-end-6 h-full grid grid-cols-6 grid-rows-6rounded-xl">
            
          
          
            <div id="firstrowofProfessionals" class="row-start-1 row-end-4 col-span-6 grid grid-cols-6 rounded-xl"> 


              <div v-for="Professionals in Professionals.data"   class="col-span-2 bg-indigo-200 rounded-xl py-1 flex justify-between border border-green-300"> 

                <div
                  :style="{ 
                      'background-image': `url('storage/}')`, 
                      'background-repeat': 'no-repeat', 
                      'background-size': 'cover' 
                  }"
                  class="w-24 h-24 rounded-full 
                          inline-flex items-center justify-center 
                          bg-gray-400 text-gray-700 text-xl font-bold shadow-sm ml-2 mt-4 border border-green-300">                   
                </div>

                <div  class="mt-4 flex-nowrap">

                    <div class="mt-2 text-xs font-bold">  {{ Professionals.first_name }}</div>
                    <div class="mt-2 text-xs font-bold">  {{ Professionals.profession }}</div>

                    <div class="flex justify-between">
                      <button class="mt-8 mr-2 text-xs text-black font-bold rounded-lg border p-1"> Send Request </button>
                      <a :href="`/viewProfessionalProfile/${Professionals.id}`"> <button class="mt-8 text-xs text-black font-bold rounded-lg border"> View Profile </button> </a>
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

const props = defineProps ({
    Professionals:Object
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
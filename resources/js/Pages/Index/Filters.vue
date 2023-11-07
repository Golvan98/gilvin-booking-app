<template>


<form @submit.prevent="filter" class="row-span-1 bg-inherit col-start-2 col-end-6 flex-nowrap mt-12"> 

<div class="w-full bg-white h-full py-4 font-bold text-2xl">  𝐔𝐬𝐞𝐫𝐬 </div> 

<div class="w-full bg-white h-full flex justify-between items-center"> 
   <div class="w-2/6"> 
   <input v-model="filterForm.first_name" name="first_name" id="first_name" type="text"  placeholder="Search bar here">  </div>
   <div class="w-auto bg-red-300">  </div>
   <div class="w-auto bg-red-300"> </div>  
   <div class="w-auto bg-red-300"> </div>
   <div class="w-auto bg-red-300"> </div>

   <div class="w-auto bg-white flex items-center">
     <label for="profession" class="mr-2"> Sort by: </label>
     <select 
     v-model="filterForm.profession" name="profession" id="profession">
       <option value="Legal"> Legal </option>
       <option value="Doctor"> Doctor </option>
       <option value="Engineer"> Engineer </option>
       <option value="Accountant"> Accountant </option>
       <option value="IT"> IT </option>
       <option value="Tutor"> Tutor </option>
       <option value="Misc">  Misc </option>
     </select>
   </div>

   <div class="bg-white">
     <button class="bg-white text-black hover:bg-gray-500 hover:text-white font-medium p-2 rounded-md"> Submit </button>
     <button type="reset" @click="clear" class="bg-white text-black hover:bg-gray-500 hover:text-white font-medium p-2 rounded-md" >Clear</button>
   </div>
 </div> 

</form> 



</template>


<script setup>

import { useForm } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'


const props = defineProps({
    Professionals:Object,
  filters: Object,
})
const filterForm = useForm({
    first_name: props.filters.first_name ?? null,
    profession: props.filters.profession ?? null,

})


/* function filter()  {
  filterForm.get(
    router('show.professionals'),
    {
      preserveState: true,
      preserveScroll: true,
    },
  )
} */


function filter() {
  router.get('Professionals', filterForm, {
    preserveState: true, // Add the preserveState option
    preserveScroll: true, // Optionally, you can add the preserveScroll option as well
  });
}

const clear = () => {
  filterForm.first_name = null
  filterForm.profession = null
  filter()
}

</script>
<template>


<form @submit.prevent="filter" id="searchBarContent" class="w-3/4 flex items-center h-3/4 justify-center">

  <div id="searchBar" class="w-1/3 h-full flex justify-center items-center">
      <div class="flex items-center justify-center w-1/2 h-1/2"> 
        <div class="w-full h-full items-center lg:font-medium md:text-sm sm:text-xs"> 
         <input v-model="filterForm.first_name" name="first_name" id="first_name"  class="w-full h-full" type="text" placeholder="search user">
         </div>
      </div>
  </div>
  
  <div id="sortBy" class="w-1/3 h-full flex justify-end items-center">
      <div class=" w-1/2 h-1/2 flex items-center justify-end"> 
        <label for="profession" class="mr-2"> Sort by: </label>
        <select v-model="filterForm.profession" name="profession" id="profession">
        <option value="Legal"> Legal </option>
        <option value="Doctor"> Doctor </option>
        <option value="Engineer"> Engineer </option>
        <option value="Accountant"> Accountant </option>
        <option value="IT"> IT </option>
        <option value="Tutor"> Tutor </option>
        <option value="Misc">  Misc </option>
        </select>
      </div>
  </div>

  <div id="SubmitClearButtons" class="w-1/3 h-full flex items-center justify-center">
    <div class="w-1/2 h-1/2 flex items-center justify-center space-x-1"> 
    <button class="h-5/6 bg-white rounded-sm sm:text-xs md:text-sm lg:text-sm sm:w-full md:w-full lg:w-1/2 sm:p-1 md:p-0.5 lg:p-0.5"> Submit </button>
    <button type="reset" @click="clear" class="w-1/2 h-5/6 bg-white rounded-sm sm:text-xs md:text-sm lg:text-sm sm:w-full md:w-full lg:w-1/2 sm:p-1 md:p-0.5 lg:p-0.5"> Clear</button>
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
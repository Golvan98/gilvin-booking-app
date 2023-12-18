<template>


<form id="searchBarContent" class="w-3/4 flex items-center h-3/4 justify-center">

  <div id="searchBar" class="w-1/3 h-full flex justify-center items-center">
      <div class="flex items-center justify-center w-full h-3/4"> 
        <div class="w-1/2 h-3/4 items-center lg:font-medium md:text-sm sm:text-xs"> 
         <input class="w-full h-full" type="text" placeholder="search user">
         </div>
      </div>
  </div>

  <div id="sortBy" class="w-1/3 h-full bg-red-300 flex justify-center items-center">
      hello
  </div>

  <div id="SubmitClearButtons" class="w-1/3 h-full bg-red-300 flex items-center">
      submitMe
  </div>
    

</form>
    
    
    
    </template>
    
    
    <script setup>
    
   /* import { useForm } from '@inertiajs/vue3'
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
    
    
  /*  function filter() {
      router.get('Professionals', filterForm, {
        preserveState: true, // Add the preserveState option
        preserveScroll: true, // Optionally, you can add the preserveScroll option as well
      });
    }
    
    const clear = () => {
      filterForm.first_name = null
      filterForm.profession = null
      filter()
    } */
    
    </script>
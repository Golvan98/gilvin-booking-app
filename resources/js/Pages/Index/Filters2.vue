<template>


<form id="searchBarContent" class="w-3/4 flex items-center h-3/4">

    <div id="firstFlex" class="flex-nowrap w-1/2 h-full bg-inherit mx-4">

        <div class="h-1/2 flex items-center justify-start font-bold text-lg">𝐔𝐬𝐞𝐫𝐬</div>
        <div class="h-1/2"> <input type="text" class="lg:w-3/4 md:w-1/2 sm:w-1/4" placeholder="Filter Search Bar there"> </div>

    </div>

    <div id="2ndFlex" class="h-full flex-nowrap w-1/2">

        <div id="aboveSelectSectionFiller" class="h-1/2">  </div>

        <div id="selectSection" class="h-1/2 flex">  

            <div id="selectType" class="w-1/2 flex-nowrap"> 

                <Label for="profession" class="lg:h-full md:h-1/2 sm:h-1/4 lg:w-1/4 sm:w-1/6 md:w-1/6 sm:text-xs md:text-base lg:text-base">  
                        Sort by: 
                </Label>

                <Select class="lg:w-3/4 md:w-3/6 sm:w-2/6">
                        <option value="Legal"> Legal </option>
                        <option value="Doctor"> Doctor </option>
                        <option value="Engineer"> Engineer </option>
                        <option value="Accountant"> Accountant </option>
                        <option value="IT"> IT </option>
                        <option value="Tutor"> Tutor </option>
                        <option value="Misc">  Misc </option> 
                </Select>

            </div>

            <div id="selectButtons" class="w-1/2 flex justify-end font-bold"> 
                <button class="w-1/3"> Submit </button>
                <button class="w-1/3"> Clear </button> 
            </div>
            
        </div>

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
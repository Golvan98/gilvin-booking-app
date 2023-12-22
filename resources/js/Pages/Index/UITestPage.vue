<template>

  <div class="grid grid-cols-6 grid-rows-6 bg-gray-200 items-center justify-center h-screen w-full overflow-auto">
  
    hello, cleared this for new modal attempts
    
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
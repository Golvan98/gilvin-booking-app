<template>
 <!-- Main modal -->
 <div id="edit-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
      <div class="bg-green-300 relative rounded-lg shadow dark:bg-gray-700">
         <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close modal</span>
        </button>

          <div class="px-6 py-6 lg:px-8">
          <h3 class="mb-4 text-xl font-bold text-white"> Edit Request </h3>
          <form @submit.prevent="editModal" class="space-y-6" action="#">
              <div>
              <label for="request" class="block mb-2 text-sm font-medium text-black"> Request Context  </label>
              <input type="text" v-model="editForm.request" name="request" id="request" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
              </div>

                <div>
                <label for="request_schedule_start" class="block mb-2 text-sm font-medium text-black"> Appoint Start Time </label>
                <input type="datetime-local" v-model="editForm.request_schedule_start" name="request_schedule_start" id="request_schedule_start"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>

                <div>
                <label for="request_schedule" class="block mb-2 text-sm text-black font-bold"> Appoint End Time  </label>
                <input type="datetime-local" v-model="editForm.request_schedule_end" name="request_schedule_end" id="request_schedule_end"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                                                               
                <button type="submit" data-modal-hide="edit-modal" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Confirm </button>
                                                                
          </form>
          </div>
      </div>
    </div>
 </div> 

</template>

<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3'
import { reactive } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
import { useForm } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
import Pagination from '@/Pages/Index/Pagination.vue'
import editRequestModal from '@/Pages/Index/editRequestModal.vue'



const props = defineProps (
  { 
    request:Object,
    consultants: Object
  
  })

  const editForm = useForm(
    {
        request:null,
        request_schedule_start:null,
        request_schedule_end:null
    }
  )
  function editModal() {
  console.log('Form submitted:', editForm.value);

  // Construct the dynamic URL with the appointment request ID
  const dynamicUrl = `editRequest/${props.request.id}`;

  // Make the POST request using the dynamic URL
  router.post(dynamicUrl, editForm);
}

</script>
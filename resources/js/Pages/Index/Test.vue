<template>



<div class="ml-4 mt-2 h-1/6 text-white">  <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"  class="bg-red-700 px-2 py-1 rounded-sm">  Delete Account </button>  </div>
           <br> <br> <br> <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div id="popup-modal" tabindex="-1" class="justify-center bg-inherit fixed top-0 left-0 right-0 z-50 hidden p-4 h-3/4">
    <div class="relative w-1/4 mx-auto bg-white overflow-y-auto md:inset-0 h-[calc(100%-3rem)]">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-6 text-center max-h-[400px]">
               
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this profile?
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  
                
                </h3>
                <Link href="/deleteUser" method="delete" as="button"><button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Yes, I'm sure
                    
                </button> </Link>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
            </div>
        </div>
    </div>
</div>







</template>


<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'
  import { reactive } from 'vue'
  import { usePage } from '@inertiajs/vue3'
  import { computed } from 'vue'



</script>
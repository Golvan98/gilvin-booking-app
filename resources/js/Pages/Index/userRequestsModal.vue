<template>
<div  id="requests-modal" tabindex="-1" class="justify-center bg-inherit fixed top-0 left-0 right-0 z-50 hidden p-4 h-3/4" preserve-state >
            <div class="relative w-1/4 mx-auto bg-white overflow-y-auto md:inset-0 h-[calc(100%-3rem)]">
                <div class="relative bg-white  dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="requests-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    
                    <div class="p-6 text-center max-h-[400px]">
                      
                        <h3 class="mb-5 text-lg text-white font-bold bg-blue-500 py-2"> Appointment Requests </h3>

                            <div v-for="(pendingRequests) in pendingRequests.data" id="modalcontent" class="bg-white flex-nowrap justify-center items-center rounded-xl border border-gray-300 mb-2 shadow">

                            <div class="mt-4 flex justify-start ml-2 font-bold"> {{ pendingRequests.created_at}}  </div>

                            <div class="w-full h-auto flex-nowrap"> 
                                    <div v-for="(consultants) in consultants" class="flex justify-start ">  <span class="ml-2" v-if="consultants.id == pendingRequests.by_professional_id"> {{ consultants.first_name }} {{ consultants.last_name }} , {{ consultants.profession }}</span> </div>

                                    <div class="h-auto bg-white flex-nowrap justify-start items-start mt-2 mb-4 text-left">
                                        <div class="mx-2"> {{ pendingRequests.request }} </div> 
                                    </div> 
                            </div>

                            <div class="flex justify-between font-bold mb-2">
                              <a :href="`deleteRequest/${pendingRequests.id}`" target="_blank"> <div class="ml-1 mr-2 text-sm text-red-500" preserve-state>  Reject Request </div>  </a>    
                              <button data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="ml-1 mr-2 text-sm text-blue-500">  Edit Request </button>                  
                                            <!-- Modal toggle -->
                                            <button data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                            Toggle modal
                                            </button>

                                            <!-- Main modal -->
                                            <div id="edit-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                <div class="relative w-full max-w-md max-h-full">
                                                    <!-- Modal content -->
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal">
                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="px-6 py-6 lg:px-8">
                                                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                                                            <form class="space-y-6" action="#">
                                                                <div>
                                                                    <label for="request" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Request Context </label>
                                                                    <input type="text" name="request" id="request" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                                                                </div>
                                                                <div>
                                                                    <label for="request_schedule_start" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Appoint Start Time </label>
                                                                    <input type="datetime-local" name="request_schedule" id="request_schedule"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                                </div>
                                                                <div>
                                                                    <label for="request_schedule" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Appoint End Time </label>
                                                                    <input type="datetime-local" name="request_schedule_end" id="request_schedule"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                                                </div>
                                                               
                                                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                                                                
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 

                            </div>

                     </div>
                        
                            
                        

                        <div v-if="pendingRequests.data.length" class="w-full flex justify-center mt-8 mb-8" preserve-state>
                          <Pagination :links="pendingRequests.links" />
                        </div>

                        
                            

                      

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







const pops = defineProps (
  { 
    pendingRequests:Object,
    consultants: Object
  
  })

</script>
<template>

<div  id="requests-modal" tabindex="-1" class="justify-center bg-inherit fixed top-0 left-0 right-0 z-50 hidden p-4 h-3/4" preserve-state >
            <div class="relative w-1/4 mx-auto bg-white overflow-y-auto md:inset-0 h-[calc(100%-3rem)]">
                <div class="relative bg-white  dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="requests-modal">
                    <a href="professionalProfile">     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg> 
                    </a>
                        <span class="sr-only">Close modal</span>
                    </button>
                    
                    <div class="p-6 text-center max-h-[400px]">
                      
                        <h3 class="mb-5 text-lg text-white font-bold bg-blue-500 py-2"> Appointment Requests</h3>

                            <div v-for="(pendingRequests) in pendingRequests.data" id="modalcontent" class="bg-white flex-nowrap justify-center items-center rounded-xl border border-gray-300 mb-2 shadow">

                            <div class="mt-4 flex justify-start ml-2 font-bold"> {{ requests.created_at}}</div>

                            <div class="w-full h-auto flex-nowrap"> 
                                    <div v-for="(consultees) in consultees" class="flex justify-start ">  <span class="ml-2" v-if="consultees.id == pendingRequests.by_user_id"> {{ consultees.first_name }} {{ consultees.last_name }}</span> </div>

                                    <div class="h-auto bg-white flex-nowrap justify-start items-start mt-2 mb-4 text-left">
                                        <div class="mx-2"> {{ pendingRequests.request }} </div> 
                                    </div> 
                            </div>

                            <div class="flex justify-between font-bold mb-2">
                              <a :href="`rejectRequest/${pendingRequests.id}`" class="ml-2" target="_blank"> <div class="ml-1 text-sm text-red-500" preserve-state>  Reject Request </div>  </a>
                                    
                              <a :href="`approveRequest/${pendingRequests.id}`" class="mr-2" target="_blank"> <div class="ml-2 mr-2 text-sm text-green-500">  Approve Request </div> </a>      
                               
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
    import Bio from '@/Pages/Index/Bio.vue'
    import Pagination from '@/Pages/Index/Pagination.vue'
  



   const props = defineProps({
    pendingRequests: Object,
    consultees: Object,
    requests: Object
});
    </script>
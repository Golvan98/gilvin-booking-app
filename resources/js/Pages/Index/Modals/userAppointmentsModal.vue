<template>

    <div  id="appointments-modal" tabindex="-1" class="justify-center bg-inherit fixed top-0 left-0 right-0 z-50 hidden p-4 h-3/4" preserve-state >
                <div class="relative w-1/4 bg-white overflow-x-auto overflow-y-auto md:inset-0 h-[calc(100%-3rem)]">
                    <div class="relative bg-white  dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="appointments-modal">
                        <a href="userProfile"> 
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                        </a>
                            <span class="sr-only">Close modal</span>
                        </button>
                        
                        <div class="p-6 text-center max-h-[400px]">
                          
                            <h3 class="mb-5 text-lg text-white font-bold bg-blue-500 py-2"> Appointments </h3>
    
                                <div v-for="(appointment) in appointments.data" id="modalcontent" class="bg-white flex-nowrap justify-center items-center rounded-xl border border-gray-300 mb-2 shadow">
    
                                <div class="mt-4 flex justify-start ml-2 font-bold"> Schedule: {{ formatDate(appointment.appointment_schedule_start)}} - {{ formatDate(appointment.appointment_schedule_end)}} </div>
                                <div class="font-bold"> Status: {{ appointment.appointment_status }} </div>
                                <div class="w-full h-auto flex-nowrap"> 
                                        <div class="flex justify-start ">    
                                            <span class="ml-2" v-if="showFullText || appointment.request.length <= 50">{{ appointment.request }}</span>
                                            <span class="ml-2" v-else> {{ showFullText ? appointment.request : appointment.request.substring(0, 50) + '...' }}</span>
    
                                        
                                        </div>
                                        
                                        <div v-for="(consultant) in consultants" class="h-auto bg-white flex-nowrap justify-start items-start mt-2 mb-4 text-left">
                                            <div v-if="consultant.id == appointment.by_professional_id" class="mx-2">Consultant: {{consultant.first_name}} , {{ consultant.profession }}</div> 
                                        </div> 
                                        
                                </div>
    
                                <div class="flex justify-between font-bold mb-2">
                                 <!--    <a :href="`cancelAppointment/${appointment.id}`"> -->
                                <button @click="openCancelModal(appointment)" class="ml-2 mr-2 text-sm text-red-500" data-modal-target="cancel-modal" data-modal-toggle="cancel-modal" preserve-state>  Cancel Appointment  </button>    
                                               <AppointmentCancelModal :appointment="appointment" :selectedRequest="selectedRequest"/>
                                    <!-- Modal toggle -->
                                    <button @click="showFullText = !showFullText" v-if="appointment.request.length > 50" class="mr-4 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        {{ showFullText ? 'Read Less' : 'Read More' }}
                                    </button>
    
                                    
    
                                               
    
                                </div>
    
                         </div>
                            
                            <div v-if="appointments.data.length" class="w-full flex justify-center mt-8 mb-8" preserve-state >
                              <Pagination :links="appointments.links" />
                            </div>
                            
    
                           
                            
                                
    
                          
    
                        </div>
                    </div>
                </div>
            </div>
    
    
    </template>
    
    
    
    <script setup>
    
    const showFullText = ref(false); // Initialize it to false to hide the full text initially.
    
    import { ref } from 'vue'
    import { defineProps } from 'vue';
    import { Link } from '@inertiajs/vue3'
    import { reactive } from 'vue'
    import { usePage } from '@inertiajs/vue3'
    import { computed } from 'vue'
    import { useForm } from '@inertiajs/vue3'
    import { router } from '@inertiajs/vue3'
    import Pagination from '@/Pages/Index/Pagination.vue'
    import AppointmentCancelModal from '@/Pages/Index/Modals/AppointmentCancelModal.vue'


    import { format } from 'date-fns';
    import moment from 'moment';

const formatDate = (dateString) => {
  const date = new Date(dateString);
    return moment(date).format('MMMM DD, h:mmA')
};
    
    const props = defineProps (
      { 
        appointments:Object,
        consultants: Object
      })

      
const selectedRequest = ref(null);
function openCancelModal(appointment) {  //(appointment could be anything, as long as you do also do selectedRequest.value=anything and openCancelModal(anything))
  console.log('openEditModal function called with request:', appointment);
  selectedRequest.value = appointment;
}
    
     
    
    </script>
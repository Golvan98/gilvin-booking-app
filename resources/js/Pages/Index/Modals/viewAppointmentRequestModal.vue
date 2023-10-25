<template>

  
    <div id="viewAppointmentRequestModal" class="hidden z-50 fixed inset-0 overflow-x-hidden overflow-y-auto rounded-lg flex-nowrap justify-center">
      
        <div class="h-1/3 w-1/4 bg-green-300 text-white">
            <div v-if="AppointmentRequest" class="h-1/6 flex items-center justify-center text-white font-bold text-xl">
                 Appointment # {{ AppointmentRequest.id }}
            </div>
    
            <div v-if="AppointmentRequest"  class="h-1/5 text-white flex-nowrap">  
              <div class="h-1/2 flex items-center justify-center"> Request</div>
              <div class="h-1/2 flex items-center justify-center rounded-xl bg-white text-black w-3/4 mx-12"> {{AppointmentRequest.request}}</div>
            </div> 
    
             <div v-if="AppointmentRequest"  class="h-1/5 text-white flex-nowrap mt-4 mb-4">  
              <div class="h-1/2 flex items-center justify-center"> Request Schedule</div>
              <div class="h-1/2 flex items-center justify-center rounded-xl bg-white text-black w-3/4 mx-12"> {{AppointmentRequest.appointment_schedule_start}} - {{AppointmentRequest.appointment_schedule_end}}</div>
            </div> 
    
            <div v-for="professional in professionals">   
              <div v-if="AppointmentRequest && AppointmentRequest.by_professional_id == professional.id" class="h-1/2 flex items-center justify-center"> Consultant: {{ professional.first_name }}, {{ professional.profession }} </div>
            </div> 
    
            <div class="h-1/6 z-1 mt-4 flex items-center justify-center">
                <button data-modal-hide="viewAppointment" class="bg-red-700 text-white px-4 rounded-sm"> Close </button>
            </div>
        </div>
    
    </div>
    
    </template>
    
    <script setup>
    import { router } from '@inertiajs/vue3';
    import { ref } from 'vue'
    import { defineProps } from 'vue';
    
    defineProps({
        AppointmentRequest: Object,
      professionals:Object
    })
    </script>
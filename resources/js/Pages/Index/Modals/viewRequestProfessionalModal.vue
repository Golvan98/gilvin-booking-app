<template>

<div id="viewRequestProfessionalModal" class="hidden z-50 fixed inset-0 overflow-x-hidden overflow-y-auto rounded-lg flex-nowrap justify-center">
      
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
  
          <div v-for="user in users">   
            <div v-if="AppointmentRequest && AppointmentRequest.by_user_id == user.id" class="h-1/2 flex items-center justify-center"> Consultee: {{ user.first_name }}</div>
          </div> 

          <div class="h-1/6 z-1 mt-4 flex items-center justify-between">
              <button data-modal-hide="viewRequestProfessionalModal" class="bg-indigo-700 text-white px-2 py-1 rounded-sm ml-2"> Close </button>
              <a v-if="AppointmentRequest" :href="`rejectRequest/${AppointmentRequest.id}`"> <button  class="mr-2 px-2 py-1 bg-red-700 text-white rounded-sm"> Reject Request </button> </a>
              <a v-if="AppointmentRequest" :href="`approveRequest/${AppointmentRequest.id}`"> <button class="mr-2 px-2 py-1 bg-blue-700 text-white rounded-sm"> Accept Request </button> </a>
          </div>


      </div>
  
  </div>


</template>

<script setup>
 import { router } from '@inertiajs/vue3';
    import { ref } from 'vue'
    import { defineProps } from 'vue';


    const props = defineProps (
      { 
        AppointmentRequest: Object,
        users:Object,
      })
</script>
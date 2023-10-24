<template>

<section v-if="notifications.data.length" class="text-gray-700 dark:text-gray-400">
    <div v-for="notification in notifications.data" :key="notification.id" class="border-b border-gray-200 dark:border-gray-800 py-4 flex justify-between items-center">

      <div v-if="notification.type === 'App\\Notifications\\RequestAccepted'">

        <div v-for="professional in professionals" class="ml-24">
         <span v-if="professional.id==notification.data.by_professional_id">
            Request to <a :href="`viewProfessionalProfile/${professional.id}`"> <strong> {{ professional.first_name }}  </strong> </a> was <span class="text-green-500 font-bold"> Accepted </span>
        </span>

        </div>
        
      </div>

      <div v-if="notification.type === 'App\\Notifications\\RequestRejected'">

        <div v-for="professional in professionals" class="ml-24">
         <span v-if="professional.id==notification.data.by_professional_id">
            Request to <a :href="`viewProfessionalProfile/${professional.id}`"> <strong> {{ professional.first_name }}  </strong> </a> was <span class="text-red-500 font-bold"> Rejected </span> 
        </span>

        </div>
        
      </div>

      <div v-if="notification.type === 'App\\Notifications\\AppointmentCancelled'">

        <div v-for="professional in professionals" class="ml-24">
         <span v-if="professional.id==notification.data.by_professional_id">
            Appointment to <a :href="`viewProfessionalProfile/${professional.id}`"> <strong> {{ professional.first_name }}  </strong> </a> <span class="text-red-500 font-bold"> Cancelled </span> 
        </span>

        </div>
        
      </div>

      

      <div class="mr-24 p-2 text-white font-bold flex justify-between">
        <Link v-if="!notification.read_at" as="button" method="put" :href="`/notification/${notification.id}/seen`" class=" bg-indigo-700 p-2 btn-outline font-medium">
          Mark as Read
        </Link>

        <div v-for="Appointment in Appointments"> 
          <button v-if="Appointment.id == notification.data.appointment_id"  
          data-modal-target="viewAppointment" data-modal-toggle="viewAppointment" 
          class="bg-indigo-700 text-white p-2 ml-4 font-medium">  
          View Appointment Details 
          </button>
          <viewAppointmentModal :Appointment="Appointment" :professionals="professionals"/> 
          
        </div>


      </div>
      
      
    </div>

    
  </section>

  <section v-else>
    No notifications found
  </section>


</template>

<script setup>
import Pagination from '@/Pages/Index/Pagination.vue'
import { Link } from '@inertiajs/vue3'
import viewAppointmentModal from '@/Pages/Index/Modals/viewAppointmentModal.vue'

defineProps({
  notifications: Object,
  professionals:Object,
  Appointments:Object
})

</script>
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

      

      <div  v-if="!notification.read_at" class="mr-24 border border-black p-2 bg-indigo-700 text-white font-bold">
        <Link as="button" method="put" :href="`/notification/${notification.id}/seen`" class="btn-outline text-xs font-medium uppercase">
          Mark as read
        </Link>
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
defineProps({
  notifications: Object,
  professionals:Object
})
</script>
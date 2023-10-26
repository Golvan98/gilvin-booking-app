<template>

    <section v-if="notifications.data.length" class="text-gray-700 dark:text-gray-400">
        <div v-for="notification in notifications.data" :key="notification.id" class="border-b border-gray-200 dark:border-gray-800 py-4 flex justify-between items-center">
    
          <div v-if="notification.type === 'App\\Notifications\\RequestSent'">
    
            <div v-for="user in users" class="ml-24">
             <span v-if="user.id==notification.data.by_user_id">
                You have a new request from <a :href="`/viewUserProfile/${user.id}`"> <strong> {{ user.first_name }} </strong> </a> 
            </span>
    
            </div>
            
          </div>
    
          <div  class="p-2 text-white font-bold flex justify-between">

            <Link v-if="!notification.read_at" as="button" method="put" :href="`/professionalNotification/${notification.id}/seen`" class="mr-4 p-2 bg-indigo-700 bptn-outline text-xs font-medium uppercase">
              Mark as read
            </Link>

            <div v-for="AppointmentRequest in AppointmentRequests">
             <button v-if="AppointmentRequest.id == notification.data.appointment_request_id" @click="selectAppointmentRequest(AppointmentRequest)" 
             data-modal-target="viewRequestProfessionalModal" data-modal-toggle="viewRequestProfessionalModal" class="bg-indigo-700 font-bold text-xs p-2 mr-12">
             View Request
             </button>
             <viewRequestProfessionalModal :AppointmentRequest="selectedAppointmentRequest" :users="users"/>
            </div>
            
          

          </div>

          


          
        </div>

        <div v-if="notifications.data.length" class="w-full flex justify-center mt-8 mb-8" preserve-state>
         <Pagination :links="notifications.links" />
        </div>
    
        
      </section>
    
      <section v-else>
        No notifications found
      </section>

      
    
    
    </template>
    
    <script setup>
    import Pagination from '@/Pages/Index/Pagination.vue'
    import { Link } from '@inertiajs/vue3'
    import viewRequestProfessionalModal from '@/Pages/Index/Modals/viewRequestProfessionalModal.vue'
import { ref } from 'vue'

    const selectedAppointmentRequest = ref(null);

    function selectAppointmentRequest(AppointmentRequest)
    {
      selectedAppointmentRequest.value = AppointmentRequest
    }

    defineProps({
      notifications: Object,
      users:Object,
      AppointmentRequests:Object,
      professionals:Object
    })
    </script>
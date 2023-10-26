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
    
          <div  v-if="!notification.read_at" class="mr-24 p-2 text-white font-bold flex justify-between">

            <Link as="button" method="put" :href="`/professionalNotification/${notification.id}/seen`" class="px-2 bg-indigo-700 bptn-outline text-xs font-medium uppercase">
              Mark as read 
            </Link>

            <div  v-if="!notification.read_at" class="ml-12 mr-24 p-2 bg-indigo-700">
              <div class="bptn-outline text-xs font-medium uppercase">
                view request
              </div>
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
    defineProps({
      notifications: Object,
      users:Object,
      AppointmentRequests:Object
    })
    </script>
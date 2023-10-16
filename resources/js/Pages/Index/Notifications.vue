<template>

<section v-if="notifications.data.length" class="text-gray-700 dark:text-gray-400">
    <div v-for="notification in notifications.data" :key="notification.id" class="border-b border-gray-200 dark:border-gray-800 py-4 flex justify-between items-center">
      <div  v-if="notification.type === 'App\\Notifications\\RequestAccepted'">

        <div v-for="professional in professionals">
         <span v-if="professional.id==notification.data.by_professional_id">
            Request to {{ professional.first_name }} was accepted
        </span>

        </div>
        
      </div>
      <div>
        <Link as="button" method="put" :href="`/notification/${notification.id}/seen`" v-if="!notification.read_at" class="btn-outline text-xs font-medium uppercase">
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
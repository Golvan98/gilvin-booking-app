<template>
    <div class="flex gap-1 overflow-x-auto">
      <Link
        v-for="(link, index) in links" 
        :key="index" class="py-2 px-4 rounded-md" 
        :href="link.url"  
        :class="{'bg-indigo-500 dark:bg-indigo-800 text-gray-300': link.active}" 
        v-html="link.label" 
        preserve-state
      />
    </div>
  </template>
  


<script setup>
import { Link } from '@inertiajs/vue3'
defineProps ({links: Array})
import { router } from '@inertiajs/vue3'


</script>
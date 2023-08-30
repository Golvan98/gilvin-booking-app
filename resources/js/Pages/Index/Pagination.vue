<template>
    <div class="flex gap-1">
      <Link
        v-for="(link, index) in links" 
        :key="index" class="py-2 px-4 rounded-md" 
        :href="link.url" 
        :class="{'bg-indigo-500 dark:bg-indigo-800 text-gray-300': link.active}" 
        v-html="link.label"
      />
    </div>
  </template>
  


<script setup>
import { Link } from '@inertiajs/vue3'
defineProps ({links: Array})
import { router } from '@inertiajs/vue3'

const goToPage = (url) => {
  Inertia.visit(url, {
    replace: true, // Preserve the browser history
    preserveState: true, // Preserve component state
  });
};


</script>
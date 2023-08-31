<template>

    <div class="bg-red-300 p-24">
        YAWA  <p>{{ parentProp }}</p>
    
    </div>
    </template>
    
    <script setup>
   import { defineProps } from 'vue';
   const props = defineProps({
  parentProp: String
});
    </script>
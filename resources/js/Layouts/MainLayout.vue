<template>

 <header class="border-b border-red-500 dark:border-gray-700 bg-green-500 dark:bg-gray-800 w-full h-24">
    
    <div class="container mx-auto">
      <nav class="flex items-center justify-between ">
        <div class="text-lg font-medium">
          Header Content 1
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
            Header Content 2
        </div>

        <div class="flex items-center gap-4">
            Header Content 3
        </div>
      </nav>
    </div>

</header>

<main class="h-full w-full bg-green-300">  
    <slot> Default </slot> 

</main>

</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>


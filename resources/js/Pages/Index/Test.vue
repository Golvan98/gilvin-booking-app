<template>

test page here

<li v-for="(services) in services">
  {{ services.service }} -
</li>


<button data-modal-target="defaultModal" data-modal-toggle="modalID" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Toggle modal
</button>

<button data-modal-show="modalID" class="bg-indigo-700 p-4 rounded-sm text-white"> show modal </button>



<button data-modal-hide="modalID" class="bg-indigo-900 p-4 rounded-sm text-white"> close modal </button>

</template>


<script setup>

const props = defineProps({ services:Object, errors:Object})
</script>
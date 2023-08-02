<template>

test page here

<li v-for="(services) in services">
  {{ services.service }} -
</li>


</template>


<script setup>

const props = defineProps({ services:Object, errors:Object})
</script>
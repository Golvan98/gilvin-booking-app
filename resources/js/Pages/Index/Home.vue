<template>



    <div> Homepage here </div>

    <div> data here {{ data }}</div>


</template>

<script setup>

import { Link } from '@inertiajs/vue3'
defineProps(['data'])
</script>


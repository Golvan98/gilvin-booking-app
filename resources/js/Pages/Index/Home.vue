<template>



    <div class="bg-red-300 font-bold"> Homepage here </div>

    <div> data here {{ data }}</div>


</template>

<script setup>

import { Link } from '@inertiajs/vue3'
defineProps(['data'])
</script>


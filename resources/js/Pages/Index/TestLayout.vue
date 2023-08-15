<template>


    layout here yoohoo {{  bio}}


  </template>
    
    
    <script setup>
    import { ref } from 'vue'
    import { useForm } from '@inertiajs/vue3'
    import { router } from '@inertiajs/vue3'
    import { Link } from '@inertiajs/vue3'
      import { reactive } from 'vue'
      import { usePage } from '@inertiajs/vue3'
      import { computed } from 'vue'
      import Test from '@/Pages/Index/Test.vue'


const props = defineProps({  bio:String })

 
    </script>
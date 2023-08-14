<template>


    <button @click="awesome=!awesome" v-if="awesome" class="bg-red-300">{{ bio }}what</button>
    <div v-else>
      <form @submit.prevent="submit">
        <input v-model=form.bio name="bio" id="bio" type="text"  :placeholder="bio" >
        
        <button type="submit" class="bg-indigo-700 text-white font-bold"> Save Changes </button>
        <button @click="awesome=!awesome" class="ml-2 bg-indigo-700 text-white font-bold"> Cancel </button>
      </form>
    
    </div>
    </template>
    
    
    <script setup>
    import { ref } from 'vue'
    import { useForm } from '@inertiajs/vue3'
    import { router } from '@inertiajs/vue3'
    import { Link } from '@inertiajs/vue3'
      import { reactive } from 'vue'
      import { usePage } from '@inertiajs/vue3'
      import { computed } from 'vue'
      
     
  const page = usePage()
 

const props = defineProps({ bio:String, services:Object, errors:Object})
    const awesome = ref(true)
   
    const form = useForm({
              bio: null
          })
       
          
    
    function submit()
      {
              router.post('/testEdit', form)
      }
      
    
    </script>
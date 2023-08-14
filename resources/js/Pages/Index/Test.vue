<template>


<button @click="awesome=!awesome" v-if="awesome">{{ bio }}</button>
<div v-else>
  <form @submit.prevent="submit">
    <input name="bio" id="bio" type="text" v-model=form.bio :placeholder="bio" >
    
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
  


const awesome = ref(true)
const props = defineProps({  bio:String })

const form = useForm({
          bio: null
      })
   
      

function submit()
  {
          router.post('/testEdit', form)
  }
  

</script>
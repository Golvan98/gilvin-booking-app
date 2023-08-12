<template>

<button @click="awesome=!awesome" class="bg-indigo-700 text-white">Toggle</button>

<h1 v-if="awesome">{{ bio }}</h1>
<div v-else>
  <form @submit.prevent="submit">
    <input v-model="form.bio" name="bio" id="bio" type="text" :placeholder="bio">
    
    <button type="submit" class="bg-indigo-700 text-white font-bold"> Save Changes </button>
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
const props = defineProps({  bio:Object, })

const form = useForm({
          bio: null
      })
   
      

function submit()
  {
          router.post('/testEdit', form)
  }

</script>
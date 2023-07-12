<template>

<body class="h-screen w-full bg-grey-300 flex-nowrap">

 <div id="main" class="w-full h-full bg-gray-100 flex items-center justify-center"> 

  <div class="w-1/4 h-3/5 border mb-12 flex-nowrap shadow-lg bg-white"> 

    <div class="h-1/5 bg-white flex items-center justify-center text-2xl text-gray-400">
        <div class="h-1/2">𝔾𝔹𝕂 </div>
    </div>

    <div class=" bg-white h-3/6">
           


            <form @submit.prevent="submit" class="h-full flex-nowrap">

                <div id="first batch" class="ml-4 mr-4 flex justify-start border-t border-gray-300">
                        <label for="email" class="my-2 font-bold" > Email </label>
                </div>

                <div class="w-full flex items-center justify-center mt-0.5 flex-nowrap"> 
                        <input id="email" v-model="form.email" type="text" name="email"  class="input ml-4 mr-4 w-full rounded-sm" placeholder="name@company.com" required="">
                        
                </div>

                <div id="2nd batch" class="flex justify-start mt-6">
                        <label for="password" class="my-2 ml-4 font-bold" > Password </label>
                </div>

                <div class="w-full flex items-center justify-center mt-0.5"> 
                        <input id="password" v-model="form.password" type="password" name="password"  class="input ml-4 mr-4 w-full rounded-sm" placeholder="password" required="">
                        
                </div>
                       
                <div id="third batch" class="bg-white h-12 mt-10 flex items-center justify-center">
                        <div class> 
                                <button class="btn-primary w-full bg-green-300 px-12 py-2 rounded-sm" type="submit"> Login </button>
                        </div>
                </div>

                <div id="4th batch" class="bg-white h-12 flex items-center justify-between mt-2">
                        <div class="ml-2 text-indigo-600 font-bold">Create Account</div>
                        <div class="mr-2 text-indigo-600 font-bold">Reset password</div>
                </div>

            </form>
    </div>   

  </div>


 </div>
    
</body>


</template>

<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { useForm } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'
defineProps({ errors: Object })


function submit()
{
        router.post('login.store', form)
}

const form = reactive({
    email:null,
    password: null
})


</script>
<template>

        <body class="h-screen w-full bg-grey-300 flex-nowrap">
        
        <div id="main" class="w-full h-full bg-gray-100 flex items-center justify-center"> 
        
          <div class="w-1/4 h-4/5 mb-28 flex-nowrap shadow-lg bg-white"> 
        
            <div class="h-1/6 bg-white flex items-center justify-center text-2xl text-gray-400">
                <div class="h-1/3">𝔾𝔹𝕂 </div>
            </div>
        
            <div class="bg-white h-full">
                   

                    <form @submit.prevent="submit" class="h-full flex-nowrap">
        
                        <div id="first batch" class="ml-4 mr-4 flex justify-start border-t border-gray-300">
                            <label for="first_name" class="my-2 font-bold" > First Name </label>
                        </div>
                        <div class="w-full flex items-center justify-center mt-0.5 flex-nowrap"> 
                            <input id="first_name" v-model="form.first_name" type="text" name="first_name"  class="input ml-4 mr-4 w-full rounded-sm" placeholder="John" required="">
                        </div>
                        <div class="ml-4 text-red-500" v-if="errors.first_name">{{ errors.first_name }}</div>
    
    
                        <div id="2nd batch" class="ml-4 mr-4 flex justify-start border-t border-gray-300">
                                <label for="last_name" class="my-2 font-bold" > Last Name </label>
                        </div>
                        <div class="w-full flex items-center justify-center mt-0.5 flex-nowrap"> 
                                <input id="last_name" v-model="form.last_name" type="text" name="last_name"  class="input ml-4 mr-4 w-full rounded-sm" placeholder="Doe" required="">                        
                        </div>
                        <div class="ml-4 text-red-500" v-if="errors.last_name">{{ errors.last_name }}</div>
    
    
                        <div id="3rd batch" class="ml-4 mr-4 flex justify-start border-t border-gray-300">
                                <label for="email" class="my-2 font-bold" > Email </label>
                        </div>
        
                        <div class="w-full flex items-center justify-center mt-0.5 flex-nowrap"> 
                                <input id="email" v-model="form.email" type="email" name="email"  class="input ml-4 mr-4 w-full rounded-sm" placeholder="name@company.com" required="">
                              
                        </div>
                        <div class="ml-4 text-red-500" v-if="errors.email">{{ errors.email }}</div>

                        <div id="4th batch" class="ml-4 mr-4 flex justify-start border-t border-gray-300">
                                <label for="profession" class="my-2 font-bold" > Profession </label>
                        </div>
                        <div class="w-full flex items-center justify-center mt-0.5 flex-nowrap"> 
                                <input id="profession" v-model="form.profession" type="text" name="profession"  class="input ml-4 mr-4 w-full rounded-sm" placeholder="Software Developer" required="">                        
                        </div>
                        <div class="ml-4 text-red-500" v-if="errors.profession">{{ errors.profession }}</div>
                        
        
                        <div id="45th batch" class="flex justify-start mt-0.5">
                            <label for="password" class="my-2 ml-4 font-bold" > Password </label>
                          </div>
                          <div class="w-full flex items-center justify-center mt-0.5"> 
                            <input id="password" v-model="form.password" type="password" name="password"  class="input ml-4 mr-4 w-full rounded-sm" placeholder="password" required="">    
                          </div>
                   


                         <div id="6th batch" class="flex justify-start mt-0.5">
                            <label for="password_confirmation" class="my-2 ml-4 font-bold" > Confirm Password </label>
                         </div>
                          <div class="w-full flex items-center justify-center mt-0.5"> 
                            <input id="password_confirmation" v-model="form.password_confirmation" type="password" name="password"  class="input ml-4 mr-4 w-full rounded-sm" placeholder="password" required="">    
                          </div>
                          <div class="ml-4 text-red-500"  v-if="errors.password">{{ errors.password }}</div>
    
    
                        <div id="7th batch" class="bg-white h-12 mt-10 flex items-center justify-center">
                                <div class> 
                                        <button class="btn-primary w-full bg-green-300 px-12 py-2 rounded-sm" type="submit"> Create Account </button>
                                </div>
                        </div>
        
                        <div id="8th batch" class="bg-white h-12 flex items-center justify-between mt-2">
                                <div class="ml-2 text-indigo-600 font-bold"> I already have an account</div>
                                <div class="mr-2 text-indigo-600 font-bold">Reset password</div>
                        </div>


                        <div id="9th batch" class="bg-white h-12 flex items-center justify-center mt-2">
                                <div class="ml-2 text-indigo-600 font-bold"><Link href="/createUser"> Register as a User </link> </div>
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
        import { computed } from 'vue'
        
        
        defineProps({ errors: Object })
        
        
        const form = useForm({
            first_name : null,
            last_name : null,
            email: null,
            profession: null,
            password: null,
            password_confirmation : null
        })
     
        function submit()
    {
            router.post('register.professional', form)
    }
        const register = () => form.post(route('register.professional'))
        
        
        </script>
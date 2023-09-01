<template>

  <div class="h-screen w-full bg-gray-300 flex-nowrap"
  style="background-image: url('storage/greybg.png'); 
          background-repeat: no-repeat; 
          background-size: cover;">
  
    <div class="w-full h-3/6">
  
      <div class="bg-inherit h-1/4 "> </div>
      <div class="bg-inherit h-1/ ml-4 font-bold text-lg text-gray-300"> Hello {{ userName}}<br> <br>  </div>
      
      <button @click="awesome=!awesome" v-if="awesome" class="ml-4  text-white"> Bio: {{ bio }}</button>
        <div v-else>
          <form @submit.prevent="submitForm2">
            <input v-model=form2.bio name="bio" id="bio" type="text" class="bg-green-300 w-1/6"  :placeholder="bio">
            
            <button type="submit" class="bg-indigo-700 text-white font-bold ml-2 p-2"> Save Changes </button>
            <button @click="awesome=!awesome" class="ml-2 bg-indigo-700 text-white font-bold p-2"> Cancel </button>
          </form>
    
        </div>
      
      
      <div class="bg-inherit h-1/4"> </div>
  
    </div> 
      
    <div class=" w-full h-1/6 flex">
      
      <div class="h-full w-3/5 ml-24 mr-12 bg-white flex-nowrap">
  
        <div class="w-full h-4/5 flex justify-between bg-white">
          <div class="ml-4 mt-4  h-1/6 text-lg font-bold"> Your Account </div>
          <div class="mr-4 mt-4  h-1/6 text-white"> <button class="bg-indigo-700 px-2 py-1 rounded-sm">  Settings</button> </div>
        </div>
  
        <div class="w-full ">
          <div class="ml-4 text-gray-300 text-lg font-bold "> Non-Professional Account </div>
        </div>
  
    </div>
      
  
      <div class="h-full w-2/5 mr-12 bg-white flex justify-center"> 

        <div class="ml-4 mt-2 h-1/6 text-white">  
        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"  class="bg-red-700 px-2 py-1 rounded-sm">  Delete Account </button>  
        </div>

            <DeleteUserModal> </DeleteUserModal>


          <div class="w-40 h-40 rounded-full inline-flex items-center justify-center  bg-gray-400 text-gray-700 text-xl font-bold">
              Photo Here
          </div>
  
  
          <div class="mr-4 mt-2 h-1/6 text-white"> <button class="px-2 py-1 bg-indigo-700 rounded-sm">  Upload New Image</button> </div>
      </div>
          
    </div>
  
    <div class=" bg-gray-300  w-full h-2/6 flex">
  
      <form @submit.prevent="submit" class="h-4/5 w-3/5 ml-24 mr-12 bg-white flex border-t">
  
        <div class=" w-1/2">
  
          <div class="mt-8 w-full h-1/3 flex-nowrap items-center justify-center "> 

              <div class="w-full h-1/3 ml-2"> 
                <label>  First Name </label> 
              </div>
              <div class="h-1/2 mx-2 mt-2">
                <input id="first_name" v-model="form.first_name" type="text" class="w-full h-full" :placeholder="userName"> 
              </div>

          </div>
                 
          <div class="mt-4 w-full h-1/3 flex-nowrap items-center justify-center"> 

              <div class="w-full h-1/3 ml-2"> 
                <label> Email Address </label> 
              </div>

              <div class="h-1/2 mx-2 mt-2">
                <input id="email" v-model="form.email" type="text" class="w-full h-full" :placeholder="userEmail"> 
              </div>

          </div>
  
        </div>
  
        <div class="w-1/2">
          
          <div class="mt-8 w-full h-1/3 flex-nowrap items-center justify-center"> 

              <div class="w-full h-1/3 ml-2"> 
                <label> Last Name </label> 
              </div>

              <div class="h-1/2 mx-2 mt-2">
                <input id="last_name" v-model="form.last_name" type="text" class="w-full h-full" :placeholder="userLastName"> 
              </div>

          </div>
          
          <div class="mt-4 w-full h-1/3 flex-nowrap items-center justify-center"> 

              <div class="w-full h-1/3 ml-2"> 
                <label> password </label> 
              </div>

              <div class="h-1/2 mx-2 mt-2">
                <input id="password" type="password" class="w-full h-full" placeholder="**********"> 
              </div>

              <div class="h-1/3 mx-2 mt-2 flex justify-end">
                  <button class="bg-indigo-700 px-2 text-white" type="submit"> Save Changes</button>
              </div>
              
              
          </div>
  
        </div>
  
      </form>
  
      
  
      
  
      <div class="h-4/5 w-2/5 mr-12 bg-white border flex items-center justify-center">
      
    
        <div class="flex-nowrap">
          <div class="mr-4 flex items-center justify-center h-16 w-16 rounded-full bg-gray-400">
          <span class="text-white text-2xl font-bold">
              12
          </span> <br>
          </div>
          <div> <button data-modal-target="requests-modal" data-modal-toggle="requests-modal" class="mr-4 bg-inherit text-start text-xs" preserve-state>  Requests </button></div>
          <userRequestsModal  :pendingRequests="pendingRequests" :consultants="consultants" />
        
        
        </div>
  
        <div class="flex-nowrap">
          <div class="mr-4 flex items-center justify-center h-16 w-16 rounded-full bg-gray-400">
          <span class="text-white text-2xl font-bold">
              12
          </span> <br>
          </div>
          <div class="bg-inherit text-start text-xs">&nbsp &nbspRequests</div>
        </div>
  
        <div class="ml-4 flex-nowrap">
          <div class="flex items-center justify-center h-16 w-16 rounded-full bg-gray-400">
          <span class="text-white text-2xl font-bold">
              12
          </span> <br>
          </div>
          <div class="bg-inherit text-start text-xs">&nbsp Messages</div>
        </div>
  
      </div>
          
    </div>
     
  
  
  
  </div>
  </template>
  
  <script setup>
  import { Link } from '@inertiajs/vue3'
import { reactive } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { computed } from 'vue'
import { useForm } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'
import { ref } from 'vue'
import DeleteUserModal from '@/Pages/Index/DeleteUserModal.vue'
import userRequestsModal from '@/Pages/Index/userRequestsModal.vue'

const awesome = ref(true)

const page = usePage()


const flashSuccess = computed(() => page.props.flash.success, )

const pops = defineProps (
  { 
    bio:String, 
    pendingRequests:Object,
    consultants: Object
  
  })

const user = computed(() => page.props.user )
// const user = computed(() => page.props.auth.user)

const userName = computed(() => page.props.user.first_name)

const userEmail = computed(() => page.props.user.email)

const userLastName = computed(() => page.props.user.last_name)


const prof = computed (() => page.props.prof)

    const form = useForm({
        first_name : null,
        last_name : null,
        email : null,
        password: null,
    })
 
    function submit()
{
        router.post('editProfile', form)
}

const form2 = useForm({
  bio : null
})

  /* for some fuckin reason this doesnt work but the function below DOES?! function submitForm2()
  {
    router.post('/editUserBio', form)
  } */

    
  
  function submitForm2()
    {
     
    router.post('/editUserBio', form2)
    }     
    
    
    


  </script>
<template>

    <div class="h-screen w-full bg-gray-300 flex-nowrap"
    style="background-image: url('storage/greybg.png'); 
            background-repeat: no-repeat; 
            background-size: cover;">
    
      <div class="w-full h-3/6">
    
        <div class="bg-inherit h-1/4 "> </div>
        <div class="bg-inherit h-16 ml-4 font-bold text-lg text-gray-300">  {{profFirstName}} <br> </div>
        
        <button @click="awesome=!awesome" v-if="awesome" class="ml-4  text-white"> Bio: {{ bio }}</button>
        <div v-else>
          <form @submit.prevent="submitForm2">
            <input v-model=form2.bio name="bio" id="bio" type="text"  :placeholder="bio">
            
            <button type="submit" class="bg-indigo-700 text-white font-bold"> Save Changes </button>
            <button @click="awesome=!awesome" class="ml-2 bg-indigo-700 text-white font-bold"> Cancel </button>
          </form>
    
        </div>


        <div class="bg-inherit h-1/4 flex items-start text-white ml-4"> Services:
        <span v-for="(services) in services">
          &nbsp {{ services.service }}, 
        </span>


      </div>
        <!-- Modal toggle -->
        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
          Add Service 
        </button>

        <!-- Main modal -->

        <ServiceModal>

        </ServiceModal>

      </div> 
        
      <div class=" w-full h-1/6 flex">
        
        <div class="h-full w-3/5 ml-24 mr-12 bg-white flex-nowrap">
    
          <div class="w-full h-4/5 flex justify-between bg-white">
            <div class="ml-4 mt-4  h-1/6 text-lg font-bold"> Your Account </div>
            <div class="mr-4 mt-4  h-1/6 text-white"> <button class="bg-indigo-700 px-2 py-1 rounded-sm">  Settings</button> </div>
          </div>
    
          <div class="w-full ">
            <div class="ml-4 text-gray-300 text-lg font-bold "> Professional Account </div>
          </div>
    
      </div>
        
    
        <div class="h-full w-2/5 mr-12 bg-white flex justify-center"> 
            <div class="ml-4 mt-2 h-1/6 text-white">  <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"  class="bg-red-700 px-2 py-1 rounded-sm">  Delete Account </button>  </div>
            <DeleteModal> </DeleteModal>
            <div
                class="w-40 h-40 rounded-full 
                    inline-flex items-center justify-center 
                    bg-gray-400 text-gray-700 text-xl font-bold">
                Photo Here
                
            </div>
    
    
            <div class="mr-4 mt-2 h-1/6 text-white"> <button class="px-2 py-1 bg-indigo-700 rounded-sm">  Upload New Image</button> </div>
        </div>
            
      </div>
    
      <div id="form" class=" bg-gray-300  w-full h-2/6 flex">
    
        <form @submit.prevent="submitForm1" class="h-4/5 w-3/5 ml-24 mr-12 bg-white flex border-t">
    
          <div class=" w-1/2">
    
            <div class="mt-8 w-full h-1/3 flex-nowrap items-center justify-center "> 
  
                <div class="w-full h-1/3 ml-2"> 
                  <label>  First Name </label> 
                </div>
                <div class="h-1/2 mx-2 mt-2">
                  <input id="first_name" v-model="form1.first_name" type="text" class="w-full h-full" :placeholder="profFirstName"> 
                </div>
  
            </div>
                   
            <div class="mt-4 w-full h-1/3 flex-nowrap items-center justify-center"> 
  
                <div class="w-full h-1/3 ml-2"> 
                  <label> Email Address </label> 
                </div>
  
                <div class="h-1/2 mx-2 mt-2">
                  <input id="email" v-model="form1.email" type="text" class="w-full h-full" :placeholder="profEmail "> 
                </div>
  
            </div>
    
          </div>
    
          <div class="w-1/2">
            
            <div class="mt-8 w-full h-1/3 flex-nowrap items-center justify-center"> 
  
                <div class="w-full h-1/3 ml-2"> 
                  <label> Last Name </label> 
                </div>
  
                <div class="h-1/2 mx-2 mt-2">
                  <input id="last_name" v-model="form1.last_name" type="text" class="w-full h-full" :placeholder="profLastName"> 
                </div>
  
            </div>
            
            <div class="mt-4 w-full h-1/3 flex-nowrap items-center justify-center"> 
  
                <div class="w-full h-1/3 ml-2"> 
                  <label> Profession </label> 
                </div>
                
                <div class="h-1/2 mx-2 mt-2">
                  <input id="profession" v-model="form1.profession" type="text" class="w-full h-full" :placeholder="profProfession"> 
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
            <div> <button data-modal-target="requests-modal" data-modal-toggle="requests-modal" class="mr-4 bg-inherit text-start text-xs"> Requests </button></div>
            <div id="requests-modal" tabindex="-1" class="justify-center bg-inherit fixed top-0 left-0 right-0 z-50 hidden p-4 h-3/4">
            <div class="relative w-1/4 mx-auto bg-white overflow-y-auto md:inset-0 h-[calc(100%-3rem)]">
                <div class="relative bg-white  dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="requests-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    
                    <div class="p-6 text-center max-h-[400px]">
                      
                        <h3 class="mb-5 text-lg text-white font-bold bg-blue-500 py-2"> Appointment Requests</h3>

                            <div v-for="(pendingRequests) in pendingRequests" id="modalcontent" class="bg-white flex-nowrap justify-center items-center rounded-xl border border-gray-300 mb-2 shadow">

                            <div class="mt-4 flex justify-start ml-2 font-bold"> {{ requests.created_at}}</div>

                            <div class="w-full h-auto flex-nowrap"> 
                                    <div v-for="(consultees) in consultees" class="flex justify-start ">  <span class="ml-2" v-if="consultees.id == pendingRequests.by_user_id"> {{ consultees.first_name }} {{ consultees.last_name }}</span> </div>

                                    <div class="h-auto bg-white flex-nowrap justify-start items-start mt-2 mb-4 text-left">
                                        <div class="mx-2"> {{ pendingRequests.request }} </div> 
                                    </div> 
                            </div>

                            <div class="flex justify-between font-bold mb-2">
                              <a :href="`rejectRequest/${pendingRequests.id}`"> <div class="ml-1 text-sm text-red-500">  Reject Request </div> </a>
                                    <div class="text-sm text-blue-500"> Reschedule Request </div>
                                    <div class="text-sm mr-1 text-green-500"> Confirm Request </div>        
                            </div>

                    </div>
                        
                            
                        
                        <Link href="/deleteUser" method="delete" as="button"><button data-modal-hide="requests-modal" type="button" class="mb-2 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                            Yes, I'm sure
                            
                        </button> </Link>
                        <button data-modal-hide="requests-modal" type="button" class="mb-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                    </div>
                </div>
            </div>
        </div>
        
          </div>


    
          <div class="flex-nowrap">
            <div class="mr-4 flex items-center justify-center h-16 w-16 rounded-full bg-gray-400">
            <span class="text-white text-2xl font-bold">
                12
            </span> <br>
            </div>
            <div> <button class="bg-inherit text-start text-xs"> Appointments </button></div>
          </div>
    
          <div class="ml-4 flex-nowrap">
            <div class="flex items-center justify-center h-16 w-16 rounded-full bg-gray-400">
            <span class="text-white text-2xl font-bold">
                12
            </span> <br>
            </div>
            <div> <button class="bg-inherit text-start text-xs"> &nbsp Messages </button></div>
          </div>
    
        </div>
            
      </div>
       

      
    
    
    
    </div>
    </template>
    
    <script setup>
    
  const props = defineProps({ 
    bio:String,
    services:Object, 
    errors:Object,
    requests:Object,
    consultees:Object,
    pendingRequests:Object,
  })

    import { Link } from '@inertiajs/vue3'
  import { reactive } from 'vue'
  import { usePage } from '@inertiajs/vue3'
  import { computed } from 'vue'
  import { useForm } from '@inertiajs/vue3'
  import { router } from '@inertiajs/vue3'
  import ServiceModal from '@/Pages/Index/ServiceModal.vue'
  import DeleteModal from '@/Pages/Index/DeleteModal.vue'
  import Bio from '@/Pages/Index/Bio.vue'
  
  import { ref } from 'vue'
  const page = usePage()
  
   
  const awesome = ref(true)
  const flashSuccess = computed(() => page.props.flash.success, )
  const prof = computed (() => page.props.prof)
  const profFirstName = computed(() => page.props.prof.first_name)
  const profEmail = computed ( () => page.props.prof.email)
  const profLastName = computed(() => page.props.prof.last_name)
  const bio = computed(() => page.props.prof.bio)

  
  const profProfession = computed(() => page.props.prof.profession)
  
      const form1 = useForm({
          first_name : null,
          last_name : null,
          email : null,
          profession: null,
          service: null,
         
      })

      function submitForm1()
  {
          router.post('editProfessional', form1)
  }

      const form2 = useForm({
          bio: null
        })
        
      
      function submitForm2()
    {
      console.log('Form 2 submitted:', form2.value);
    router.post('/bioEdit', form2)
    }     
   
    

   
  
      
      
  
  
    </script>
<template>
    
    <form @submit.prevent="submit" id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex p-4 border-b rounded-t dark:border-gray-600 text-center bg-green-300 ">
                        
                            <div class="ml-8 text-center w-full font-bold text-xl">Add a service</div>
                        
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 text-center text-black font-bold">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                           Type of service
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                         <input type="text" name="service" v-model="form.service" placeholder="Service"> 
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-between">
                        <button data-modal-hide="defaultModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Add Service</button>
                        <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"> Cancel </button>
                    </div>
                </div>
            </div>
          </form>

    
</template>
    
    
    <script setup>
    
    import { Link } from '@inertiajs/vue3'
  import { reactive } from 'vue'
  import { usePage } from '@inertiajs/vue3'
  import { computed } from 'vue'
  import { useForm } from '@inertiajs/vue3'
  import { router } from '@inertiajs/vue3'
  import ServiceModal from '@/Pages/Index/ServiceModal.vue'
  const page = usePage()
  

  const props = defineProps({ services:Object, errors:Object})
 // const flashSuccess = computed(() => page.props.flash.success, )
 // const prof = computed (() => page.props.prof)
 // const profFirstName = computed(() => page.props.prof.first_name)
//  const profEmail = computed ( () => page.props.prof.email)
 // const profLastName = computed(() => page.props.prof.last_name)
  //const bio = computed(() => page.props.prof.bio)

  
 // const profProfession = computed(() => page.props.prof.profession)
  
      const form = useForm({
    
          service: null,
      })
   
      
      function submit()
  {
          router.post('/addservice', form)
  }
    </script>

    
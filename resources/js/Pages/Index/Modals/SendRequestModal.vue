<template>

<div id="request-modal" class="hidden z-50 fixed inset-0 overflow-y-auto rounded-lg">

    <form @submit.prevent="sendRequest" class="flex-nowrap h-auto w-1/4 bg-white rounded-lg px-12 py-4 ">

        <div class="h-1/3 w-full bg-inherit flex-nowrap rounded-t-lg pt-6 bg-white">
                        
            <div v-if="Professional" class="flex items-center justify-center mb-4"> Send Request to {{ Professional.first_name}} </div>
            <div class="flex items-center justify-center"> 
                            <input type="text" 
                            placeholder="context here" 
                            class="w-full rounded-lg"
                            v-model="createRequest.request" 
                            name="request" 
                            id="request"  
                            >       
            </div>

        </div>
        
        <div class="h-1/3 w-full bg-white pt-6">

            <div class="flex items-center justify-center mb-4"> Appointment Start Time </div>
            <div class="flex items-center justify-center"> 
                            <input type="datetime-local" 
                            placeholder="context here" 
                            class="w-full rounded-lg"
                            v-model="createRequest.request_schedule_start" 
                            name="request_schedule_start" 
                            id="request_schedule_start"
                            >   
            </div>  

        </div>

        <div class="h-1/3 w-full bg-white py-6">

            <div class="flex items-center justify-center mb-4"> Appointment End Time </div>
            <div class="flex items-center justify-center"> 
                            <input type="datetime-local" 
                            placeholder="context here" 
                            class="w-full rounded-lg"
                            v-model="createRequest.request_schedule_end" 
                            name="request_schedule_end" 
                            id="request_schedule_end"
                            >
            </div>  

        </div>

        <div class="w-full h-12 flex items-center justify-between">
             <button data-modal-hide="request-modal" class="bg-blue-600 text-white py-1 px-2 rounded-sm"> Cancel </button>
           <button data-modal-hide="request-modal" type="submit" class="bg-blue-600 text-white py-1 px-2 rounded-sm"> Confirm </button> 
        </div>


    </form>

</div>


</template>

<script setup>
import { router } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3'
import { defineProps } from 'vue';
import { ref } from 'vue'


const props = defineProps(['Professional']);

const createRequest = useForm(
    {
        request:null,
        request_schedule_start:null,
        request_schedule_end:null,
    }
  )
  

function sendRequest()
{const dynamicUrl = `createRequest/${props.Professional.id}`
    router.post(dynamicUrl, createRequest);
}

</script>
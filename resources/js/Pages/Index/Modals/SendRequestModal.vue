<template>

<div id="request-modal" class="hidden z-50 fixed inset-0 overflow-x-hidden overflow-y-auto rounded-lg">

    <div class="flex-nowrap h-auto w-1/4 bg-white rounded-lg px-12 py-4 ">

        <div class="h-1/3 w-full bg-inherit flex-nowrap rounded-t-lg pt-6 bg-white">
                        
            <div class="flex items-center justify-center mb-4"> Request </div>
            <div class="flex items-center justify-center"> 
                            <input type="text" placeholder="context here" class="w-full rounded-lg">
            </div>

        </div>
        
        <div class="h-1/3 w-full bg-white pt-6">

            <div class="flex items-center justify-center mb-4"> Appointment Start Time </div>
            <div class="flex items-center justify-center"> 
                            <input type="datetime-local" placeholder="context here" class="w-full rounded-lg">
            </div>  

        </div>

        <div class="h-1/3 w-full bg-white py-6">

            <div class="flex items-center justify-center mb-4"> Appointment End Time </div>
            <div class="flex items-center justify-center"> 
                            <input type="datetime-local" placeholder="context here" class="w-full rounded-lg">
            </div>  

        </div>

        <div class="w-full h-12 flex items-center justify-between">
             <button data-modal-hide="request-modal" class="bg-blue-600 text-white py-1 px-2 rounded-sm"> Cancel </button>
            <a href="#"><button class="bg-blue-600 text-white py-1 px-2 rounded-sm"> Confirm </button> </a> 
        </div>


    </div>

</div>


</template>

<script>


</script>
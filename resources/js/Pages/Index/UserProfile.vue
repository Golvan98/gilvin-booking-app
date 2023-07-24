<template>

<div class="h-screen w-full bg-gray-300 flex-nowrap">

  <div class="bg-gray-700 w-full h-3/6">
    <div class="bg-inherit h-1/4">1 </div>
    <div class="bg-inherit h-1/ ml-4 text-white font-bold text-lg"> Hello Gilvin! <br> <br> You can edit information about yourself here as you please</div>
    <div class="bg-inherit h-1/4 flex items-end"> <button class="ml-4 bg-blue-400 text-white font-bold text-lg rounded-lg px-2 py-0.5"> Edit Profile</button> </div>
    <div class="bg-inherit h-1/4">1 </div>

  </div> 
    
  <div class=" bg-gray-700 w-full h-1/6 flex">
    
    <div class="h-full w-3/5 ml-24 mr-12 bg-white flex justify-between">
        <div class="ml-4 mt-2 h-1/6 text-lg font-bold"> Your Account </div>
        <div class="mr-4 mt-2 h-1/6 text-white"> <button class="bg-indigo-700 px-2 py-1 bg-indigo-700 rounded-sm">  Settings</button> </div>
    </div>

    <div class="h-full w-2/5 mr-12 bg-white flex justify-between"> 
        <div class="ml-4 mt-2 h-1/6 text-white"> <button class="bg-blue-400 px-2 py-1 rounded-sm">  Appointments</button> </div>
        <div class="mr-4 mt-2 h-1/6 text-white"> <button class="bg-indigo-700 px-2 py-1 bg-indigo-700 rounded-sm">  Settings</button> </div>
    </div>
        
  </div>

  <div class=" bg-gray-300  w-full h-2/6 flex">

    <div id="first box" class="h-full w-3/5 ml-24 mr-12 bg-white border border-red-300 flex">

        <div class="w-1/2 h-1/4 flex-nowrap items-center justify-center bg-gray-200"> 
            <div class="w-full h-1/3 ml-2"> <label> User Name </label> </div>
            <div class="h-1/2 mx-2"><input type="text" class="w-full h-full" placeholder="John Doe"> </div>
        </div>
        
        <div class="w-1/2 h-1/4 flex-nowrap items-center justify-center bg-gray-200"> 
            <div class="w-full h-1/3 ml-2"> <label> Email Address </label> </div>
            <div class="h-1/2 mx-2"><input type="text" class="w-full h-full" placeholder="John Doe"> </div>
        </div>

    </div>

    

    

    <div class="h-full w-2/5 mr-12 bg-white border border-red-300">2

    </div>
        
  </div>
   



</div>
</template>

<script setup>

</script>
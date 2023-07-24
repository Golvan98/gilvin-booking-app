<template>

<div class="h-screen w-full bg-gray-300 flex-nowrap">

  <div class="bg-gray-700 w-full h-3/6">
    <div class="bg-inherit h-1/4">1 </div>
    <div class="bg-inherit h-1/ ml-4 text-white font-bold text-lg"> Hello Gilvin! <br> <br> You can edit information about yourself here as you please</div>
    <div class="bg-inherit h-1/4 flex items-end"> <button class="ml-4 bg-blue-400 text-white font-bold text-lg rounded-lg px-2 py-0.5"> Edit Profile</button> </div>
    <div class="bg-inherit h-1/4">1 </div>

  </div> 
    
  <div class=" bg-gray-700 w-full h-1/6 flex">
    
    <div class="h-full w-3/5 ml-24 mr-12 bg-white flex-nowrap">

      <div class="w-full h-4/5 flex justify-between bg-white">
        <div class="ml-4 mt-4  h-1/6 text-lg font-bold"> Your Account </div>
        <div class="mr-4 mt-4  h-1/6 text-white"> <button class="bg-indigo-700 px-2 py-1 bg-indigo-700 rounded-sm">  Settings</button> </div>
      </div>

      <div class="w-ful">
        <div class="ml-4 text-gray-300 text-lg font-bold"> Non-Professional Account </div>
      </div>
    </div>
    

    <div class="h-full w-2/5 mr-12 bg-white flex justify-center"> 
        <div class="ml-4 mt-2 h-1/6 text-white"> <button class="bg-red-700 px-2 py-1 rounded-sm">  Reset Password </button> </div>
      
        <div
            class="w-40 h-40 rounded-full 
                inline-flex items-center justify-center 
                bg-gray-400 text-gray-700 text-xl font-bold">
            Photo Here
            
        </div>


        <div class="mr-4 mt-2 h-1/6 text-white"> <button class="bg-indigo-700 px-2 py-1 bg-indigo-700 rounded-sm">  Upload New Image</button> </div>
    </div>
        
  </div>

  <div class=" bg-gray-300  w-full h-2/6 flex">

    <div id="first box" class="h-4/5 w-3/5 ml-24 mr-12 bg-white border border-gray-300 flex">

      <div class=" w-1/2">

        <div class="mt-8 w-full h-1/3 flex-nowrap items-center justify-center "> 
            <div class="w-full h-1/3 ml-2"> <label> User Name </label> </div>
            <div class="h-1/2 mx-2"><input type="text" class="w-full h-full" placeholder="John Doe"> </div>
        </div>
        
        <div class="mt-4 w-full h-1/3 flex-nowrap items-center justify-center "> 
            <div class="w-full h-1/3 ml-2"> <label> Email Address </label> </div>
            <div class="h-1/2 mx-2"><input type="text" class="w-full h-full" placeholder="John Doe"> </div>
        </div>

      </div>

      <div class="w-1/2">
        
        <div class="mt-8 w-full h-1/3 flex-nowrap items-center justify-center "> 
            <div class="w-full h-1/3 ml-2"> <label> User Name </label> </div>
            <div class="h-1/2 mx-2"><input type="text" class="w-full h-full" placeholder="John Doe"> </div>
        </div>
        
        <div class="mt-4 w-full h-1/3 flex-nowrap items-center justify-center "> 
            <div class="w-full h-1/3 ml-2"> <label> Email Address </label> </div>
            <div class="h-1/2 mx-2"><input type="text" class="w-full h-full" placeholder="John Doe"> </div>
        </div>

      </div>

    </div>

    

    

    <div class="h-4/5 w-2/5 mr-12 bg-white border flex items-center justify-center">
    
  
      <div class="flex-nowrap">
        <div class="mr-4 flex items-center justify-center h-16 w-16 rounded-full bg-gray-400">
        <span class="text-white text-2xl font-bold">
            12
        </span> <br>
        </div>
        <div class="mr-4 bg-inherit text-start text-xs"> Appointments</div>
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

</script>
<template>

<div id="maingrid" class="h-screen w-full grid grid-rows-6 grid-cols-5 bg-green-300">

  <div id="navbar" class="grid grid-rows-6 grid-cols-6 col-span-1 row-span-6 bg-white border border-black">

    <div id="contacts" class="row-span-3 col-span-6 bg-white">

            <div class="flex-nowrap h-full">

                <div class="flex items-end justify-center h-12 font-bold text-2xl mt-4 bg-white"> 
                    Contact Details 
                </div> 
                
                <div class="flex items-center justify-center w-full"> Email Address </div>
                <div class="flex items-center justify-center  w-full"> Linkedin </div>
                <div class="flex items-center justify-center  w-full"> Instagram </div>
            </div> 

    </div>

    <div id="services/description" class="row-span-3 col-span-6 bg-white">

            <div class="flex-nowrap h-full">

                <div class="flex items-end justify-center h-12 font-bold mt-4 text-2xl bg-white"> 
                    Verified Services
                </div> 
                
                <div class="flex items-center justify-center w-full"> Civil Engineering</div>
                <div class="flex items-center justify-center  w-full"> CAD </div>
                <div class="flex items-center justify-center  w-full"> Consultancy </div>
            </div> 

    </div>

  </div>

  <div id="profileContent" class="col-span-4 row-span-6 bg-red-300 grid grid-cols-2 grid-rows-6">

      <div id="profilePic" class="bg-green-300 col-span-2 row-span-4">


      </div>

      <div id="shortDescription" class="col-span-1 row-span-1 bg-indigo-700">

      </div>

      <div id="links" class="col-span-1 row-start-6 bg-green-300">

      </div>

  </div>

</div>

</template>



<script setup>



</script>
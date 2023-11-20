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
<!-- u put md:size around here, flex centers wont matter I think -->
      <div id="profilePic" class="bg-white col-span-2 row-span-4 border border-red-300 items-center justify-center flex border-b-green-700">

        <div class="w-1/3 h-3/5"
          style="background-image: url('storage/aiGeneratedPic.png'); 
            background-repeat: no-repeat; 
            background-size: cover
            border-color: black;">
         
        </div>
      </div>

      <div id="shortDescription" class="col-span-1 row-span-1 bg-white flex-nowrap">

        <div class="flex w-full h-12 items-center justify-start font-bold text-4xl ml-2">
        John Doe
        </div>

        <div class="flex w-full h-6 items-start justify-start ml-2">
        Palao, Iligan City
        </div>
        <div class="flex w-full h-6 items-start justify-start ml-2 text-sm">
        I make shitty websites as a startup junior developer
        </div>
       

      </div>

      <div id="links" class="col-span-1 row-start-6 bg-green-300">

        <div class="flex w-full h-12 items-center justify-start font-bold text-4xl ml-2">
        Links
        </div>

        <div class="flex text-blue-700 hover:text-blue-500 w-full h-6 items-start justify-start ml-2 text-sm">
          <a href="https://www.linkedin.com/in/gilvin-zalsos-213692141/" target="blank"> Linkedin </a>
        </div>
        <div class="flex text-blue-700 hover:text-blue-500 w-full h-6 items-start justify-start ml-2 text-sm">
          <a href="https://github.com/Golvan98" target="blank"> Github </a>
        </div>

      </div>

  </div>

</div>


</template>



<script setup>



</script>


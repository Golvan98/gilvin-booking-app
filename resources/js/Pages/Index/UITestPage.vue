<template>

<div id="maingrid" class="h-screen w-full grid grid-rows-6 grid-cols-5">

  <div id="navbar" class="grid grid-rows-6 grid-cols-6 col-span-1 row-span-6 bg-white border border-gray-300">

    <div id="contacts" class="row-span-3 col-span-6 bg-white">

            <div class="flex-nowrap h-full bg-red-300">

                <div class="flex-nowrap items-end justify-center font-bold text-2xl mt-4 h-full bg-red-500"> 
                   <div> Contact Details </div> 
               
                  <div class="flex "> Email Address  </div>
                  <div class="flex text-blue-700"> gilvinsz@gmail.com  </div>
                  <div class="flex"> Linkedin </div>
                  <div class="flex"> Instagram </div>


                </div> 
                
             
            </div> 

    </div>

    <div id="services/description" class="row-span-3 col-span-6 bg-white">

            <div class="flex-nowrap h-full">

                <div class="flex items-end justify-center h-12 font-bold mt-4 text-2xl bg-white"> 
                    Verified Services
                </div> 
                
                <div class="flex items-center w-full mx-25-percent"> Civil Engineering</div>
                <div class="flex items-center w-full mx-25-percent"> CAD </div>
                <div class="flex items-center w-full mx-25-percent"> Consultancy </div>
            </div> 

    </div>

  </div>

  <div id="profileContent" class="col-span-4 row-span-6 grid grid-cols-2 grid-rows-6">
<!-- u put md:size around here, flex centers wont matter I think -->
      <div id="profilePic" class="bg-white col-span-2 row-span-4 border border-red-300 items-center justify-center flex border-b-green-700">

        <div class="w-1/3 h-3/5 border border-red-300"
          style="background-image: url('storage/aiGeneratedPic.png'); 
            background-repeat: no-repeat; 
            background-size: cover;
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

      <div id="links" class="col-span-1 row-start-6">

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
<style>

  .my-25-percent {
    margin-top: 25%;
    margin-bottom: 25%;
  }

  .mx-25-percent {
    margin-left: 25%;
    margin-right: 25%;
  }
  

  </style>


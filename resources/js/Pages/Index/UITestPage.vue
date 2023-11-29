<template>

<div id="wrapper" class="w-full h-screen with-background border flex items-center">

  <div id="maingrid" class="grid grid-rows-6 grid-cols-5 border border-purple-400 w-5/6 h-5/6 mx-auto ">
    

    <div id="navbar" class="grid grid-rows-6 h-full grid-cols-6 col-span-1 row-span-6 bg-white w-full ">

      <div id="contacts" class="row-span-3 col-span-6 border border-gray-300">

              <div class="flex-nowrap h-full">

                  <div class="grid grid-cols-2 sm:text-xs md:text-sm lg:text-2xl grid-rows-5 items-center justify-center mx-auto w-full bg-white h-full font-bold mt-4"> 

                    <div class="row-span-1 sm:col-span-2 md:col-span-2 lg:col-span-2 sm:text-xs md:text-sm lg:text-2xl lg:text-black mx-auto font-bold"> Contact Details </div> 
                    
                    <div class="grid grid-cols-1 grid-rows-2 row-start-2 col-span-2 mx-auto"> 
                     <div class="row-span-1 mx-auto"> Email Address  </div> 
                     <div class="row-span-1 text-blue-400"> gilvinsz@gmail.com  </div> 
                    </div>
                    
                    <div class="grid grid-cols-1 grid-rows-2 row-start-3 col-span-2 mx-auto"> 
                     <div class="row-span-1 mx-auto"> Linkedin  </div> 
                     <div class="row-span-1 text-blue-400 text-xs"> www.linkedin.com/in/gilvin-zalsos-213692141/  </div> 
                    </div>


                    <div class="grid grid-cols-1 grid-rows-2 row-start-4 col-span-2 mx-auto"> 
                     <div class="row-span-1 mx-auto"> Skype  </div> 
                     <div class="row-span-1 text-blue-400 text-xs"> live:gilvinsz </div> 
                    </div>

                  </div> 
                  
              
              </div> 

      </div>

      <div id="services/description" class="row-span-3 col-span-6 bg-white">

              <div class="flex-nowrap h-full ">

                  <div class="flex items-end justify-center h-12 font-bold mt-4 text-2xl bg-white"> 
                      Verified Services
                  </div> 
                  
                  <div class="flex items-center w-full mx-25-percent"> Civil Engineering</div>
                  <div class="flex items-center w-full mx-25-percent"> CAD </div>
                  <div class="flex items-center w-full mx-25-percent"> Consultancy </div>

              </div> 

      </div>

    </div>

    <div id="profileContent" class="col-span-4 row-span-6 grid grid-cols-2 grid-rows-6 h-full">
  <!-- u put md:size around here, flex centers wont matter I think -->
        <div id="profilePic" class="bg-white col-span-2 row-span-4 border border-red-300 items-center justify-center flex border-b-green-700">

          <div class="w-2/5 h-4/5 border border-red-300"
            style="background-image: url('storage/aiGeneratedPic.png'); 
              background-repeat: no-repeat; 
              background-size: cover;
              border-color: black;">
          
          </div>
        </div>

        <div id="shortDescription" class="col-span-2 row-span-1 bg-white flex-nowrap">

          <div class="bg-white flex w-full h-12 items-center justify-start font-bold text-4xl">
          John Doe
          </div>

          <div class="bg-white flex w-full h-6 items-start justify-start">
          Palao, Iligan City
          </div>
          <div class="bg-white flex w-full h-6 items-start justify-start text-sm">
          I make shitty websites as a startup junior developer
          </div>
        

        </div>

        <div id="links" class="bg-white col-span-2 row-start-6">

          <div class="flex w-full h-12 items-center justify-start font-bold text-4xl">
          Links
          </div>

          <div class="bg-white flex text-blue-700 hover:text-blue-500 w-full h-6 items-start justify-start text-sm">
            <a href="https://www.linkedin.com/in/gilvin-zalsos-213692141/" target="blank"> Linkedin </a>
          </div>
          <div class="bg-white flex text-blue-700 hover:text-blue-500 w-full h-6 items-start justify-start text-sm">
            <a href="https://github.com/Golvan98" target="blank"> Github </a>
          </div>

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
  
  .with-background {
    background-image: url('storage/greybg.png');
    background-size: cover;
    background-position: center;

  }

  </style>


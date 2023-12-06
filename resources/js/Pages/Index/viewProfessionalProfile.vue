<template>

<div id="wrapper" class="w-full h-screen with-background flex items-center">

  <div id="maingrid" class="grid grid-rows-6 grid-cols-5 w-5/6 h-5/6 mx-auto ">
    

    <div id="navbar" class="grid grid-rows-6 h-full grid-cols-6 col-span-1 row-span-6 bg-white w-full ">

      <div id="contacts" class="row-span-3 col-span-6 h-full">

              <div class="flex-nowrap h-full">

                  <div class="grid grid-cols-2 sm:text-xs md:text-sm lg:text-xl grid-rows-4 items-center justify-center mx-auto w-full bg-white h-full font-bold mt-4"> 

                    <div class="row-start-1 sm:text-red-700 md:text-yellow-300 lg:text-green-700 sm:col-span-2 md:col-span-2 lg:col-span-2 sm:text-xs md:text-sm lg:text-2xl mx-auto font-bold"> Contact Details </div> 
                    
                    <div class="grid grid-cols-1 grid-rows-2 row-start-2 col-span-2 mx-3 border-b border-gray-300"> 
                     <div class="row-span-1 mx-auto"> Email Address  </div> 
                     <div class="row-span-1 text-blue-400 mx-auto"> {{viewProfessional.email}}  </div> 
                    </div>
                    
                    <div class="grid grid-cols-1 grid-rows-2 row-start-3 col-span-2 mx-3 border-b border-gray-300"> 
                     <div class="row-span-1 mx-auto"> Linkedin  </div> 
                     <div class="row-span-1 text-blue-400 text-xs mx-auto"> linkedin.com/in/gilvin-zalsos-213692141/  </div> 
                    </div>

                    <div class="grid grid-cols-1 grid-rows-2 row-start-4 col-span-2 mx-3 border-b border-gray-300 mb-3"> 
                     <div class="row-span-1 mx-auto"> Skype  </div> 
                     <div class="row-span-1 text-blue-400 text-xs mx-auto"> live:gilvinsz </div> 
                    </div>

                  </div> 
                               
              </div> 

      </div>

      <div id="services/description" class="row-span-3 col-span-6 bg-white" >

              <div class="flex-nowrap h-full ">

                  <div class="grid grid-cols-2 sm:text-xs md:text-sm lg:text-xl items-center justify-center mx-auto w-full bg-white h-full font-bold"> 

                    <div class="row-span-1 sm:col-span-2 md:col-span-2 lg:col-span-2 sm:text-xs md:text-sm lg:text-2xl lg:text-black mx-auto font-bold"> Services </div> 
                    
                    <div v-for="professionalService in professionalServices" class="grid grid-cols-1 grid-rows-1 row-span-1 col-span-2 mx-3 border-b border-gray-300"> 
                     <div class="mx-auto items-start"> {{ professionalService }} </div> 
                    </div>

                    
                  </div> 

              </div> 

      </div>

    </div>

    <div id="profileContent" class="col-span-4 row-span-6 grid grid-cols-2 grid-rows-6 h-full border-l border-gray-300">
  <!-- u put md:size around here, flex centers wont matter I think -->
        <div id="profilePic" class="bg-white col-span-2 row-span-4 items-center justify-center flex ">

          <div class="sm:w-3/5 sm:h-4/5 md:w-3/5 md:h-5/6 h-full lg:w-2/5 lg:h-5/6"
            style="background-image: url('http://127.0.0.1:8000/storage/aiGeneratedPic.png'); 
              background-repeat: no-repeat; 
              background-size: cover;
              border-color: black;">
          
          </div>
        </div>

        <div id="shortDescription" class="col-span-2 row-span-1 bg-white flex-nowrap border-t border-gray-300">

          <div class="bg-white flex w-full h-12 items-center justify-start font-bold sm:text-xl md:text-2xl lg:text-3xl">
            <span class="ml-2"> {{viewProfessional.first_name}} {{viewProfessional.last_name}} </span>
          </div>

          <div class="bg-white flex w-full h-6 items-start justify-start">
            <span class="ml-2"> Genereic Block 8, Streetrandom 12., Madeupstate, Utopiacountry, UC 69420</span>
          </div>
          <div class="bg-white flex w-full h-6 items-start justify-start text-sm">
            <span class="ml-2"> {{viewProfessional.bio}}</span>
          </div>
        

        </div>

        <div id="links" class="bg-white col-span-2 row-start-6">

          <div class="sm:text-xl md:text-2xl lg:text-3xl flex w-full h-12 items-center justify-start font-bold text-4xl">
            <span class="ml-2">Links</span> 
          </div>

          <div class="bg-white flex text-blue-700 hover:text-blue-500 w-full h-6 items-start justify-start text-sm">
            <a href="https://www.linkedin.com/in/gilvin-zalsos-213692141/" target="blank" class="ml-2"> Linkedin </a>
          </div>
          <div class="bg-white flex text-blue-700 hover:text-blue-500 w-full h-6 items-start justify-start text-sm">
            <a href="https://github.com/Golvan98" target="blank" class="ml-2"> Github </a>
          </div>

        </div>

    </div>

  </div>

</div>

</template>



<script setup>
  const props = defineProps (
    {
      viewProfessional:Object,
      authProfessional:Object,
      professionalServices:Object
    }
  )



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
    background-image: url('http://127.0.0.1:8000/storage/greybg.png');
    background-size: cover;
    background-position: center;

  }

  </style>


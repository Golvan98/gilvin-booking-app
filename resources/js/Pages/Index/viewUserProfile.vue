<template>



<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
 <head>
 
 <title>Document</title>
 </head>
 <body>
<div id="maingrid" class="grid grid-cols-6 bg-gray-600 h-screen m-auto">

    <div id="main1stcol" class="grid grid-rows-6 col-span-1 bg-gray-600">


        <div id="1strow1stcol" class="row-span-2 bg-inherit flex justify-center items-center"> 

          <div id="avatar"
            :style="{ 
                'background-image': `url('storage/${user.profilepic}')`, 
                'background-repeat': 'no-repeat', 
                'background-size': 'cover' 
            }"

            class="w-32 h-32 rounded-full 
                    inline-flex items-center justify-center 
                    bg-gray-400 text-gray-700 text-xl font-bold shadow-sm border border-red-500">                   
            </div>
        
        </div>

        <div id="2ndrow1stcol" class="bg-inherit row-span-2 flex-nowrap justify-center"> 
            <div class="mx-4 text-white font-bold"> ABOUT ME </div>
            <div class="mx-4 text-white"> {{ user.bio }}</div>
            <div class="mx-4 border-b border-gray-300 mt-12"/>
        </div>
        
        <div id="3rdrow1stcol" class="row-span-2 flex-nowrap text-white mx-4 h-12 "> 
          <div class="font-bold"> WEBSITES AND SOCIAL LINKS</div>
          <div class="text-md"> Facebook:</div>
          <div class="text-sm"> www.facebook.com/gilvin.zalsos/</div>
          <div class="text-md"> Facebook:</div>
          <div class="text-smw-full"> www.facebook.com/gilvin.zalsos/</div>
          <div class="text-md"> Facebook:</div>
          <div class="text-sm"> www.facebook.com/gilvin.zalsos/</div>
          

        </div>

    </div>

    <div id="2ndcolmain" class="col-span-3 grid grid-rows-6 bg-gray-300 ml-4 ">
      
      <div class="row-span-1 bg-gray-300 flex justify-between">

          <div class="flex-nowrap "> 
            <div class="ml-12 mt-4 text-4xl font-bold"> {{ user.first_name}} </div>
            <div class="ml-12 text-4xl font-bold"> {{  user.last_name }} </div>
            <div class="ml-12 text-1xl font-bold"> Profession </div>
          </div>
          

          <div> 
            <div class="mt-4 row-span-1 text-sm mr-12"> 1234 Main Street, New York, NY 10001</div>
                <div class="row-span-1 text-sm"> + 0906 350 8750</div>
                <div class="row-span-1 text-sm"> {{ user.email }}</div>
                <div class="row-span-1 text-sm"> github.com/Ricko.Blanco98</div>
          </div>

      </div>

      <div class="row-span-5 bg-green-300 grid grid-rows-5">

        <div class="row-span-3 grid grid-cols-5 grid-rows-5">

          <div id="left side of 1stcol" class="grid grid-rows 5 row-span-3 flex-nowrap col-span-2 bg-white border-r border-indigo-300">

            <div class="row-span-1 grid grid-rows-5 ">
               <div class="row-span-2 ml-4 mt-4">WORK EXPERIENCE</div>
               <div class="row-span-1 ml-4 text-xs font-bold"> Alsons </div>
               <div class="row-span-1 ml-4 text-xs"> Cadet Engineer </div>
               <div class="row-span-1 ml-4 text-xs"> 2015-2017 </div>
               
            </div>

            <div class="row-span-2 grid grid-rows-3"> 
              <div class="row-span-1 ml-4 text-xs font-bold"> Holcim </div>
               <div class="row-span-1 ml-4 text-xs"> Supervisor Engineer </div>
               <div class="row-span-1 ml-4 text-xs"> 2017-2019 </div>
            </div>

             <div class="row-span-2 grid grid-rows-3"> 
              <div class="row-span-1 ml-4 text-xs font-bold"> Holcim </div>
               <div class="row-span-1 ml-4 text-xs"> Maintenance Manager </div>
               <div class="row-span-1 ml-4 text-xs"> 2019-2023 </div>
            </div>

          </div>

       
          <div id="right side of 2ndcol" class="flex-nowrap col-span-3 row-span-3 bg-white border-r border-indigo-300">
                hehhe
          </div>

        </div>

      </div>
      
    </div>
     

 


   
</div>

   
 </body>
</html>
    
    
    
    
    
    
</template>
    
    
<script setup>
const props = defineProps (
  {
    user:Object
  }
)
    
</script>
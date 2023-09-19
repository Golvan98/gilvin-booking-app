<template>



<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
 <head>
 
 <title>Document</title>
 </head>
 <body>
<div id="maingrid" class="grid grid-cols-6 bg-gray-600">

    <div id="main1stcol" class="grid grid-rows-6 col-span-1">


        <div id="1strow1stcol" class="row-span-2 bg-gray-600 flex justify-center items-center"> 

          <div id="avatar"
            :style="{ 
                'background-image': `url('storage/${user.profilepic}')`, 
                'background-repeat': 'no-repeat', 
                'background-size': 'cover' 
            }"

            class="w-40 h-40 rounded-full 
                    inline-flex items-center justify-center 
                    bg-gray-400 text-gray-700 text-xl font-bold shadow-sm border border-red-500">                   
            </div>
        
        </div>

        <div id="2ndrow1stcol" class="row-span-2 flex-nowrap justify-center"> 
            <div class="mx-8 text-white font-bold"> ABOUT ME </div>
            <div class="text-white mx-8"> {{ user.bio }}</div>
            <div class="mx-8 border-b border-gray-300 mt-12"/>
        </div>
        
        <div id="3rdrow1stcol" class="flex-nowrap text-white mx-8 h-12"> 
          <div class="font-bold"> WEBSITES AND SOCIAL LINKS</div>
          <span class="text-md"> Facebook:</span>
          <span class="text-sm"> www.facebook.com/gilvin.zalsos/</span>
          <span class="text-md"> Facebook:</span>
          <span class="text-sm"> www.facebook.com/gilvin.zalsos/</span>
          <span class="text-md"> Facebook:</span>
          <span class="text-sm"> www.facebook.com/gilvin.zalsos/</span>
          

        </div>

    </div>
     

     <div id="main2ndcol" class="bg-gray-200 col-span-3 grid grid-rows-6">

        <div id="1strow2ndcol" class="bg-gray-200 row-span-1 grid grid-rows-3 grid-cols-4 border-b border-gray-700"> 

            <div id="Name" class="row-start-2 row-end-4  col-span-1 grid grid-rows-3"> 
              <div class="row-span-2 ml-12 gap-y-2"> 
                <div class="text-4xl font-bold"> {{ user.first_name}} </div>
                <div class="text-4xl font-bold"> {{  user.last_name }} </div>
                <div class="text-1xl font-bold"> Profession </div>
              </div>
            </div>

            <div id="Contact Information" class="row-start-2 row-end-4 col-start-4 col-span-1 grid grid-rows-4"> 
             
              <div class="row-span-3  grid grid-rows-6"> 
                <div class="row-span-1 text-sm"> 1234 Main Street, New York, NY 10001</div>
                <div class="row-span-1 text-sm"> + 0906 350 8750</div>
                <div class="row-span-1 text-sm"> {{ user.email }}</div>
                <div class="row-span-1 text-sm"> github.com/Ricko.Blanco98</div>
              </div>
             
            </div>

        </div> 

        <div id="2ndrow2ndcol" class="bg-green-200 row-span-6 grid grid-rows-3"> 

          <div class="row-span-1 bg-red-200 ml-12 mt-4 grid grid-cols-4 grid-rows-4"> 

              <div class="font-bold col-span-1 row-span-1 text-2xl"> 
                WORK EXPERIENCE 
              </div>
            
              <div class="font-bold col-start-1 row-span-3 grid grid-rows-6">
                <div class="row-span-1 text-xl"> Maxim</div>
                <div class="row-span-1 text-xs"> Cadet Engineer</div>
                <div class="row-span-1 text-xs"> 2015-2019</div>

                <div class="row-span-1 text-xl"> Holcim</div>
                <div class="row-span-1 text-xs"> Supervisor</div>
                <div class="row-span-1 text-xs"> 2019-2024</div>
              </div>
            
          </div>

     

      


        </div>
      

     </div>

     <div class="tile bg-red-500 col-span-2">
       <h1 class="tile-marker">Third filler row</h1>
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
<template>



<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
 <head>
 
 <title>Document</title>
 </head>
 <body>
   <div class="grid grid-cols-6 bg-gray-600">

     <div class="grid grid-rows-6 col-span-1">


        <div id="1strow1stcol" class="row-span-2 bg-gray-600 flex justify-center items-center"> 

          <div id="avatar"
            :style="{ 
                'background-image': `url('storage/${user.profilepic}')`, 
                'background-repeat': 'no-repeat', 
                'background-size': 'cover' 
            }"

            class="w-40 h-40 rounded-full 
                    inline-flex items-center justify-center 
                    bg-gray-400 text-gray-700 text-xl font-bold shadow-sm border border-red-500 my-12">                   
            </div>
        
        </div>

        <div id="2ndrow1stcol" class="row-span-2 flex-nowrap justify-center mt-2"> 
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
     

     <div id="2ndcol" class="tile bg-amber-500 col-span-4">
       <h1 class="tile-marker">TWO</h1>
     </div>

     <div class="tile bg-red-500 col-span-1">
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
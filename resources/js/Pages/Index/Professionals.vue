<template>

<div class="grid grid-cols-6 grid-rows-6 bg-gray-200 items-center justify-center h-screen w-full">

    <div class="bg-white row-start-2 row-end-6 col-start-2 col-end-6 grid grid-cols-6 grid-rows-6 items-center justify-center h-full w-full">
      
        <div class="row-span-1 bg-inherit col-span-6 flex justify-center border border-red-300"> 
           <div class="mx-25-percent w-full bg-indigo-300"> test here </div> 

        </div> 

        <div class="row-span-5 bg bg-indigo-300 row-start-2 row-end-6 w-full col-start-2 col-end-6 h-full flex justify-center border border-red-300">
             div test 1 
        </div> 
     
    </div>

  
</div>




</template>



<script setup>

const props = defineProps ({
    Professionals:Object
})

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
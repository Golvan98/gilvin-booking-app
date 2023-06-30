<template>


 <header class="border-b border-red-500 dark:border-gray-700 bg-green-500 dark:bg-gray-800 w-full h-24">
    
    <div class="container mx-auto">
      <nav class="flex items-center justify-between ">
        <div class="text-lg font-medium">
          GBK
        </div>
        <div class="text-xl text-indigo-600 dark:text-indigo-300 font-bold text-center">
            Header Content 2
        </div>

        <div class="flex items-center gap-4">
            Header Content 3
        </div>
      </nav>
    </div>

</header>

<main class="h-screen w-full">  

  <body class="w-full h-full bg-white">
    
  <div class="w-full h-full flex justify-center">

    <div class="object-fill w-full h-4/5 border border-red-300 flex items-center justify-center" 
    style="background-image: url('https://scontent.fdvo2-2.fna.fbcdn.net/v/t1.15752-9/357632976_251609360935752_3103613818120488316_n.jpg?stp=dst-jpg_s2048x2048&_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_ohc=XptaT54CnPgAX8a-3_5&_nc_ht=scontent.fdvo2-2.fna&oh=03_AdTvmX_FB1wSWqZc2QGFlHre0q3zYNrvJDI5y05MWbb_1A&oe=64C5F124'); 
    background-repeat: no-repeat; 
    background-size: cover;">

    
    <div class="w-3/5 h-full border border-red-700">
      test here
    </div>


    <div class="w-2/5 h-full flex-nowrap">
      
      <div class="bg-red-300 w-full h-1/4">
          test
      </div>

      <div class>
          test
      </div>

      
    </div>



    </div>

  </div>  

  
     
    

  </body>
    <slot> Default </slot> 

    <footer class="bg-white w-full h-1/4 bg-green-700">
    footer here

    </footer>


</main>






</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>


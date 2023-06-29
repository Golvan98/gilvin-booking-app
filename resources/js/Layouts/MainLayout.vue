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

  <body class="w-full h-full bg-red-300">
    
    <img src="{{ asset('app/public/rayz.png') }}" alt="description of myimage">  
    
    <img src="{{ asset('\app\public\rayz.png') }}" alt="description of myimage">  

    
    <img src="{{ asset('app/public/rayz.png') }}" alt="description of myimage">  

    <img src="{{ asset('public/rayz.png') }}" />

    <img src="url('storage/app/public/rayz.png')">
    <img src="url('storage\app\public\rayz.png')">
    <img src="url('storage\rayz.png')">
    <img src="url('storage/rayz.png')">

    
   
                    

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


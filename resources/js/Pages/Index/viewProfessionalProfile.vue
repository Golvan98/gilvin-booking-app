<template>



  <!-- index.html -->
  <!DOCTYPE html>
  <html lang="en">
   <head>
   
   <title>Document</title>
   </head>
   <body>
  <div id="maingrid" class="grid grid-cols-6 bg-white h-screen items-center mx-52">
  
      <div id="main1stcol" class="grid grid-rows-6 col-span-1 bg-gray-600 w-full h-full">
  
         
          <div v-if="authProfessional.id == viewProfessional.id"  id="1strow1stcol" class="row-span-2 bg-inherit flex flex-col justify-start items-center">

            <div style="align-self: flex-start;" class="ml-4 mt-4 bg-green-300 text-white font-bold rounded-sm p-1"> 
              <a href="/professionalProfile"> Settings  </a>
            </div>

            <div id="avatar-container" class="w-40 h-40 inline-flex items-center justify-center rounded-full text-gray-700 text-xl font-bold shadow-sm border border-red-500 bg-green-300">
  
                <div id="avatar" :style="{ 
                    'background-image': `url('http://127.0.0.1:8000/storage/${viewProfessional.profilepic}')`,
                    'background-repeat': 'no-repeat', 
                    'background-size': 'cover' 
                }" class="w-full h-full rounded-full inline-flex items-center justify-center">                   
                </div>

            </div>

        </div>

        <div v-else id="1strow1stcol" class="row-span-2 bg-inherit flex justify-center items-center"> 
  
            <div id="avatar"
              :style="{ 
                  'background-image': `url('http://127.0.0.1:8000/storage/${viewProfessional.profilepic}')`,
                  'background-repeat': 'no-repeat', 
                  'background-size': 'cover' 
              }"
 
              class="w-40 h-40 rounded-full 
                      inline-flex items-center justify-center 
                       text-gray-700 text-xl font-bold shadow-sm border border-red-500">              
            </div>
          
          </div>
  
          <div id="2ndrow1stcol" class="bg-inherit row-span-2 flex-nowrap justify-center"> 
              <div class="mx-4 text-white font-bold"> ABOUT ME </div>
              <div class="mx-4 text-white"> {{ viewProfessional.bio }}</div>
              <div class="mx-4 border-b border-gray-300 mt-12"> </div>
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
  
      <div id="2ndcolmain" class="col-span-5 grid grid-rows-6 bg-inherit border border-gray-300 w-full h-full ">
        
        <div class="row-span-1 bg-inherit flex justify-between border-b border-black mx-4">
  
            <div class="flex-nowrap "> 
              <div class="mt-4 text-4xl font-bold"> {{ viewProfessional.first_name}} </div>
              <div class="text-4xl font-bold"> {{  viewProfessional.last_name }} </div>
              <div class="text-1xl font-bold"> {{viewProfessional.profession}} </div>
            
            </div>
            
  
            <div> 
              <div class="mt-4 row-span-1 text-sm"> 1234 Main Street, New York, NY 10001</div>
                  <div class="row-span-1 text-sm"> + 0906 350 8750</div>
                  <div class="row-span-1 text-sm"> {{ viewProfessional.email }}</div>
                  <div class="row-span-1 text-sm"> github.com/Ricko.Blanco98</div>
                  
            </div>
  
        </div>
  
        <div id="card1" class="row-span-5 bg-inherit grid grid-rows-5 mt-4">
  
          <div class="row-span-3 grid grid-cols-5 grid-rows-5 border-b border-blue-300">
  
            <div id="left side of 1stcol" class="grid row-span-3 flex-nowrap col-span-2 bg-white border-r border-black">
  
              <div class="row-span-1 grid grid-rows-5">
                 <div class="row-span-2 ml-4 mt-4">WORK EXPERIENCE</div>
                 <div class="row-span-1 ml-4 text-xs font-bold"> Holcim </div>
                 <div class="row-span-1 ml-4 text-xs"> Intern </div>
                 <div class="row-span-1 ml-4 text-xs"> 2019-2020 </div>               
              </div>
  
              <div class="row-span-2 grid grid-rows-3"> 
                <div class="row-span-1 ml-4 text-xs font-bold"> Holcim </div>
                 <div class="row-span-1 ml-4 text-xs"> Cadet Engineer </div>
                 <div class="row-span-1 ml-4 text-xs"> 2019-2021 </div>
              </div>
  
              <div class="row-span-2 grid grid-rows-3"> 
                <div class="row-span-1 ml-4 text-xs font-bold"> Holcim </div>
                 <div class="row-span-1 ml-4 text-xs"> Junior Engineer </div>
                 <div class="row-span-1 ml-4 text-xs"> 2021-2023 </div>
              </div>
  
            </div>
  
            <div class="grid grid-rows 5 col-span-3 bg-white mx-4">
              <div class="row-span-2 border border-white"> 
                &nbsp
              </div>
              <div class="row-span-1 border border-white font-white text-xs">
                &nbsp
              </div>
              <div class="row-span-1 placeholder:border border-white font-bold text-xs">
                Job Role
              </div>
              <div class="row-span-1 border border-white font-bold text-xs">
                Job description lores epsum lores epsum dolores doctor accountant softeng engineer lawyer yada yada
              </div>
            </div>
            
            <div class="grid grid-rows 5 col-span-3 bg-white mx-4">
              <div class="row-span-1 font-white text-xs">
                &nbsp
              </div>
              <div class="row-span-1 placeholder:border border-white font-bold text-xs">
                Job Role
              </div>
              <div class="row-span-1 border border-white font-bold text-xs">
                Job description lores epsum lores epsum dolores doctor accountant softeng engineer lawyer yada yada
              </div>
            </div>
  
            <div class="grid grid-rows 5 col-span-3 bg-white mx-4">
  
              <div class="row-span-1font-white text-xs">
                &nbsp
              </div>
              <div class="row-span-1 placeholder:border border-white font-bold text-xs">
                Job Role
              </div>
              <div class="row-span-1 border border-white font-bold text-xs">
                Job description lores epsum lores epsum dolores doctor accountant softeng engineer lawyer yada yada
              </div>
  
            </div>
  
            <div class="row-span-2 grid grid-rows-6 col-span-2 border-r border-black mb-20">
              <div class="row-span-1 ml-4 text-xs font-bold"> Holcim </div>
              <div class="row-span-1 ml-4 text-xs"> Supervisor Engineer </div>
              <div class="row-span-1 ml-4 text-xs"> 2023-2024 </div>
            </div>
  
            <div class="grid grid-rows-5 col-span-3 mx-4">
  
              <div class="row-span-1 font-white text-xs">
                &nbsp
              </div>
              <div class="row-span-1 font-bold text-xs">
                Job Role
              </div>
              <div class="row-span-1 font-bold text-xs">
                Job description lores epsum lores epsum dolores doctor accountant softeng engineer lawyer yada yadaz
              </div>
            </div>
  
            
  
            
  
          </div>
  
          <div class="bg-inherit grid grid-rows-5 row-span-2 grid-cols-5 mx-4">
  
            <div class="row-span-1 col-span-2 flex items-center font-bold text-lg"> 
              EDUCATION 
            </div>
  
            <div class="row-span-2 col-start-1 col-span-2 border-r border-black my-4 flex-nowrap"> 
              <div class="font-bold"> Integrated Developmental School</div>
              <div> Iligan </div>
              <div> 2010-2014</div>
            </div>
            
            <div class="row-span-2 col-start-3 col-span-3 my-4 flex-nowrap ml-4"> 
              <div class="font-bold"> High School </div>
              <div> Lores Epsum Dolores Dolores Epsum LoresLores Epsum Dolores Dolores Epsum Lores  Lores Epsum Dolores Dolores Epsum Lores Lores Epsum Dolores Dolores Epsum Lores  Iligan </div>
            </div>
           
  
            <div class="row-span-2 col-start-1 col-span-2 border-r border-black my-4 flex-nowrap"> 
              <div class="font-bold"> MSU-IIT</div>
              <div> Iligan </div>
              <div> 2014-2020</div>
            </div>
  
            <div class="row-span-2 col-start-3 col-span-3  my-4 flex-nowrap ml-4"> 
              <div class="font-bold"> Bachelor of Science in Mechanical Engineering </div>
              <div> Lores Epsum Dolores Dolores Epsum LoresLores Epsum Dolores Dolores Epsum Lores  Lores Epsum Dolores Dolores Epsum Lores Lores Epsum Dolores Dolores Epsum Lores  Iligan </div>
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
      viewProfessional:Object,
      authProfessional:Object,
      
    }
  )
  console.log(props.viewProfessional.profilepic);
  </script>
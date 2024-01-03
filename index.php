<?php include 'navbar.php'; 
include 'admin/conn.php';
include 'admin/sessioncheck.php';?>



    <!-- Banner Image -->
    <div class="relative h-screen ">
        <img class="object-cover w-full mx-auto h-full" src="admin\images\12.jpg" style="border-radius: 30px; " alt="Banner Image">
        <br>
        <br>
        <br>
 
        <!-- Overlay Content -->
        <div class="absolute inset-x-0 bottom-3 flex items-center justify-center">
            <div class="text-white text-center">
                
                <a href="#" class="mt-9 inline-block px-5 py-2 text-pink-700 rounded-lg" style="background-color:rgb(0,0,0,0.8)">Explore Now</a>
                
            </div>
        </div>
       
    </div>
    <div class="w-full bg-black"><br></div>
    <div class="w-full bg-black"><br></div>
    <div class="w-full bg-black"><br></div>
    <div class="w-full bg-black"><br></div>
    <div class="w-full bg-black"><br></div>
    
    <div id="home" style="margin-top: 2px;">

    <section class="text-white h-full w-11/12 mx-auto bg-purple-900 rounded-md bg-clip-padding backdrop-filter backdrop-blur-md bg-opacity-0 border-2 border-black
" style="background-color:rgb(0,0,0,0.2)">
        <div class="container mx-auto flex p-6 md:flex-row flex-col items-center text-white">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
    <div class="relative aspect-w-1 aspect-h-1">
        <video class="object-cover object-center rounded-lg w-full h-full" autoplay loop muted playsinline>
            <source src="admin/images/video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

          <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-5xl text-5xl mb-4 font-medium text-white">Welcome to the MetalWorld
            </h1>
            <p class="mb-8 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Nam euismod maximus varius. Cras id dui ut ligula volutpat tristique. 
                Ut mauris ex, auctor vitae aliquet id, scelerisque ut nibh.</p>
            <!-- <div class="flex justify-center">
              <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
              <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
            </div> -->
          </div>
        </div>
        <br>
        <br>
    <br>
    <br>
    <br>
        <div>
        <!-- Centered Heading -->
        <h1 class="text-5xl font-semibold text-center p-1 mx-auto">Kindgdom of Punk </h1><br><br>
        <h2 class="text-2xl font-medium mt-3 ml-4">Home of Artists/Bands like...</h2>


        <!-- Add your content below the heading -->
        

        <div class="grid grid-cols-2 md:grid-cols-3 gap-16 p-28">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="admin/images/ok.jpg" alt="">
        <h2 class="text-center text-xl mt-2">Machine Gun Kelly</h2>
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="admin/images/ok (1).jpg" alt="">
        <h2 class="text-center text-xl mt-2">5 Seconds of Summer</h2>
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="admin/images/ok (2).jpg" alt="">
        <h2 class="text-center text-xl mt-2">Blackbear</h2>
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="admin/images/ok.jpg" alt="">
        <h2 class="text-center text-xl mt-2">Machine Gun Kelly</h2>
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="admin/images/ok (1).jpg" alt="">
        <h2 class="text-center text-xl mt-2">5 Seconds of Summer</h2>
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="admin/images/ok (2).jpg" alt="">
        <h2 class="text-center text-xl mt-2">Blackbear</h2>
    </div>
</div>
    
    
</div>

    </div>
      </section>
  </div>

  <br>
  <br>
  <br>
  <br>
  <div class="relative w-11/12 h-96 mx-auto overflow-hidden rounded-lg">
    <!-- Landscape Image -->
    <img class="w-full h-full object-cover" src="admin/images/concert.jpg" alt="Landscape Image">

    <!-- Text Overlay and Button -->
    <div class="absolute inset-0 flex items-center justify-center text-white text-center bg-black bg-opacity-50">
        <div>
            <h2 class="text-4xl font-bold mb-4"> Explore Concerts Near You</h2>
            <p class="text-lg mb-6">Additional information or description goes here.</p>
            <a href="#" class="py-2 px-4 bg-gray-800 text-white rounded-lg hover:bg-gray-600">Get In</a>
        </div>
    </div>
</div>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
 
  <div class="h-96" style="min-height: 800px;">
  <iframe class="w-10/12 h-full rounded-xl dark:bg-gray-800 mx-auto" src="http://localhost:8501/" title="Streamlit App" frameborder="0" allowfullscreen></iframe>
  </div>

<?php include 'footer.php'; ?>
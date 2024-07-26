<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="author"> 
    <meta name="3d Jersey" content="3d Customization">

    <title>Kween P Sports</title>

    <link rel="icon" href="rhi.png" class="rounded-full" type="image/x-icon"/>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fonts -->


  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
</style>
<body>

    <section id="hero" class="">
        <!-- NAVIGaTION -->
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="#">
                            <img class="h-10 w-40" src="logo.png" alt="Logo">
                        </a>
                    </div>
                    <!-- Navigation Links -->
                    <div class="flex-grow">
                        <div class="flex justify-center space-x-8">
                            <a href="#">
                                <p class="text-gray-900 inline-flex items-center px-8 pt-3 border-b-2 border-transparent hover:border-gray-300">HOME</p>
                            </a>
                            <a href="#" >
                                <p class="text-gray-900 inline-flex items-center px-8 pt-3 border-b-2 border-transparent hover:border-gray-300">SPORTS</p>
                            </a>
                            <a href="#">
                                <p class="text-gray-900 inline-flex items-center px-8 pt-3 border-b-2 border-transparent hover:border-gray-300">SERVICES</p>
                            </a>
                            <a href="#">
                                <p class="text-gray-900 inline-flex items-center px-8 pt-3 border-b-2 border-transparent hover:border-gray-300">ABOUT</p>
                            </a>
                        </div>
                    </div>
                    <!-- Sign Up Button -->
                    <div class="flex-shrink-0">
                        <a href="logout.php">
                            <button class="text-black bg-white px-4 py-2 rounded-md border-2 border-black">Sign Up</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        
           </section>
           <!-- PICTURE OR HOME SECTION -->
           <section id="home" style="background-image: url('bg.png'); background-repeat: no-repeat; background-size: cover;">
             <div class="container">
               <div class="row">
                 <div class="col-lg-5 col-sm-10  pt-14 text-white ">
                    
                   <h1 class="shadow-lg font-bold pt-14 capitalize">Customized sportswear
                    for you and your team</h1>
                    <p class="pb-10">With our 3D configurator, you can easily design professional-quality sportswear made just for you.
                        Why not kit out your club too with our attractive discounts.
                        </p>
                        <a href="https://tshirt3d.vercel.app/" ><button class="text-white bg-black px-4 py-2 rounded-md">  3D CUSTOMIZATION</button>
                          
                        </a>
                        <!-- https://www.spized.com/en/configurator?cfg-id=a44e6a658d93173d5413d68f5cebf7c232b6637f18b99c11154359efe430eaf7dee7120bac474334b3a03f0f129db8864475f18093ab3170c3893244ad24e488&uuid=ef084dd32a62486ea75f4ff31e1dedc1 -->
               
                 </div>
                 <div class="col-lg-7 col-sm-2 px-5 py-5">
                    <div>
                        <img src="3d.png" alt="">
                    </div>
               
                 </div>
                  
               </div>
                
                  
          
        
             </div>
        
                
           </section>
</body>
</html>
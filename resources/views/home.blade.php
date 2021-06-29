<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- THIS CODE WILL ADD COMPONENTS TO WEB PAGES SEE VIEW HEADER.BLADE.PHP***COMPONENT*** -->

<!-- <x-header/>   -->

    

    <!-- Adding Inner-View (A View Within A View)-->
    

    @include('InnerView');






<!-- THIS CODE WILL PASS INFORMATION FROM COMPONENT INTO PAGE. Getting the  current page info displaying -->
<!-- <x-header1 data="home header"/>  -->





    <!-- This code will pass the name of the page within your webpage *SEE WEB.PHP* --> 
  



    <!--Hyper Link To Another Page -->
    <!-- <a href='/about'>about</a>

    <a href='/contact'>contact</a>

    <a href='/Users'>users</a> -->
    
    <!-- AND TO LINK IT TO ANOTHER PAGE -->

 <h1>Welcome To Amber Coding Academy </h1>

 
 
<br><br>
 <x-header1 data="Header Page"/> 


 <x-play/>  <br>










</body>
</html>
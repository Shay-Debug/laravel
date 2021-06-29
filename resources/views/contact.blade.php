
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
<x-header/> 



<!-- THIS CODE WILL PASS INFORMATION FROM COMPONENT INTO PAGE -->
<!-- <x-header1 data="Contact header"/> -->

     <h1>Contact Us</h1> 
     <h1>@ {{$number}}</h1>

     
     <br><br>
<x-header1 data="Contact Page"/> 
<br>


    <a href='/home'>Back</a>
 
    

    
    
    </body>
</html>

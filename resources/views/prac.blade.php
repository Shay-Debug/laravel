<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header>

  
    <h1> {{$name[0]}}page</h1>


    </header>

<!-- Testing blade against php expression --> 
    {{pi()}}<br>
    {{10+10}}<br>
    {{'blade'}}<br>
    
<!-- if else statement refer to prarametr controller -->
    
    <br><br>

    ***if statement****<br>
     @if($name[0] >=1 && $name[0] <=10){{"success"}}
    @elseif($name[0]>10){{$name[0]."failed"}}
    @else {{$name[0]."else nothing"}}
    @endif 

    <br><br>






<!-- FOR LOOP -->
***for loop***<br>
    @for($i=1;$i<=10;$i++)
    {{$i}}<br>
    @endfor



    <br>
<!-- FOREACH LOOP REFER TO PRAMETER CONTROLLER -->

  ***FOR EACH*** <br>
    @foreach($name as $numbers)
    {{ $numbers}}
    @endforeach 
    

    <br><br>

    @foreach($name as $number)
    @if($number=='5'){{$number." is index 0"}}<br>
    @elseif($number=='1'){{$number." is index 1"}}<br>
    @else{{$number." is index 3"}}
    @endif
    @endforeach



    <br><br>


***Switch Statement***<br>
<?php $name="Charlie"; ?>
@switch($name)
    @case("Charlie")

        <span> `Username` Access Granted! <accepted>

        @break

    @case("Orlando")

        <span>`User` Denied! </span>

        @break

    @default

        <span>Something went wrong, please try again </span>

@endswitch







</body>
</html>

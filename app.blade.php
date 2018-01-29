<!DOCTYPE html>
<html>
    <head>
        <title>{{config("app.name", "Doro")}} </title>

        
    <!--לשלהם" "-->
       <link rel ="stylesheet" type="text/css"
          href="{{asset ("css/app.css")}}">
    
     
    <!--לשלי"    
    <link rel ="stylesheet" type="text/css"
          href="{{asset ("sass/app.scss")}}">
    "-->
    </head>
    <body>

    @include ("inc.navbar")
    
		<div class="container">
        @yield("content")
    </div>



	 
    </body>
</html>

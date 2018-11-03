<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avicola App - @yield('title')</title>
    
    @include('partialsTemplate.head')
        
  </head>
  <body data-sidebar-color="sidebar-light" class="sidebar-light header-yellow">
    <!-- Header start-->
    <header>
        @include('partialsTemplate.header')
    </header>
    <!-- Header end-->
    <div class="main-container">
        <!-- Main navbar start-->
        @include('partialsTemplate.navbar')
        <!-- Main navbar end-->
      
        <!-- Right Sidebar start-->
        <div class="page-container">
            @yield('content')
            <!-- Right Sidebar end-->
        </div>  
    </div>
        <!-- jQuery-->
    @include('partialsTemplate.script')
  </body>
</html>
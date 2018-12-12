<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Official Website for 2ndComingBookshop">
        <meta name="keywords" content="PreSchool Textbooks, Primary School Books, JHS Textbooks, SHS Textbooks, Tertiary Textbooks, Story Books, Dictionary">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>2ndComing Bookshop @yield('title')</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/banner.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/et-line@1.0.1/style.min.css">
       
    </head>
    <body class="bg-white">
   
     

       

  

         <main>
            @yield('content')
        </main>
  

  @include('partials.footer')


          <script src="js/app.js"></script>

          <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c10ee2982491369ba9dc60d/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>

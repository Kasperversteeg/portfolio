<!DOCTYPE html>
<html>
<head>
	{{-- fonts --}}
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
	{{-- custom files --}}
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
   <link rel="stylesheet" href="css/app.css"  />
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
	
	<title>Kasper Versteeg - @yield('title')</title>
</head>
<body>
   <div id="app" class="font-display min-h-screen h-full flex flex-col">
      {{-- navigation --}}
      <nav class="border-b">
         <div class="container grid mx-auto grid-cols-1 md:grid-cols-2">
            <div class="flex flex-row p-1">
               <a class="w-50" href="/">
                  <img class="w-full" src="img/kv-logo-full.svg" alt="">
               </a>
            </div>
            {{-- menu right --}}
               <ul class="h-full flex flex-row items-center justify-end text-lg font-bold">
                  <li class="px-3"><a href="/">Home</a></li>
                  <li class="px-3"><a href="portfolio">Portfolio</a></li>
                  <li class="px-3"><a href="overmij">Over mij</a></li>
               </ul>
         </div>
      </nav>

      {{-- main container --}}
      <div class="container mx-auto py-3">
         {{-- insert page content --}}
         @yield('content')
      </div>


	{{-- footert --}}
      <footer class="mt-auto">
         <div class="w-full bg-primary text-white pt-3">
            <div class="container mx-auto grid lg:grid-cols-3">
               <div class="">
                  {{-- <a href="/">@svg('img/kv-logo-full-white.svg', 'kv-logo')</a> --}}
                  <p>Kasper Versteeg</p>
                  <p>Webdeveloper</p>
               </div>
               <div class="">
                  <h5>Contact:</h5>		
                  <ul>
                     <li>
                        <a class="flex flex-row items-center" href="tel:+31611119944"><img class="w-10" src="img/pictograms/pict-tel.svg" alt=""><p class="inline-block w-90 px-2">+31 6 11 11 99 44</p></a>
                     </li>
                     <li>
                        <a class="flex flex-row" href="mailto:info@kasperversteeg.com"> <img class="w-10" src="img/pictograms/pict-mail.svg" alt=""> <p class="w-90 px-2">info@kasperversteeg.com</p> </a>
                     </li>
                  </ul>
               </div>
               <div class=""> 
                  <h5>Socials:</h5>
                  <ul class="flex flex-row">
                     <li class="w-16 p-2">
                        <a href="https://www.facebook.com/kasper.versteeg.1"><img src="img/pictograms/pict-fb.svg" alt="Facebook"></a>
                     </li>
                     <li class="w-16 p-2">
                        <a href="https://www.linkedin.com/in/kasper-versteeg"><img src="img/pictograms/pict-li.svg" alt="LinkedIn"></a>
                     </li>
                     <li class="w-16 p-2">
                        <a href="https://github.com/Kasperversteeg"><img src="img/pictograms/pict-gh.svg" alt="Github"></a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="w-full">
               <p>copyright © KasperVersteeg - powered bij <a href="https://laravel.com/">laravel</a></p>
            </div>
         </div>
      </footer>

   </div>



</body>
</html>
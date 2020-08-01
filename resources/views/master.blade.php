<!DOCTYPE html>
<html>
<head>
	{{-- fonts --}}
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	{{-- custom files --}}
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
   <link rel="stylesheet" href="css/app.css"  />
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
	
	<title>Kasper Versteeg - @yield('title')</title>
</head>
<body>
   <div id="app" class="font-display min-h-screen h-full flex flex-col text-base text-text">
      {{-- navigation --}}
      <nav class="border-b">
         <div class="container grid mx-auto grid-cols-1 md:grid-cols-2">
            <div class="flex flex-row p-1">
               <a class="w-50" href="/">
                  <img class="w-full" src="img/kv-logo-full.svg" alt="">
               </a>
            </div>
          <navigation />
         </div>
      </nav>

      {{-- main container --}}
      <div class="container mx-auto py-6">
         {{-- insert page content --}}
         @yield('content')
      </div>

	{{-- footert --}}
      <footer class="mt-auto">
         <div class="w-full bg-primary text-white pt-3">
            <div class="container mx-auto grid lg:grid-cols-3">
               <div class="text-sm">
                  <a href="/"><img class="max-w-1/2" src="img/kv-logo-full-white.svg" alt="Logo"></a>
                  <p class="mt-4">Kasper Versteeg</p>
                  <p>Webdeveloper</p>
               </div>
               <div>
                  <h5>Contact:</h5>		
                  <ul>
                     <li class="hover:underline py-3">
                        <a class="flex flex-row items-center" href="tel:+31611119944"><img class="w-8" src="img/pictograms/pict-tel.svg" alt=""><p class="inline-block w-90 px-2">+31 6 11 11 99 44</p></a>
                     </li>
                     <li class="hover:underline">
                        <a class="flex flex-row items-center" href="mailto:info@kasperversteeg.com"> <img class="w-8" src="img/pictograms/pict-mail.svg" alt=""> <p class="w-90 px-2">info@kasperversteeg.com</p> </a>
                     </li>
                  </ul>
               </div>
               <div> 
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
            <div class="w-full flex pt-4">
               <p class="mx-auto text-xs">copyright © KasperVersteeg - powered bij <a href="https://laravel.com/">laravel</a></p>
            </div>
         </div>
      </footer>
      <modal v-show="isModalShowing"/>

   </div>
</body>
</html>
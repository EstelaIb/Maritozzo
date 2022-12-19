<!-- NAVBAR -->
<div class="navbar bg-primary w-full sticky top-0 z-10">
  <div class="flex-1">
    <!--Logo y slogan-->
    <a href="#" class="flex items-center">
      <img src="{{ asset('storage\cocinero.png')}}" class="w-auto h-6 mr-3 sm:h-9" alt="Logo" />
      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Maritozzo</span>
    </a>
  </div>
  <!--Menu-->
  <div class="flex-none">
      <ul class="menu menu-horizontal lg:menu-vertical px-1">
        <li class="font-bold  italic"><a href ="{{route('welcome')}}" class='hover:bg-accent hover:text-white'>INICIO</a></li>
        <li class="font-bold  italic"><a href ="{{route('about')}}" class='hover:bg-accent hover:text-white'>NOSOTROS</a></li>
        <li class="font-bold  italic"><a href ="{{route('menu')}}" class='hover:bg-accent hover:text-white'>MENU</a></li>
        <li class="font-bold  italic"><a href ="{{route('contact')}}" class='hover:bg-accent hover:text-white'>CONTACTO</a></li>
      </ul>
  </div>
</div>
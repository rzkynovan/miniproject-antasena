<header
id="header"
class="sticky top-0 w-full z-50"
x-data="{ navOpen : false }"
>
<div
  x-show="navOpen"
  x-transition.duration.1000
  class="absolute z-40 w-full h-screen bg-primary-950 text-white flex justify-center items-center"
>
  <ul class="text-white flex flex-col items-center gap-8">
    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
        {{ __('Home') }}
    </x-nav-link>
    <li><a href="">Cars</a></li>
    <li><a href="">Activities</a></li>
    <li><a href="">Partners</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">News</a></li>
    <x-nav-link :href="route('e-learning')" :active="request()->routeIs('e-learning')">
        {{ __('E-learning') }}
    </x-nav-link>
  </ul>
</div>
<nav
  class="bg-primary-950 text-primary-50 h-[80px] flex justify-center px-4 lg:px-20"
>
  <div class="flex justify-between w-full items-center">
    <a href="/">
      <img
        src="{{asset('/images/landing/logo.png')}}"
        alt="logo Antasena"
        width="100"
        height="50"
        class=""
    /></a>

   <ul class="flex gap-10 max-lg:hidden">
    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
        {{ __('Home') }}
    </x-nav-link>
    <li><a href="">Cars</a></li>
    <li><a href="">Activities</a></li>
    <li><a href="">Partners</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">News</a></li>
    <x-nav-link :href="route('e-learning')" :active="request()->routeIs('e-learning')">
        {{ __('E-learning') }}
    </x-nav-link>
   </ul>
    <button
      @click="navOpen = !navOpen"
      class="lg:hidden z-50 flex items-center text-[#002855]"
    >
      <i x-show="!navOpen"  class="ri-menu-2-fill text-white font-bold text-2xl"></i>
      <i x-show="navOpen"  class="ri-close-fill text-white font-bold text-2xl"></i>
    </button>

  </div>
</nav>
</header>

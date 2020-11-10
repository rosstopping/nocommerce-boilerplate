<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
	@bukStyles
	@nocommerceStyles
</head>
<body class="flex flex-col min-h-screen">

	<x-alert type="success" class="bg-green-400 text-green-900 p-3 text-center text-sm" />
	<x-alert type="warning" class="bg-yellow-400 text-yellow-900 p-3 text-center text-sm" />
	<x-alert type="danger" class="bg-red-400 text-red-900 p-3 text-center text-sm" />

	<div class="bg-black text-white relative z-10 px-6">
		<div class="h-20 py-4 container mx-auto flex items-center justify-center">
			<div x-data="{ open: false }" class="z-10 flex-1">
				<div :class="{ 'flex' : open, 'hidden' : open === false }" class="fixed md:relative top-0 left-0 w-full md:w-auto h-screen md:h-auto flex md:flex flex-col md:flex-row items-center justify-center md:justify-start z-40 bg-black md:bg-transparent leading-loose font-sans uppercase text-white text-base md:text-xs tracking-wider gap-8">
					<a href="{{ route('home') }}">Home</a>
					<a href="{{ route('product.index') }}">Products</a>
					<a href="#">About Us</a>
				</div>

				<button x-on:click="open = true" type="button" :class="{ 'hidden' : open, 'block' : !open }" class="block md:hidden text-4xl font-thin">＝</button>
				<button x-on:click="open = false" type="button" :class="{ 'block' : open, 'hidden' : !open }" class="md:hidden absolute top-0 right-0 leading-none p-8 text-xl z-50">╳</button>
			</div>
			<a href="/" class="flex-1 flex items-center justify-center block h-full">
				{{ config('app.name') }}
			</a>
			<div class="flex-1 flex items-center justify-end text-xs uppercase tracking-wider gap-4">
				<a href="{{ route('basket') }}" class="relative">
					<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
					</svg>
					@if (RossTopping\Nocommerce\Models\Basket::count() > 0)
						<span class="absolute top-0 left-0 -ml-3 -mt-2 bg-green-500 text-white w-5 h-5 flex items-center justify-center rounded-full text-xs">{{ RossTopping\Nocommerce\Models\Basket::count() }}</span>
					@endif
				</a>
			</div>
		</div>
	</div>

	<div class="relative z-0 flex-grow">
		@yield('content')
	</div>

	<footer class="bg-black text-white pt-12 pb-8 px-4">
		<div class="mx-auto px-4 container overflow-hidden flex flex-col lg:flex-row justify-between">
			<a href="/" class="block mr-4 w-1/3">
				{{ config('app.name') }}
			</a>
			<div class="w-2/3 block sm:flex justify-between text-sm mt-6 lg:mt-0">
				<ul class="text-gray-100 list-none p-0 font-thin flex flex-col text-left w-full">
					<li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Products</li>
					<li><a href="#" class="inline-block py-2 px-3  hover:text-white no-underline">Browse</a></li>
					<li><a href="#" class="inline-block py-2 px-3  hover:text-white no-underline">FAQ</a></li>
				</ul>
				<ul class="text-gray-100 list-none p-0 font-thin flex flex-col text-left w-full">
					<li class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Company</li>
					<li><a href="#" class="inline-block py-2 px-3  hover:text-white no-underline">About Us</a></li>
					<li><a href="#" class="inline-block py-2 px-3  hover:text-white no-underline">Terms &amp; Conditions</a></li>
				</ul>
				<div class="text-gray-100 flex flex-col w-full">
					<div class="inline-block py-2 px-3 text-white uppercase font-medium tracking-wide">Follow Us</div>
					<div class="flex pl-4 justify-start mt-2">
						<a class="block flex items-center text-gray-300 hover:text-white mr-6 no-underline" href="#">
							<svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" /></svg>
						</a>
						<a class="block flex items-center text-gray-300 hover:text-white mr-6 no-underline" href="#">
							<svg viewBox="0 0 24 24" class="fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" /></svg>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-4 mt-12 pt-6 text-white text-xs opacity-75 border-t border-gray-800 text-center"> &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</div>
	</footer>
	@bukScripts
	@nocommerceScripts
</body>
</html>
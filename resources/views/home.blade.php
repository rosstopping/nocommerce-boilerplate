@extends('layouts.app')

@section('content')

	<div class="absolute top-0 left-0 w-full h-full bg-brand-secondary" style="z-index: -10;">
		<div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-gray-300 to-white"></div>
	</div>

	<div class="bg-black w-full relative py-24 md:py-32 lg:py-56 px-6">
		<img src="https://images.unsplash.com/photo-1449247666642-264389f5f5b1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2698&q=80" class="absolute top-0 left-0 w-full h-full object-cover opacity-50" />

		<div class="container mx-auto relative z-10">
			<div class="max-w-sm">
				<h2 class="mb-4 text-white text-xl md:text-2xl lg:text-5xl uppercase leading-tight tracking-wide font-extrabold">{{ config('app.name') }}</h2>
				<a href="{{ route('product.index') }}" class="mt-6 inline-block uppercase bg-white py-3 px-6 text-xs">Browse Products</a>
			</div>
		</div>
	</div>

	<div class="container mx-auto py-12 md:py-24 px-6">
		<div class="flex items-center mb-12">
			<div class="h-px flex-1 bg-black opacity-50"></div>
			<h3 class="font-display-italic font-extrabold text-2xl md:text-5xl italic leading-none tracking-wide max-w-xl pl-8">Latest Products</h3>
		</div>
		<div class="flex flex-wrap -mx-6">
			@foreach ($products as $product)
				<div class="w-full md:w-1/2 lg:w-1/3 px-6 mb-12">
					<a href="{{ route('product.show', [data_get($product, 'id'), data_get($product, 'slug')]) }}" class="block bg-black">
						<img src="{{ data_get($product, 'featured_image') }}" class="w-full h-64 object-cover mb-6 hover:opacity-50">
					</a>
					<h3 class="text-xl md:text-2xl uppercase font-display font-extrabold tracking-widest mb-4">
						{{ data_get($product, 'name') }}
					</h3>
					<p class="max-w-sm text-xs text-gray-600 mb-6">{{ data_get($product, 'excerpt') }}</p>
					<a href="{{ route('product.show', [data_get($product, 'id'), data_get($product, 'slug')]) }}" class="inline-block border-2 border-black py-3 px-8 uppercase font-display font-thin tracking-wider text-xs hover:bg-black hover:text-white">View Product</a>
				</div>
			@endforeach
		</div>

	</div>


	<div class="bg-black text-white">
		<div class="max-w-5xl mx-auto p-8 py-12 md:py-24 flex flex-wrap justify-start items-center">
			<div class="flex-1">
				<h2 class="font-display-italic font-extrabold text-4xl md:text-6xl italic leading-none mb-12">Who are we...</h2>
			</div>
			<div class="w-full lg:w-72">
				<p class="leading-loose max-w-xl text-sm md:text-base mb-6">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris.
				</p>
				
			</div>
		</div>
	</div>


	@if ($categories->count() > 0)

		<div class="container mx-auto py-12 md:py-24 px-6 pb-6">
			<div class="flex items-center mb-12">
				<div class="h-px flex-1 bg-black opacity-50"></div>
				<h3 class="font-display-italic font-extrabold text-2xl md:text-5xl italic leading-none tracking-wide max-w-xl pl-8">Browse Categories</h3>
			</div>
			<div class="flex flex-wrap -mx-2">

				@foreach ($categories as $category)

					<a href="{{ route('product.index', ['category' => $category]) }}" class="w-1/2 md:flex-1 px-2 flex group mb-6">
						<div class="w-48 flex-1 h-48 md:h-64 py-24 md:py-64 relative bg-black">
							<img src="{{ data_get($category, 'image_url') }}" class="absolute top-0 left-0 h-full w-full object-cover opacity-75 hover:opacity-50" />
						</div>
						<div class="w-10 group-hover:w-12 relative flex flex-col justify-end items-start">
							<div class="whitespace-no-wrap transform -rotate-90 origin-bottom-left ml-8 uppercase text-gray-900 font-thin opacity-75 tracking-widest">
								{{ data_get($category, 'name') }}
							</div>
						</div>
					</a>

				@endforeach

			</div>
		
		</div>

	@endif

@endsection
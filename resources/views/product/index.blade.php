@extends('layouts.app')

@section('content')
	
    <div class="absolute top-0 left-0 w-full h-full bg-brand-secondary" style="z-index: -10;">
		<div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-gray-300 to-white"></div>
	</div>
	
	<div class="container mx-auto py-12 md:py-24 px-6">
		<div class="flex items-center mb-12">
			<div class="h-px flex-1 bg-black opacity-50"></div>
			<h3 class="font-display-italic font-extrabold text-2xl md:text-5xl italic leading-none tracking-wide max-w-xl pl-8">Browse Products</h3>
		</div>
		@if ($category)
			<div class="text-xs md:text-sm text-right uppercase font-thin -mt-6 mb-6">
				Category: {{ data_get($category, 'name') }}
			</div>
		@endif
		<div class="flex flex-wrap -mx-6">
			@foreach ($products as $product)
				<div class="w-full md:w-1/2 lg:w-1/3 px-6 mb-12">
					<a href="{{ route('product.show', [data_get($product, 'id'), data_get($product, 'slug')]) }}" class="block bg-black">
						<img src="{{ data_get($product, 'featured_image') }}" class="w-full h-64 object-cover mb-6 hover:opacity-50">
					</a>
					<h3 class="text-xl md:text-2xl uppercase font-display font-extrabold tracking-widest mb-2">
						{{ data_get($product, 'name') }}
					</h3>
					<p class="py-2 text-gray-900 italic text-sm opacity-75">From &pound;{{ data_get($product, 'price') }}</p>
					<p class="max-w-sm text-xs text-gray-600 mb-6">{{ data_get($product, 'excerpt') }}</p>
					<a href="{{ route('product.show', [data_get($product, 'id'), data_get($product, 'slug')]) }}" class="inline-block border-2 border-black py-3 px-8 uppercase font-display font-thin tracking-wider text-xs hover:bg-black hover:text-white">View Product</a>
				</div>
			@endforeach
		</div>
	
	</div>

@endsection
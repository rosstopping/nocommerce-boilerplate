@extends('layouts.app')

@section('content')
	
	<div class="absolute top-0 left-0 w-full h-full bg-brand-secondary" style="z-index: -10;">
		<div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-gray-300 to-white"></div>
	</div>

	<div class="container mx-auto py-12 md:py-24 px-6">
		<div class="flex items-center mb-12">
			<div class="h-px flex-1 bg-black opacity-50"></div>
			<h3 class="font-display-italic font-extrabold text-2xl md:text-5xl italic leading-none tracking-wide max-w-xl pl-8">
				{{ data_get($product, 'name') }}
			</h3>
		</div>

		<div class="text-xs md:text-sm text-right uppercase font-thin -mt-6 mb-6">
			Price from <span class="font-semibold">&pound;{{ data_get($product, 'price') }}</span>
		</div>
		<div class="flex flex-wrap">
			<div class="w-full lg:w-7/12 relative mb-8 lg:mb-0">
				<x-nocommerce-product-gallery :product="$product"></x-nocommerce-product-gallery>
			</div>
			<div class="w-full lg:flex-1 lg:pl-10 flex flex-col justify-center">
				<p class="opacity-75 leading-relaxed mb-8 text-sm max-w-sm">
					{{ data_get($product, 'excerpt') }}
				</p>

				<x-nocommerce-product :product="$product"></x-nocommerce-product>
			</div>
		</div>

	</div>

	@if (data_get($product, 'description'))

		<div class="container mx-auto px-6">
			<div class="flex items-center mb-12">
				<div class="h-px flex-1 bg-black opacity-50"></div>
				<h3 class="font-display-italic font-extrabold text-2xl md:text-5xl italic leading-none tracking-wide max-w-xl pl-8">
					Product information
				</h3>
			</div>
		</div>

		<div class="container mx-auto mb-24 px-6">
			<div class="prose max-w-none">
				{!! data_get($product, 'description') !!}
			</div>
		</div>

	@endif

@endsection
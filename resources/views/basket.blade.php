@extends('layouts.app')

@section('content')
    <div class="absolute top-0 left-0 w-full h-full bg-brand-secondary" style="z-index: -10;">
		<div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-gray-300 to-white"></div>
	</div>

	<div class="container mx-auto py-12 md:py-24 px-6">
		<div class="flex items-center">
			<div class="h-px flex-1 bg-black opacity-50"></div>
			<h3 class="font-display-italic font-extrabold text-2xl md:text-5xl italic leading-none tracking-wide max-w-xl pl-8">
				Your Basket
			</h3>
		</div>
	</div>

	<x-nocommerce-basket :basket="$basket"></x-nocommerce-basket>
@endsection
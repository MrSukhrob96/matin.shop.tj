@extends('_layouts.front.app')

@section('content')
@include("_components.sliders.main_intro_slider")

{{--@include("_components.category.best__categories")--}}

@include("_components.sliders.testimorials", ["title" => "Маҳсулотҳои беҳтарин", "products" => $best_products])

<div class="container">
    <hr class="">
</div>

@include("_components.sliders.testimorials", ["title" => "Маҳсулотҳои нав", "products" => $new_products])


@include("_components.sliders.clients")

@if(session()->get("region"))
	@include("_components.modals.choose__region")
@endif

@endsection
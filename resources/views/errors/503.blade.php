@extends('errors::illustrated-layout')

@section('code', '503')
@section('title', __('Mantenimiento'))

@section('image')
<div style="background-image: url('https://image.flaticon.com/icons/svg/391/391086.svg');" class="absolute w-75 pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __('Lo sentimos!, Estimado docente en estos momentos estamos haciendo labores de mantenimiento en la base de datos por favor intenta más tarde.'))

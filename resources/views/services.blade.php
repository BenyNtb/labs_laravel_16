@extends('layouts.index')

@section('content')
    @include('partials.services.page')
    @include('partials.services.service')
    @include('partials.services.features')
    @include('partials.services.services-card')
    @include('partials.services.newsletter')
    @include('partials.services.contact')
    @include('partials.footer')
@endsection
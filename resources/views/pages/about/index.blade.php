@extends('layouts/app', ['title' => 'About Us'])  
  
@section('content') 
    <img src="{{ asset('styles/images/logo.jpg') }}" class="my-12 rounded-full shadow-md" alt="logo">
    
    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.
    </h2>

    <p>
        <a href="{{ route('home') }} " class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'acceuil </a>
    </p>
@endsection

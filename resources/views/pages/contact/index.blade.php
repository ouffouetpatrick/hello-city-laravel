@extends('layouts/main', ['title' => 'About Us'])  
  
@section('content')

@section('css')
    <style>
        .d-grid {
            background-color: #0d6efd;
        }
    </style>
@endsection

    <img src="{{ asset('styles/images/logo.jpg') }}" class="my-12 rounded-full shadow-md" alt="logo">
    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts;</span> by LES TEACHERS DU NET.   
    </h2>
    
        <div class="container py-4">
            <form action="{{ route('contact.store') }}" id="contactForm" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" name="nom" id="name" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="emailAddress">Email Address</label>
                    <input class="form-control" name="email" id="emailAddress" type="email" placeholder="Email Address" />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                </div>
            </form>
        </div>
    
    <p class="return_home" style="margin-top: 1rem">
        <a href="{{ route('home') }} " class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'acceuil </a>
    </p>

@endsection

@extends('layouts.app')

@section('content')
	<h1>Home</h1>
	<p class="text-justify">Welcome to this website. This is my first Laravel website. Hope you enjoy. Learning laravel was a great experience. I am a Software Engineering student and a coding enthusiast. This project helped me learn all the important functionalities in laravel. This is a contact form with 3 tabs : Home, About and Contcat. The contact page allows users to send a message through the website. The message is stored in a database. </p> 
@endsection

@section('sidebar')
	@parent
	<p>Your design, my code!</p>
@endsection
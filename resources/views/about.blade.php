@extends('layouts.app')

@section ('title','Nosotros')
    
@section('meta-description', 'Home meta description')

@section('content')
    <!--Main image-->
    <div class="h-1/2 lg:h-auto px-8 flex flex-col items-center justify-center">
        <img src="{{ asset('storage\Group.svg')}}" />
    </div>
    <!-- Decoration -->
    <div class="flow-root">  
        <img src="{{ asset('storage\adorno.png')}}" class="w-60 h-48 float-right lg:mr-52 md:mr-52 mr-16 px-4"/>
    </div>
        <!-- RESTAURANT PRESENTATION -->
    <div class="hero px-16 md:px-8 lg:px-8">
        <div class="hero-content text-center bg-orange-100 rounded-xl  origin-top-left ">
            <div class="max-w-md min-h-auto" >
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold py-2 italic  font-['Open_Sans']">Un restaurante entre cielo y tierra</h1>
                <p class="pt-6 italic  font-['Open_Sans']">
                Todo el sabor italiano venido del Mediterráneo hasta el otro lado del muno. Ubicados en el majestuoso
                edificio años 30 Maritozzo, ofrece un decorado idílico. Sumergido en una vegetación lujuriosa en la ladera de la montaña y
                construido en tres niveles, la sala del restaurant, espaciosa, elegante y luminosa, goza de una vista mágica del cielo y del
                centro de la ciudad, sobre la bahía del pueblo de Mentón. En el piso inferior, el bar, tiene una cocina vidriada donde 
                se aprecia la actividad de la brigada. Algunos escalones mediante, en la prolongación de la terraza, nos encontramos 
                en el jardín, rebosante de hierbas aromáticas y de perfumados cítricos que, con el conjunto de sus jardines, 
                es fuente de inspiración constante para la creación de sus platos.
                </p>
            </div>
        </div>     
    </div>  
    <!-- Decoration -->
    <div class="flow-root">  
        <img src="{{ asset('storage\adorno.png')}}" class="w-60 h-48 float-left lg:ml-52 md:ml-52 ml-16 px-4 my-2 md:my-8"/>
    </div>
    
    <!-- Card for booking -->
    <div class="grid justify-items-center py-4">
        <div class="card lg:card-side bg-base-100 w-1/2 items-center">
            <figure><img src="{{asset('storage/chef.png')}}" alt="chef" class="h-80 rounded-xl"/></figure>
            <div class="card-body justify-center font-['Open_Sans'] bg-amber-100 h-96 rounded-xl px-6">
                <h2 class="card-title text-4xl text-center font-extrabold mx-16">Restaurante Maritozzo</h2>
                <h3 class="font-semibold text-center"> Cocina italiana </h3>
                <span class="text-center">1 estrella Michelin Guide</span>
                <p class="text-center">Nos satisface prepararte los mejores platillos italianos</p>
                <span class="text-center">Número para reservaciones</span>
                <div class="card-actions justify-center">
                <a href="https://walink.co/77719d" class="underline">+593 98 968 8541</a></button>
            </div>
        </div>
    </div>

    <!-- Ingredients description -->
    <div class="grid md:grid-cols-3 gap-4 px-28 items-center py-6">
        <div class="grid h-auto flex-grow card  rounded-box place-items-center p-2">
            <h4 class="py-4 font-extrabold italic">Mar</h4>
            <p class="font-semiblod lg:px-4 text-center mb-6  font-['Open_Sans']">Pescados y mariscos frescos de nuestros pescadores del Esmeraldas</p>
            <img src="{{asset('storage\ingredientes.jpg')}}">
        </div>
    
        <div class="grid h-auto flex-grow card  rounded-box place-items-center p-2">
            <h4 class="py-4 font-extrabold italic">Jardín</h4>
            <p class="font-semiblod lg:px-4 text-center mb-6  font-['Open_Sans']">Las verduras de nuestra huerta y del mercado siendo las más frescas.</p>  
            <img src="{{asset('storage\ingredientes2.jpg')}}">
        </div>
    
        <div class="grid h-auto flex-grow card  rounded-box place-items-center p-2">
            <h4 class="py-4 font-extrabold italic">Montaña</h4>
            <p class="font-semiblod lg:px-4 text-center mb-6  font-['Open_Sans']">Carne, aves, setas y productos lácteos de criadores de la zona de influencia. </p>           
            <img src="{{asset('storage\ingredientes3.jpg')}}">
        </div>
    </div>
    
@endsection
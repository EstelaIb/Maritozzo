@extends('layouts.app')

@section ('title','Home')
    
@section('meta-description', 'Home meta description')

@section('content')
    <!-- CAROUSEL -->
    <div class="carousel w-auto m-3 rounded-md py-4 mb-8">
        <div id="slide1" class="carousel-item relative w-full">
            <img src="{{ asset('storage\imagen1.jpg')}}" class="w-full h-80 lg:h-96" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide4" class="btn btn-circle">❮</a> 
            <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
        </div> 
        <div id="slide2" class="carousel-item relative w-full">
            <img src="{{ asset('storage\imagen2.jpg')}}" class="w-full h-80 lg:h-96" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a> 
            <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div> 
        <div id="slide3" class="carousel-item relative w-full">
            <img src="{{ asset('storage\imagen3.jpg')}}" class="w-full h-80 lg:h-96" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a> 
            <a href="#slide4" class="btn btn-circle">❯</a>
            </div>
        </div> 
        <div id="slide4" class="carousel-item relative w-full">
            <img src="{{ asset('storage\comida.jpg')}}" class="w-full h-80 lg:h-96" />
            <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide3" class="btn btn-circle">❮</a> 
            <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>

    <!-- TITLE -->
    <h1 class="text-4xl text-center mt-5 font-semibold text-orange-600 fixed-1 py-2 font-['Open_Sans']">RESEÑAS</h1>
    
    <!-- COMMENTS -->
    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-2 gap-4 py-4 justify-items-center px-4">
        <div class="card xl:w-80 lg:w-60 md:w-80 sm:w-52 w-40 bg-base-100 shadow-xl mx-2">
            <div class="card-body px-4">
                <h2 class="card-title">Karla Cevallos</h2>
                <p>Excelente atrención y hermosa vista.</p>
                <div class="card-actions justify-end">
                <!-- RATING -->
                <div class="rating">
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled />
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checkeddisabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                    </div>
                </div>
            </div>
        </div>

        <div class="card xl:w-80 lg:w-60 md:w-80 sm:w-52 w-40 bg-base-100 shadow-xl mx-2">
            <div class="card-body px-4">
                <h2 class="card-title">Steven Romero</h2>
                <p>Muy buena comida y a buenos precios 😋.</p>
                <div class="card-actions justify-end">
                <!-- RATING -->
                <div class="rating">
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled />
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked disabled/>
                    </div>
                </div>
            </div>
        </div>

        <div class="card xl:w-80 lg:w-60 md:w-80 sm:w-52 w-40 bg-base-100 shadow-xl mx-2">
            <div class="card-body px-4">
                <h2 class="card-title">Olga Ibañez</h2>
                <p>Cuenta con empleados grandiosos y un excelente chef 😁.
                    Se volvió mi restaurante favorito.
                </p>
                <div class="card-actions justify-end">
                    <!-- RATING -->
                    <div class="rating">
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled />
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked disabled/>
                    </div>
                </div>
            </div>
        </div>

        <div class="card xl:w-80 lg:w-60 md:w-80 sm:w-52 w-40 bg-base-100 shadow-xl mx-2 ">
            <div class="card-body px-4">
                <h2 class="card-title">Daphne Cruger</h2>
                <p>Es un buen restaurante pero necesita más espacio para las mesas en especial
                    los días de feriado. 
                </p>
                <div class="card-actions justify-end">
                <!-- RATING -->
                <div class="rating">
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled />
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked disabled/>
                        <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" disabled/>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
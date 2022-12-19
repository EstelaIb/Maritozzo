@extends('layouts.app')

@section ('title','Menu')
    
@section('meta-description', 'Home meta description')

@section('content')
    <!--Title-->
    <h1 class="text-center text-5xl py-8 font-extrabold font-['Open_Sans']">MENU</h1>
    <!--Food-->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 sm:grid-cols-2 justify-items-center gap-5 px-4">
        <div class="card lg:w-auto md:w-auto sm:w-auto glass">
        <figure class="p-4"><img src="{{ asset('storage\lasaña.jpg')}}" alt="car!" class="rounded-xl"/></figure>
            <div class="card-body">
                <!--Name-->
                <h2 class="card-title">Lassaña</h2>
                <!--Description-->
                <p>Rellena de bechamel y carne, pescado o verdura con una 
                    cobertura de queso crema
                </p>
                <!--Price-->
                <span class="font-extrabold">$3.50</span>
                <!--Button add-->
                <div class="card-actions justify-end">
                <button class="btn btn-primary transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"><img src="{{ asset('storage\buy.png')}}"/>Añadir</button>
                </div>
            </div>
        </div>
        <div class="card lg:w-auto md:w-auto sm:w-auto glass">
        <figure class="p-4"><img src="{{ asset('storage\risotto.jpg')}}" alt="car!" class="rounded-xl"/></figure>
            <div class="card-body">
                <!--Name-->
                <h2 class="card-title">Risotto</h2>
                <!--Description-->
                <p>Hecho de arroz y queso parmesano. Acompañamiento de espinacas,
                    calabacin y mariscos.
                </p>
                <!--Price-->
                <span class="font-extrabold">$5.80</span>
                <!--Button add-->
                <div class="card-actions justify-end">
                <button class="btn btn-primary transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"><img src="{{ asset('storage\buy.png')}}"/>Añadir</button>
                </div>
            </div>
        </div>
        <div class="card lg:w-auto md:w-auto sm:w-auto glass">
        <figure class="p-4"><img src="{{ asset('storage\carbonara.jpg')}}" alt="car!" class="rounded-xl"/></figure>
            <div class="card-body">
                <!--Name-->
                <h2 class="card-title">Carbonara</h2>
                <!--Description-->
                <p>Deliciosa pasta elaborada con huevo, bacon o guancile, queso y
                    pimienta negra.
                </p>
                <!--Price-->
                <span class="font-extrabold">$6.50</span>
                <!--Button add-->
                <div class="card-actions justify-end">
                <button class="btn btn-primary transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"><img src="{{ asset('storage\buy.png')}}"/>Añadir</button>
                </div>
            </div>
        </div>
        <div class="card lg:w-auto md:w-auto sm:w-auto glass">
        <figure class="p-4"><img src="{{ asset('storage\carpacio.jpg')}}" alt="car!" class="rounded-xl"/></figure>
            <div class="card-body">
                <!--Name-->
                <h2 class="card-title">Carpaccio</h2>
                <!--Description-->
                <p>Hecho de finas laminas de carne o pescado crudo (ternera, salmón o bacalao), 
                    maceradas con zumo de limón y aceite de oliva
                </p>
                <!--Price-->
                <span class="font-extrabold">$7.50</span>
                <!--Button add-->
                <div class="card-actions justify-end">
                <button class="btn btn-primary transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"><img src="{{ asset('storage\buy.png')}}"/>Añadir</button>
                </div>
            </div>
        </div>
        <div class="card lg:w-auto md:w-auto sm:w-auto glass">
        <figure class="p-4"><img src="{{ asset('storage\Caprese.jpg')}}" alt="car!" class="rounded-xl"/></figure>
            <div class="card-body">
                <!--Name-->
                <h2 class="card-title">Ensalada Capresse</h2>
                <!--Description-->
                <p>Ensalada hecha con ingredientes básicos: tomate, mozarrella fresca, hojas de 
                    albahaca y aceite de oliva.
                </p>
                <!--Price-->
                <span class="font-extrabold">$2.90</span>
                <!--Button add-->
                <div class="card-actions justify-end">
                <button class="btn btn-primary transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"><img src="{{ asset('storage\buy.png')}}"/>Añadir</button>
                </div>
            </div>
        </div>
        <div class="card lg:w-auto md:w-auto sm:w-auto glass">
        <figure class="p-4"><img src="{{ asset('storage\vitello.jpg')}}" alt="car!" class="rounded-xl"/></figure>
            <div class="card-body">
                <!--Name-->
                <h2 class="card-title">Vitello tonnato</h2>
                <!--Description-->
                <p>Consiste en una carne de ternera cortada en lonchas muy finas y acompañada
                    por una salsa hecha con huevo batido, atún y crema de leche.
                </p>
                <!--Price-->
                <span class="font-extrabold">$6.98</span>
                <!--Button add-->
                <div class="card-actions justify-end">
                <button class="btn btn-primary transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300"><img src="{{ asset('storage\buy.png')}}"/>Añadir</button>
                </div>
            </div>
        </div>
    </div>
@endsection
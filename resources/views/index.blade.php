@extends('layouts.app')

@section('spanish')
    @extends('layouts.navbar')
    <div class="container">
        <div class="row pt-5">
            <div class="col-6 position-relative">
                <img src="{{ asset('img/monitor.png') }}" class="laptop-img" alt="">
                <div class="screen-pc d-flex">
                    <span class="text-center mx-auto my-auto">Bienvenido :)</span>
                </div>
            </div>
            <div class="col-6 ps-3 align-content-center text-center">
                <h1>Hola! Mi nombre es Evelyn 🐣</h1>
                <h3 class="mt-4">Soy Ingeniera en Desarrollo de Software, con experiencia en <em>UX/UI</em> y Diseño Web.</h3>
            </div>
        </div>
    </div>
    <img src="{{ asset('img/base.png') }}" alt="">
    <div class="col-7 mx-auto mt-5 pt-5">
        <h2><em>KNA WORLD</em> | Rediseñando un E-Commerce</h2>
        <p class="mt-4">KNA WORLD es un sitio web dedicado a la venta y distribuición de CBD.<br>
        <br>Durante este proyecto propuse un rediseño de las interfaces que se alineara con la visión y objetivos de la empresa. Simultáneamente considerando las necesidades del usuario para lograr una experiencia de compra más amena e intuitiva.</p>
        <div class="d-flex gap-2">
            <p class="tag" type="">Product Designer</p>
            <p class="tag" type="">Front-end</p>
            <a href="/kna-world" class="tag more ms-auto">Ver más <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <img class="mt-4" src="{{ asset('img/KNA.png') }}" alt="">
    </div>
    <div class="col-7 mx-auto my-5 pt-5">
        <h2><em>Ventanilla Fácil</em> | Una experiencia web renovada</h2>
        <p class="mt-4">Ventanilla Fácil es una red de corresponsales financieros, subsidiaria de la sofipo ASP Integra.<br>
        <br>Me encargué de replantear el aspecto del sitio web de la empresa con el fin de mejorar la experiencia de usuario y modernizar las interfaces, con base en las tendencias actuales y adaptándolas según el manual de identidad corporativa.</p>
        <div class="d-flex gap-2">
            <p class="tag" type="">UX/UI Designer</p>
            <p class="tag" type="">Front-end</p>
            <a href="/ventanilla-facil" class="tag more ms-auto">Ver más <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <img class="mt-4" src="{{ asset('img/ventanilla.png') }}" alt="">
    </div>
@endsection

@section('english')
    <div class="container">
        <div class="row pt-5">
            <div class="col-6 position-relative">
                <img src="{{ asset('img/monitor.png') }}" id="pc" alt="">
                <div class="screen-pc d-flex">
                    <span class="text-center mx-auto my-auto">Welcome :)</span>
                </div>
            </div>
            <div class="col-6 ps-3 align-content-center text-center">
                <h1>Hi! I'm Evelyn 🐣</h1>
                <h3 class="mt-4">A software engineer, with <em>UX/UI</em> y Web Design experience.</h3>
            </div>
        </div>
    </div>
    <img src="{{ asset('img/base.png') }}" alt="">
    <div class="col-7 mx-auto mt-5 pt-5">
        <h2><em>KNA WORLD</em> | Redesigning an E-Commerce</h2>
        <p class="mt-4">KNA WORLD is a website focused on selling and distributing CBD.<br>
        <br>For this project, I proposed a redesign that aligns with the company's vision and goals, while also improving the user experience to make shopping more intuitive and enjoyable.</p>
        <div class="d-flex gap-2">
            <p class="tag" type="">Product Designer</p>
            <p class="tag" type="">Front-end</p>
            <a href="/kna-world" class="tag more ms-auto">See more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <img class="mt-4" src="{{ asset('img/KNA.png') }}" alt="">
    </div>
    <div class="col-7 mx-auto my-5 pt-5">
        <h2><em>Ventanilla Fácil</em> | A renewed web experience</h2>
        <p class="mt-4">Ventanilla Fácil is a network of financial agents, part of the ASP Integra Opciones financial group.<br>
        <br>I was responsible for redesigning the company's website to enhance the user experience and modernize the interfaces, aligning them with current design trends and the brand's identity guidelines.</p>
        <div class="d-flex gap-2">
            <p class="tag" type="">UX/UI Designer</p>
            <p class="tag" type="">Front-end</p>
            <a href="/ventanilla-facil" class="tag more ms-auto">See more <i class="fa-solid fa-arrow-right"></i></a>
        </div>
        <img class="mt-4" src="{{ asset('img/ventanilla.png') }}" alt="">
    </div>
@endsection
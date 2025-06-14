@extends('layouts.app')

@section('spanish')
@extends('layouts.navbar')
    <div class="container col-lg-8">
        <div class="pt-5 row">
            <div class="pt-5 col-8">
                <h1 class="title evelyn">Acerca de mí</h1>
                <p>
                    <br>Soy Evelyn, mi especialidad es mejorar el aspecto visual de los productos digitales.<br>
                    <br>Me considero una persona pragmática, con aptitud en el pensamiento lógico-matemático y afición por las artes.<br>
                    <br>Estudié Ingeniería en Desarrollo de Software, donde descubrí el diseño UX/UI; el punto intermedio donde la lógica y la creatividad van de la mano.
                </p>
            </div>
            <div class="pt-5 my-auto col-3 ms-auto">
                <img src="{{ asset('img/yo.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mt-5">
                <h3>🧠 Habilidades Duras</h3>
                <p>
                    Figma, Wireframes y Prototipado
                    <br>Adobe XD y Photoshop
                    <br>HTML, CSS, Bootstrap, JS, PHP, Laravel, SQL
                    <br>Inglés avanzado, Japonés conversacional
                    <br>Microsoft Office
                </p>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <h3>🧩 Habilidades Blandas</h3>
                <p>
                    Creatividad
                    <br>Disciplina
                    <br>Paciencia
                    <br>Escucha Activa
                    <br>Atención al detalle
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 mt-5">
                <h3>📚 Sigo Aprendiendo</h3>
                <p>
                    Design Thinking
                    <br>User Research
                    <br>Metodologías Agiles
                    <br>Pruebas de Usabilidad
                    <br>Diseño de Interacción
                </p>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <h3>💟 Intereses Personales</h3>
                <p>
                    Tocar el piano
                    <br>Ir al gimnasio
                    <br>Café con pan
                </p>
            </div>
        </div>
    </div>    
@endsection

@section('english')
    <div class="container col-lg-8">
        <div class="pt-5 row">
            <div class="pt-5 col-8">
                <h1 class="title evelyn">About me</h1>
                <p>
                    <br>I’m Evelyn, a designer focused on creating visually engaging digital products.<br>
                    <br>I consider myself a pragmatic thinker, with a knack for logic and math, and a deep appreciation for the arts.<br>
                    <br>I studied Software Development Engineering, where I discovered UX/UI design – the perfect blend of logic and creativity.
                </p>
            </div>
            <div class="pt-5 my-auto col-3 ms-auto">
                <img src="{{ asset('img/yo.png') }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 mt-5">
                <h3>🧠 Hard Skills</h3>
                <p>
                    Figma, Wireframes and Prototyping
                    <br>Adobe XD and Photoshop
                    <br>HTML, CSS, Bootstrap, JS, PHP, Laravel, SQL
                    <br>Advanced english, conversational japanese
                    <br>Microsoft Office
                </p>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <h3>🧩 Soft Skills</h3>
                <p>
                    Creativity
                    <br>Discipline
                    <br>Patience
                    <br>Active listening
                    <br>Attention to detail
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 mt-5">
                <h3>📚 Still Learning</h3>
                <p>
                    Design Thinking
                    <br>User Research
                    <br>Agile methodologies
                    <br>Usability testing
                    <br>Interaction design
                </p>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <h3>💟 Personal Interests</h3>
                <p>
                    Playing the piano
                    <br>Going to the gym
                    <br>Coffee & pastries
                </p>
            </div>
        </div>
    </div>    
@endsection
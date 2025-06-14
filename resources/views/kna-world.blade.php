@extends('layouts.app')

@section('spanish')
@extends('layouts.navbar')
    <div class="col-7 mx-auto">
        <img class="mt-5 hero" src="{{ asset('img/herok.png') }}" alt="">
    </div>
    <div class="col-lg-9 mx-auto position-relative" style="background-color: #F8F8F8">
        <h1 class="pt-5 col-9 mx-auto title">Una forma de hacer que las compras en línea sean más fáciles y atractivas</h1>
        <p class="col-9 mx-auto mt-4">
            KNA WORLD es una página web dedicada a la venta y distribución de CBD. El proyecto consistió en el rediseño de la plataforma con el objetivo de mejorar la experiencia de compra, haciendo que el proceso fuera más intuitivo y eficiente para los usuarios.<br>
            <br>El enfoque principal fue optimizar la navegación, mejorar la presentación de los productos y reducir fricciones en el checkout. Se implementaron principios de UX/UI para crear una interfaz atractiva y fácil de usar, asegurando que los clientes pudieran encontrar y comprar lo que buscaban con facilidad.
        </p>

        <h1 class="pt-5 col-9 mx-auto">El problema</h1>
        <p class="col-9 mx-auto mt-4">
            Aunque la versión anterior del sitio de KNA WORLD ofrecía una interfaz visualmente atractiva, no cumplía con los objetivos principales de un e-commerce. El diseño estaba centrado en brindar información sobre el CBD, lo cual desviaba la atención del verdadero propósito: <b>vender productos de forma eficiente.</b><br>
            <br>Desde la primera interacción, los usuarios se encontraban con imágenes e información extensa relacionada con el CBD, en lugar de ver de inmediato los productos disponibles o acceder fácilmente al proceso de compra. Esto generaba confusión, aumentaba el tiempo de navegación y disminuía la conversión de visitas en ventas.
        </p>

        <h1 class="pt-5 col-9 mx-auto">La estrategia</h1>
        <p class="col-9 mx-auto mt-4 pb-4">
            El rediseño tuvo como foco principal <b>reposicionar la experiencia de usuario en torno a la venta</b>, priorizando la visibilidad de los productos y optimizando el acceso al proceso de compra. Para ello se reestructuraron las jerarquías visuales, se mejoró la navegación y se diseñó una interfaz que mantuviera el atractivo visual, pero con una orientación más clara a los objetivos comerciales del sitio.
        </p>

        <div class="mx-auto position-relative mt-5">
            <img src="{{ asset('img/mac.png') }}" alt="Laptop" class="laptop-img" />
            <div class="screen">
                <img src="{{ asset('img/kna-index.png') }}" width="100%" height="100%" style="border: none;" alt="">
            </div>
        </div>

        <h1 class="pt-5 col-9 mx-auto">El proceso</h1>
        <p class="col-9 mx-auto mt-4">
            Para comprender mejor las necesidades y expectativas de los usuarios de KNA WORLD, se realizó un análisis exhaustivo del sitio anterior. Esto incluyó una evaluación heurística para identificar problemas de usabilidad, así como un análisis de la competencia para entender cómo otras tiendas de cannabis presentaban sus productos y estructuraban sus procesos de compra. Además, se llevaron a cabo pruebas informales de usabilidad, donde se observó cómo los usuarios interactuaban con el sitio original, permitiendo identificar puntos críticos y áreas de oportunidad.<br>
            <br>Entre los hallazgos más importantes, se descubrió que muchos usuarios esperaban ver los productos desde el primer contacto con la página, sin tener que desplazarse demasiado para encontrar lo que buscaban. También quedó claro que, aunque el sitio era atractivo visualmente, muchos usuarios lo percibían más como una fuente de información que como una tienda en línea, generando confusión sobre su propósito principal.
            Estos insights guiaron el enfoque del rediseño, asegurando que las nuevas interfaces reflejaran mejor las expectativas de los usuarios y facilitaran una navegación rápida y eficiente.
        </p>

        <h1 class="pt-5 col-9 mx-auto">Resultados y aprendizaje</h1>
        <p class="col-9 mx-auto mt-4 pb-5">
            El rediseño de KNA WORLD logró cumplir con los objetivos establecidos al inicio del proyecto, transformando el sitio en una plataforma más orientada a las ventas y mejorando significativamente la experiencia de usuario.<br>
            <br>Este proyecto reforzó la importancia de diseñar siempre pensando en los objetivos comerciales y en las necesidades del usuario final. También destacó el valor de las pruebas de usabilidad como herramienta esencial para validar decisiones de diseño antes del desarrollo.
        </p>
    </div>
@endsection

@section('english')
    <div class="col-7 mx-auto">
        <img class="mt-5 hero" src="{{ asset('img/herok.png') }}" alt="">
    </div>
    <div class="col-lg-9 mx-auto position-relative" style="background-color: #F8F8F8">
        <h1 class="pt-5 col-9 mx-auto title">A simpler, more engaging way to shop online</h1>
        <p class="col-9 mx-auto mt-4">
            KNA WORLD is a website dedicated to the sale and distribution of CBD. This project focused on redesigning the platform to improve the shopping experience by making the process more intuitive and efficient for users.<br>
            <br>The main focus was to optimize navigation, enhance product presentation, and reduce friction during checkout. UX/UI principles were applied to create a clean, user-friendly interface that helps customers easily find and purchase what they’re looking for.
        </p>

        <h1 class="pt-5 col-9 mx-auto">The problem</h1>
        <p class="col-9 mx-auto mt-4">
            Although the previous version of the KNA WORLD website had a visually appealing interface, it didn’t fulfill the core goals of an e-commerce platform. The design was focused on providing information about CBD, which distracted users from the site’s main purpose: <b>selling products efficiently.</b><br>
            <br>From the very first interaction, users were met with images and lengthy content about CBD, instead of immediately seeing the available products or accessing the shopping process easily. This led to confusion, longer browsing times, and lower conversion rates.
        </p>

        <h1 class="pt-5 col-9 mx-auto">The strategy</h1>
        <p class="col-9 mx-auto mt-4 pb-4">
            The redesign focused on <b>repositioning the user experience around sales</b>, prioritizing product visibility and streamlining access to the checkout process. To achieve this, visual hierarchies were restructured, navigation was improved, and a new interface was designed to maintain visual appeal while clearly aligning with the site’s commercial goals.
        </p>

        <div class="mx-auto position-relative mt-5">
            <img src="{{ asset('img/mac.png') }}" alt="Laptop" class="laptop-img" />
            <div class="screen">
                <img src="{{ asset('img/kna-index.png') }}" width="100%" height="100%" style="border: none;" alt="">
            </div>
        </div>

        <h1 class="pt-5 col-9 mx-auto">The process</h1>
        <p class="col-9 mx-auto mt-4">
            To better understand the needs and expectations of KNA WORLD’s users, we conducted a thorough analysis of the previous site. This included a heuristic evaluation to identify usability issues and a competitive analysis to see how other cannabis shops presented their products and structured their shopping experiences.<br>
            <br>We also carried out informal usability testing, observing how users interacted with the original site. This helped reveal key pain points and opportunities for improvement.<br>
            <br>One of the most important findings was that users expected to see products right away, without having to scroll too much to find what they were looking for. It also became clear that, while the site was visually appealing, many users perceived it more as an informational resource than an online store, causing confusion about its main purpose.<br>
            <br>These insights shaped the redesign strategy, ensuring that the new interface better matched user expectations and allowed for a smoother, more efficient browsing experience.
        </p>

        <h1 class="pt-5 col-9 mx-auto">Results & learnings</h1>
        <p class="col-9 mx-auto mt-4 pb-5">
            The redesign of KNA WORLD successfully met the goals set at the start of the project, transforming the site into a more sales-driven platform and significantly improving the user experience.<br>
            <br>This project reinforced the importance of designing with both business objectives and end-user needs in mind. It also highlighted the value of usability testing as a key tool for validating design decisions before moving into development.
        </p>
    </div>
@endsection
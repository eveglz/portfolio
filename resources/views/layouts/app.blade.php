<!DOCTYPE html>
<html>
    @extends('layouts.head')

    <body>
        <section lang="es">
            @yield('spanish')
        </section>
        <section lang="en">
            @yield('english')
        </section>
    </body>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    @extends('layouts.scripts')
    @extends('layouts.footer')
</html>
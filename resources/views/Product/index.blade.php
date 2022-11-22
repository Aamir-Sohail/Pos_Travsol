@extends('layouts.app')

@section('content')
    @include('admin.inc.admin_content')
    <div class="d-flex" id="wrapper">
        <!-- {{-- Start Side menu --}} -->

        @include('admin.inc.admin_sidebar')

        <div id="page-content-wrapper">

            @include('admin.inc.admin_navbar')


            <div class="container-fluid px-4">
                <h5>Add New Product</h5>

            </div>
            <br>
            {{--  working aera for the project --}}









        </div>


    </div>
    <script>
        var el = document.getElementById("wrapper")
        var toggleButton = document.getElementById("menu-toggle")

        toggleButton.onclick = function() {
            el.classList.toggle("toggled")
        }
    </script>
    </body>

    </html>

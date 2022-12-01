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

            <form action="{{ route('product.store') }}" method="post">
            {{--  <form action="{{ route('product.store') }}" method="POST" >  --}}
                <div class="form-row d-flex">
                  <div class="col-md-4 mb-4 ms-5">
                    <label for="validationCustom01">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="validationCustom01" placeholder="Product Name" value="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 ms-5">
                    <label for="validationCustom02">Brand</label>
                    <input type="text" name="brand" class="form-control" id="validationCustom02" placeholder="Brand" value="" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>

                </div>
                <div class="u_name city form-row d-flex">
                   <div class="col-md-4 mb-4 ms-5">
                    <label for="validationCustomUsername">Price</label>
                    <div class="input-group">
                      <div class="input-group-prepend">

                      </div>
                      <input type="INT" class="form-control" id="validationCustomUsername" placeholder="Price" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 ms-5">
                    <label for="validationCustom03">Quantity</label>
                    <input type="INT" name="quantity" class="form-control" id="validationCustom03" placeholder="Quantity" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                </div>
                <div class="form-row">
                 <div class="form_row d-flex">
                  <div class="col-md-4 mb-4 ms-5">
                    <label for="validationCustom04">Alert Stock</label>
                    <input type="text" name="alert_stock" class="form-control" id="validationCustom04" placeholder="Alert Stock" required>
                    <div class="invalid-feedback">
                      Please provide a valid Alert Stock.
                    </div>
                  </div>
                  <div class="col-md-4 mb-4 ms-5">
                    <label for="validationCustom05">Description</label>
                    <input type="text" name="description" class="form-control" id="validationCustom05" placeholder="Description" required>
                    <div class="invalid-feedback">
                      Please provide a valid Description.
                    </div>
                  </div>
                </div>
                </div>

                <button class="btn btn-primary ms-5 mt-4" type="submit">Submit form</button>
              </form>

              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>
          <!-- {{--
          Page-content-Wrapper end --}} -->


          </div>






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

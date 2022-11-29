@extends('layouts.app')

@section('content')
    @include('admin.inc.admin_content')
    <div class="d-flex" id="wrapper">
        <!-- {{-- Start Side menu --}} -->

        @include('admin.inc.admin_sidebar')

        <div id="page-content-wrapper">

            @include('admin.inc.admin_navbar')


            <div class="container-fluid px-4">
                {{--  <h5>Add New Product</h5>  --}}

            </div>
            <br>
            {{--  working aera for the project --}}


            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">

                            <div class="row">

                                <div class="col-sm-8"><h2>Product <b>Details</b></h2></div>
                                <div class="col-sm-4">
                                    <a class="btn btn-primary" href="{{ url('') }}" role="button">Add New Product</a>

                                    <br>
                                    <div class="search-box">

                                        <input type="text" class="form-control" placeholder="Search&hellip;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name    <i class="fa fa-sort"></i></th>
                                    <th>Brand           <i class="fa fa-sort"></i></th>
                                    <th>Price           <i class="fa fa-sort"></i>       </th>
                                    <th>Quantity        <i class="fa fa-sort"></i></th>
                                    <th>Alert Stock      <i class="fa fa-sort"></i></th>

                                    <th>Description     <i class="fa fa-sort"></i></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as  $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        <td>{{ $product->brand }}</td>
                                        <td>
                                            {{ number_format($product->price, 2) }}
                                        </td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            @if ($product->alert_stock >= $product->quantity)
                                                <span class="badge badge-danger">
                                                    Low Stock > {{ $product->alert_stock }} </span>
                                            @else
                                                <span class="badge badge-success">{{ $product->alert_stock }}
                                                </span>
                                            @endif
                                        </td>
                                        <td>{{ $product->description }} </td>

                                        <td>
                                            <div class="btn-group">
                                                
                                                <a href="{{ url('product.edit/'.$product->id) }}" class="btn btn-info btnt-sm" data-toggle="modal"
                                                    data-target="#productedit{{ $product->id }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>

                                                {{-- <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                                                    data-target="#productdelete">
                                                    <i class="fa fa-trash"></i>Delete
                                                </a> --}}
                                                <a href="{{ url('product.destroy/'.$product->id) }}" class="btn btn-danger btnt-sm" data-toggle="modal"
                                                    data-target="#productdelete{{ $product->id }}">
                                                    <i class="fa fa-trash">
                                                    </i> Delete </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- modal for edit product --}}

                                    <div class="modal right fade" id="productedit{{ $product->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">Edit product</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    {{ $product->id }}
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ route('product.update', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for=" Product Name "> Product Name </label>
                                                            <input type="text" name="product_name" id=""
                                                                class="form-control"
                                                                value="{{ $product->product_name }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="Brand"> Brand </label>
                                                            <input type="text" name="brand" id=""
                                                                class="form-control" value="{{ $product->brand }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="price"> Price </label>
                                                            <input type="number" name="price" id=""
                                                                class="form-control" value="{{ $product->price }}">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="quantity"> Quantity </label>
                                                            <input type="text" name="quantity" id=""
                                                                class="form-control" value="{{ $product->quantity }}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="Stock">Alert Stock </label>
                                                            <input type="number" name="alert_stock" id=""
                                                                value="{{ $product->alert_stock }}"
                                                                class="form-control">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="Description"> Description </label>

                                                            <textarea name="description" id="" cols="30" rows="2" class="form-control">{{ $product->description }}</textarea>
                                                        </div>

                                                        {{-- <div class="form-group">
                                                            <label for="Role"> Role </label>
                                                            <select name="is_admin" id="" class="form-control">
                                                                <option value="1"
                                                                    @if ($product->is_admin == 1) selected @endif>
                                                                    Admin</option>
                                                                <option value="2"
                                                                    @if ($product->is_admin == 2) selected @endif>
                                                                    Cashier</option>
                                                            </select>
                                                        </div> --}}

                                                        <div class="modal-footer">
                                                            <button class="btn btn-warning btn btn-block">Update
                                                                product</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    {{-- modal for Delete product --}}

                                    <div class="modal right fade" id="productdelete{{ $product->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">Delete product</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    {{ $product->id }}
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ route('product.destroy', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        {{-- aera write something --}}
                                                        <p>
                                                            Are you soure to delete the product {{ $product->name }} ?
                                                        </p>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" data-dismiss="modal">
                                                                Cancal
                                                            </button>

                                                            <button type="submit" class="btn btn-danger"> Delete
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
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

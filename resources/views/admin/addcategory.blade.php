

@extends('admin.layouts.template')

@section('main-content')

  <!-- start page title -->
  <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Add category </h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                      <div class="container">
                      <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                     @endif

                                            <form class="needs-validation" action="{{route('storecreateblog')}}" method="post">
                                                @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Create category </label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Programmings" name="category"  required="">
                                                        <div class="valid-feedback">
                                                            please enter category!
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div>
                                                <button class="btn btn-success" type="submit">Valider</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->

                        </div>
                      </div>
                        <!-- end row -->

@endsection



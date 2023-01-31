

@extends('admin.layouts.template')

@section('main-content')



                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Create New Blog </h4>


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
                                            <form class="needs-validation" action="{{route('storeblog')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Name Auteur</label>
                                                        <input type="text" class="form-control" id="name"  name="name"  required="">
                                                        <div class="valid-feedback">
                                                            please enter name of author!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom01" class="form-label">Titre </label>
                                                        <input type="text" class="form-control" id="title" placeholder="" name="title"  required="">
                                                        <div class="valid-feedback">
                                                            please enter title!
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                     <label for="validationCustom03" class="form-label">Category</label>
                                                        <select class="form-select" id="validationCustom03" name="category_id" required="">
                                                            <option selected="" disabled="" value="">Choose category...</option>

                                                            @foreach ($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                                            @endforeach

                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please select a valid category.
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom04" class="form-label">Tags</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="tags" name="tags" required="">
                                                        <div class="invalid-feedback">
                                                            Please provide a valid tags.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="validationCustom05" class="form-label">Image</label>

                                                            <div class="input-group">
                                                                <input type="file" class="form-control" name="blog_img" id="blog_img">
                                                            </div>
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid image.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label>Description</label>
                                                <div>
                                                    <textarea required="" class="form-control" name="description"  rows="5"></textarea>
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



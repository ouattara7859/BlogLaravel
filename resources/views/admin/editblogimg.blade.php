
@extends('admin.layouts.template')

@section('main-content')

<div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Images blog</h4>


                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="{{route('updateblogimg')}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="">
                                            <img src="{{asset($bloginfo->blog_img)}}" class="img-fluid" name="old_img" alt="Responsive image">
                                        </div>
                                            <input type="hidden" name="id" value="{{$bloginfo->id}}">
                                        <div class="col-md-6 mt-5 m-0">
                                            <div class="mb-3">
                                            <label for="validationCustom05" class="form-label">Image</label>

                                            <div class="input-group mb-4" >
                                            <input type="file" class="form-control" name="blog_img" id="blog_img">
                                            </div>
                                            </div>
                                        </div>

                                        <div>
                                            <br><br>
                                                <button class="btn btn-success" type="submit">Valider</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->



                    </div>




@endsection

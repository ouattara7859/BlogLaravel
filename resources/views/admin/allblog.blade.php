

@extends('admin.layouts.template')

@section('main-content')

<div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">All blogs</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @if (session()->has('message'))

                        <div class="alert alert-success alert-dismissible" role="alert" style="background: green;color: white;">

                            {{session()->get('message')}}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>

                        @endif

                        @if (session()->has('info_delete'))

                        <div class="alert alert-danger alert-dismissible" role="alert"  style="background: red;color: white;">
                            {{session()->get('info_delete')}}.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="color: black;"></button>
                        </div>

                        @endif

                        <div class="row">

                          @foreach ($all_blogs as $all_blog)
                              <div class="col-xl-3 col-sm-6">
                                  <div class="card">
                                      <div class="card-body">
                                          <div class="text-center">
                                            <a href="{{route('editblogimg', $all_blog->id)}}">
                                                <img src="{{asset($all_blog->blog_img)}} " alt="img-5" class=" mt-2 mb-4 rounded avatar-lg">

                                            </a>

                                              <!-- <div class="row icon-demo-content text-center">
                                              <div class="col-xl-3 col-lg-4 col-sm-6 text-center"><i class="ri-eye-fill"></i></div>
                                              </div> -->

                                              <div class="flex-1">
                                                  <h5 class="text-truncate"><a href="#" class="text-dark">{{$all_blog->title}}</a></h5>
                                                  <p class="text-muted">
                                                      <i class="mdi mdi-account me-1"></i> {{$all_blog->name}}
                                                  </p>
                                                  <p class="text-muted">
                                                       {{$all_blog->category}}
                                                  </p>
                                              </div>
                                          </div>

                                          <hr class="my-4">
                                          <div class="row text-center">
                                              <div class="col-6">
                                              <a href="{{route('editblog', $all_blog->id )}}"><button class="btn btn-primary btn-sm"><i class="mdi mdi-pencil font-size-18 me-2"></i>Edit</button></a>
                                              </div>
                                              <div class="col-6">
                                              <a href="{{route('deleteblog',$all_blog->id)}}"><button class="btn btn-danger btn-sm"><i class="mdi mdi-trash-can font-size-18 me-2"></i>Delete</button></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach


                        </div>
                        <!-- end row -->

                        <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <div>
                                                        <p class="mb-sm-0 mt-2">Page <span class="fw-bold">2</span> Of <span class="fw-bold">113</span></p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="float-sm-end">
                                                        <ul class="pagination pagination-rounded mb-sm-0">
                                                            <li class="page-item disabled">
                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">1</a>
                                                            </li>
                                                            <li class="page-item active">
                                                                <a href="#" class="page-link">2</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">3</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">4</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link">5</a>
                                                            </li>
                                                            <li class="page-item">
                                                                <a href="#" class="page-link"><i class="mdi mdi-chevron-end"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                    </div>

@endsection



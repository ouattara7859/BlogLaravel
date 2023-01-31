

@extends('admin.layouts.template')

@section('main-content')

<div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">List Category</h4>


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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body  pt-0">

                                        <div class="table-responsive">
                                            <table class="table table-centered datatable dt-responsive nowrap dataTable" style="border-collapse: collapse; border-spacing: 0; width: 100%;" id="DataTables_Table_0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="ordercheck">
                                                                <label class="form-check-label mb-0" for="ordercheck">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>ID</th>
                                                        <th>Category Name</th>
                                                        <th>Category Count</th>


                                                        <th style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($categories as $category)

                                                        <tr>
                                                            <td>
                                                                <div class="form-checkbox">
                                                                    <input type="checkbox" class="form-check-input" id="ordercheck1">
                                                                    <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                                                </div>
                                                            </td>
                                                            <td><a href="javascript: void(0);" class="text-dark fw-bold">{{$category->id}}</a> </td>
                                                            <td>{{$category->category}}</td>
                                                            <td>{{$category->category_count}}</td>
                                                            <td>
                                                                <a href="{{route('editcategory', $category->id)}}" class="me-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                <a href="{{route('deletecategory', $category->id)}} " class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                            </td>
                                                        </tr>

                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>

@endsection



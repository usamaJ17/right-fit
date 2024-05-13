@extends('backend.layouts.master')
@section('title')
    Categories
@endsection
@section('css')
    <!-- extra css -->
@endsection
@section('content')
    <x-breadcrumb title="Categories" pagetitle="Products" />

    <div class="row">
        <div class="col-xxl-3">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">Create Categories</h6>
                </div>
                <div class="card-body">
                    <form autocomplete="off" class="needs-validation createCategory-form" id="createCategory-form" method="POST" action="{{ route('catagory.store') }}" novalidate enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="categoryid-input" class="form-control" value="">
                        <div class="row">
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="categoryTitle" class="form-label">Category Title<span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" id="categoryTitle" placeholder="Enter title"
                                        required>
                                    <div class="invalid-feedback">Please enter a category title.</div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="slugInput" class="form-label">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="slugInput" placeholder="Enter slug">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="category-image-input" class="form-label d-block">Image </label>
                                    <input type="file" name="image" class="form-control" id="image" placeholder="Enter Image">

                                    {{-- <div class="position-relative d-inline-block">
                                        <div class="position-absolute top-100 start-100 translate-middle">
                                            <label for="category-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                data-bs-placement="right" title="Select Category Image">
                                                <span class="avatar-xs d-inline-block">
                                                    <span
                                                        class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="ri-image-fill"></i>
                                                    </span>
                                                </span>
                                            </label>
                                            <input class="form-control d-none" id="category-image-input" name="image" type="file"
                                                accept="image/png, image/gif, image/jpeg, image/jpg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded-3">
                                                <img src="#" alt="" id="category-img"
                                                    class="avatar-md h-auto rounded-3 object-fit-cover">
                                            </div>
                                        </div>

                                    </div> --}}

                                    <div class="error-msg mt-1">Please add a category images.</div>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-lg-6">
                                <div class="mb-3">
                                    <label for="descriptionInput" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="descriptionInput" rows="3" placeholder="Description"></textarea>
                                    <div class="invalid-feedback">Please enter a description.</div>
                                </div>
                            </div>
                            <div class="col-xxl-12">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Add Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div>
        <div class="col-xxl-9">
            <div class="row justify-content-between mb-4">
                <div class="col-xxl-3 col-lg-6">
                    <div class="search-box mb-3 mb-lg-0">
                        <input type="text" class="form-control" id="searchInputList" placeholder="Search Category...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
            </div>
            <!--end row-->

            <div class="row" id="categories-list">
                @foreach ($categories as $item)
                    
                @endforeach
            </div>
            <!--end row-->

            <div class="row" id="pagination-element">
                <div class="col-lg-12">
                    <div
                        class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                        <div class="page-item">
                            <a href="javascript:void(0);" class="page-link" id="page-prev">←</a>
                        </div>
                        <span id="page-num" class="pagination"></span>
                        <div class="page-item">
                            <a href="javascript:void(0);" class="page-link" id="page-next">→</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="overviewOffcanvas" aria-labelledby="overviewOffcanvasLabel">
        <div class="offcanvas-header bg-primary-subtle">
            <h5 class="offcanvas-title" id="overviewOffcanvasLabel">#TB<span class="overview-id"></span></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="avatar-lg mx-auto">
                <div class="avatar-title bg-light rounded">
                    <img src="{{ URL::asset('build/images/ecommerce/clothes.png') }}" alt="" class="avatar-sm overview-img">
                </div>
            </div>
            <div class="text-center mt-3">
                <h5 class="overview-title">Clothing</h5>
                <p class="text-muted">by <a href="#!" class="text-reset">Admin</a></p>
            </div>

            <h6 class="fs-14">Description</h6>
            <p class="text-muted overview-desc">Beauty Care is basically the science of beauty treatment that involves skin
                Care, hair Care, manicure, pedicure, Anti- aging treatments, facials, styling and so on.</p>

            <h6 class="fs-14 mb-3">Sub Categories</h6>
            <ul class="vstack gap-2 mb-0 subCategory" style="list-style-type: circle;">
                <li><a href="#!" class="text-reset">Casual Wear</a></li>
                <li><a href="#!" class="text-reset">Formal Wear</a></li>
                <li><a href="#!" class="text-reset">Business Attire</a></li>
                <li><a href="#!" class="text-reset">Sportswear</a></li>
                <li><a href="#!" class="text-reset">Lingerie</a></li>
                <li><a href="#!" class="text-reset">Childrens wear</a></li>
                <li><a href="#!" class="text-reset">Cardigan</a></li>
                <li><a href="#!" class="text-reset">Tracksuit</a></li>
                <li><a href="#!" class="text-reset">Sweater</a></li>
                <li><a href="#!" class="text-reset">Dungarees</a></li>
            </ul>
        </div>
        <div class="p-3 border-top">
            <div class="row">
                <div class="col-sm-6">
                    <div data-bs-dismiss="offcanvas">
                        <button type="button" class="btn btn-danger w-100 remove-list" data-bs-toggle="modal"
                            data-bs-target="#delteModal"><i class="ri-delete-bin-line me-1 align-bottom"></i>
                            Delete</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-secondary w-100 edit-list" data-bs-dismiss="offcanvas"><i
                            class="ri-pencil-line me-1 align-bottom"></i> Edit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- delteModal -->
    <div id="delteModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="close-removecategoryModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-md-5">
                    <div class="text-center">
                        <div class="text-danger">
                            <i class="bi bi-trash display-4"></i>
                        </div>
                        <div class="mt-4 fs-15">
                            <h4 class="mb-1">Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this category ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light btn-hover"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger btn-hover" id="remove-category">Yes, Delete
                            It!</button>
                    </div>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@section('scripts')
    <script src="{{ URL::asset('build/js/backend/product-categories.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

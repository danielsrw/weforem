@extends('nexcode.admin.layouts.base')

@section('title', 'Blog')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 d-flex justify-content-between">
            <span class="text-muted fw-light">Blog</span>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBlog">
                Add a blog
            </button>
        </h4>

        <div class="row">
            @include('nexcode.admin.pages.blog.create')

            @include('nexcode.admin.pages.blog.show')
        </div>
    </div>

@endsection

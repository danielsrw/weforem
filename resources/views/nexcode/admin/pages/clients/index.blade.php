@extends('nexcode.admin.layouts.base')

@section('title', 'Clients')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 d-flex justify-content-between">
            <span class="text-muted fw-light">Clients</span>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createClient">
                Add Client
            </button>
        </h4>

        <div class="row">
            @include('nexcode.admin.pages.clients.create')

            @include('nexcode.admin.pages.clients.show')
        </div>
    </div>

@endsection
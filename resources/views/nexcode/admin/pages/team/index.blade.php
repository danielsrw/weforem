@extends('nexcode.admin.layouts.base')

@section('title', 'Team')

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 d-flex justify-content-between">
            <span class="text-muted fw-light">Team</span>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createMember">
                Add a member
            </button>
        </h4>

        <div class="row">
            @include('nexcode.admin.pages.team.create')

            @include('nexcode.admin.pages.team.show')
        </div>
    </div>

@endsection
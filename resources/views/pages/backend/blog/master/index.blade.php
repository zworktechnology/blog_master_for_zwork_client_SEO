@extends('layouts.auth')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Blog Master</h4>
                        <div class="text-sm-end mt-2 mt-sm-0" hidden>
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Add new
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                @include('pages.backend.blog.master.create')
            </div>

            @if (\Session::has('add'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <i class="uil uil-pen me-2"></i>
                {!! \Session::get('add') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (\Session::has('update'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <i class="uil uil-pen me-2"></i>
                {!! \Session::get('update') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (\Session::has('soft_destroy'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <i class="uil uil-pen me-2"></i>
                {!! \Session::get('soft_destroy') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (\Session::has('destroy'))
            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <i class="uil uil-pen me-2"></i>
                {!! \Session::get('destroy') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Master Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $keydata => $datas)
                                    <tr>
                                        <td>{{ ++$keydata }}</td>
                                        <td>{{ $datas->master_name }}</td>
                                        <td>
                                            <ul class="list-unstyled hstack gap-1 mb-0">
                                                <li>
                                                    <a href="{{ route('blog.master.edit', ['id' => $datas->id]) }}" class="btn btn-sm btn-soft-info">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#jobDelete{{ $datas->id }}" data-bs-toggle="modal" class="btn btn-sm btn-soft-danger" data-bs-target="#firstmodal{{ $datas->id }}">Delete</a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="firstmodal{{ $datas->id }}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-muted font-size-16 mb-4">Please confirm that you wish to remove the record - {{ $datas->master_name }}.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form autocomplete="off" method="POST" action="{{ route('blog.master.delete', ['id' => $datas->id]) }}">
                                                        @method('PUT')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                                    </form>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, Get Back</button>
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
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            @include('pages.backend.blog.master.create')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

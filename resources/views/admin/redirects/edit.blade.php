@extends('admin.layouts.admin')

@section('title', trans('admin.redirects.title-edit', ['redirect' => $redirect->slug]))

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.redirects.update', $redirect) }}" method="POST">
                @method('PUT')

                @include('admin.redirects._form')

                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> {{ trans('messages.actions.save') }}
                </button>
                <a href="{{ route('admin.redirects.destroy', $redirect) }}" class="btn btn-danger" data-confirm="delete">
                    <i class="fas fa-trash"></i> {{ trans('messages.actions.delete') }}
                </a>
            </form>
        </div>
    </div>
@endsection

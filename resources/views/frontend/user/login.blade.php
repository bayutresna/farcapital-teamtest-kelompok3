@extends('template.base')

@section('judul', 'Login')

@section('konten')
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible mx-auto col-lg-6">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            {{ $errors->first() }}.
        </div>
    @endif
    <div class="card mx-auto col-lg-6">
        <div class="card-header">
            Login Admin
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

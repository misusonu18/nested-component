@extends('layouts.app')

@section('content')
    <div class="row m-5">
        <div class="col-lg-6">
            <a href="{{ route('laravel_nested') }}" class="btn btn-primary">
                Laravel Nested Blade
            </a>
        </div>

        <div class="col-lg-6" >
            <a href="{{ route('livewire_nested') }}" class="btn btn-primary">
                Livewire Nested Blade
            </a>
        </div>
    </div>
@endsection

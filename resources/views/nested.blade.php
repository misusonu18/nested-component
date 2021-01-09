@extends('layouts.app')

@section('content')
    <div class="row">
        @if(is_array($categories))
            @foreach($categories as $key => $category)
                @if($key === 'name')
                    <p class="h2 font-weight-bold">
                        @ {{ $category }}
                    </p>
                @endif

                @if($key === 'parent_id')
                    @if(count($category))
                        @include('nested', ['categories' => $category])
                    @endif
                @endif
            @endforeach
        @else
            {{ $categories }}
        @endif
    </div>
@endsection

<div>
    @if(is_array($categories))
        @foreach($categories as $key => $category)
            @if($key === 'name')
                <p class="h2 font-weight-bold">
                    {{ $category }}
                </p>
            @endif

            @if($key === 'parent_id')
                @if(count($category))
                    <livewire:nested-component :categories='$category' />
                @endif
            @endif
        @endforeach
    @endif
</div>

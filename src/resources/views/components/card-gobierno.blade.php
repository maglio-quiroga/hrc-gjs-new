<a class="card-link" href="{{ $href }}">
    <div {{ $attributes->merge(['class' => 'card']) }}>
        <div class="card-top-border">
            <div class="border-color-1"></div>
            <div class="border-color-2"></div>
        </div>
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</a>

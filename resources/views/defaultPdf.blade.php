<div style="width: 100%; padding: 40px 20px; background: #333333;">
    <h1 style="color: #FFFFFF;">{{ $title }}</h1>
</div>
<div style="width:60%; margin: auto;">
    @foreach ($description as $text)
        <div style="width: 100%; display: block; margin-bottom: 10px">
            <p>{{ $text }}</p>
        </div>
    @endforeach
</div>
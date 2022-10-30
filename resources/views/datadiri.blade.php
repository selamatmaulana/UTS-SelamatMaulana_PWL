@extends ('tampilan.app')
@section('content')
<img src="metyu.png" alt="png">
<div class="">
    <div class="">
        {{ $name }}
        {{$channelName }}<br>
        {{ $alamat }}
        {{ $channelDescriptions }}<br>
        {{ $TTL }}
        @foreach ($datadiri as $value)
        {{ $value }}<br>
        @endforeach
        @endsection
    </div>
</div>
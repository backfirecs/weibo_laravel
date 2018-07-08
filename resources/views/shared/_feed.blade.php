@if (count($feedItems))
    <ol class="statuses">
        @foreach ($feedItems as $status)
            @include('statuses._status', ['user' => $status->user])
        @endforeach
    </ol>
    {!! $feedItems->render() !!}

@endif
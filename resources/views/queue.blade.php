<!DOCTYPE html>
<html>
    <head>
        <title>Queue</title>
    </head>
    <body>
        <h1>Queue Status</h1>
        <p>Size: {{ $queue['size'] }}</p>
        <form action="{{ route('queue.process') }}" method="POST">
            @csrf
            <button type="submit">Process Queue</button>
        </form>
    </body>
</html>

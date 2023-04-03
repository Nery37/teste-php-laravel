<!DOCTYPE html>
<html>
    <head>
        <title>Import</title>
    </head>
    <body>
        <h1>Import File</h1>
        <form action="{{ route('import.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file">
            <button type="submit">Import</button>
        </form>
    </body>
</html>

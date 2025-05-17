<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>速習 Laravel</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </head>
    <body>
        <table class="table">
            <tr>
                <th>No.</th>
                <th>書名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>刊行日</th>
            </tr>
            @foreach($records as $id => $record)
            <tr>
                <td>{{ $id + 1 }}</td>
                <td>{{ $record -> title }}</td>
                <td>{{ $record -> price }}円</td>
                <td>{{ $record -> publisher }}</td>
                <td>{{ $record -> published }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
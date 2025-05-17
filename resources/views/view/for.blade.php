<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>速習Laravel</title>
    </head>
    <body>
        <!-- h1～6までを出力 -->
         @for($i = 1; $i <= 6; $i++)
            <h{{ $i }}>{{ $i }}番目です。</h{{ $i }}>
         @endfor
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>速習Laravel</title>
    </head>
    <body>
        <!-- 変数の初期化-->
        @php
            $i = 0;;
        @endphp
        <!-- h1～6までを出力 -->
         @while($i < 6)
            @php
                $i++;
            @endphp
                <h{{ $i }}>{{ $i }}番目です。</h{{ $i}}>
        @endwhile
    </body>
</html>
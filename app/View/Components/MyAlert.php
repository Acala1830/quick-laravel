<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyAlert extends Component
{

    // a.コンポーネントのパラメーター
    public string $type;
    public string $alertTitle;

    // b.パラメーターを初期化
    public function __construct(string $type, string $alertTitle) {
        $this -> type = $type;
        $this -> alertTitle = $alertTitle;
    }

    // c.ビューの呼び出し
    public function render() {  //: View|Closure|string
        return view('components.my-alert');
    }
}

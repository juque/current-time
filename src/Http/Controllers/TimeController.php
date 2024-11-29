<?php

namespace Acme\CurrentTime\Http\Controllers;

use Illuminate\Http\Request;

class TimeController
{
    public function show()
    {
        return view('current-time::time', [
          'time' => now()->format('Y-m-d H:i:s')
        ]);
    }
}

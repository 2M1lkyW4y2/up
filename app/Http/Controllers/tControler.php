<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tControler extends Controller
{
    public function show() {
        return "TestController";
    }
}



/*/

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Page extends Controller
{
    public function showOne() {
        return "Page";
    }
}

?>

<?php
 
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Sheets;
  
class mySheetController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $sheets = Sheets::spreadsheet('1Z0howNOJwkiAPleoya7NlXPhnD90vIt4ncPtHBVQAO8')->sheet('demo1')->get();
        $header = $sheets->pull(0);
        $posts = Sheets::collection($header, $sheets);
        $posts = $posts->take(5000);
        
        $data = $posts->toArray();

        if ($data) {
            foreach ($data as $key => $value) {
                info($value);
            }
        }else{
            info('data not found');
        }
    }
}

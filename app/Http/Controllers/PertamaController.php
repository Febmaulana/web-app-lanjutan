<?php  
namespace App\Http\Controllers;

class PertamaController extends Controller{
          public function first(){
                    return view('page1');
          }
          public function second(){
                    return view('page2');
          }
          public function third(){
                    return view('page3');
          }
          public function index()
          {
                    return view('test-tema');
          }
}

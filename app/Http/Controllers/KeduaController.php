<?php  
namespace App\Http\Controllers;

class KeduaController extends Controller{
          public function satu(){
                    return view('laman1');
          }
          public function dua(){
                    return view('laman2');
          }
          public function tiga(){
                    return view('laman3');
          }
}

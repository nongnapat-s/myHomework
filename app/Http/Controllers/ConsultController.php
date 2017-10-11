<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function consultShow ($title)
    {
        switch ($title) {
            case "case":      
            {
                $cases = loadCSV('consults-case');
                $doctors = loadCSV('consults-doctor');
                return view('consults-case', compact('cases','doctors')); 
            break;
            }
            case "doctor":
            {
                $doctors = loadCSV('consults-doctor');
                return view('consults-doctor', compact('doctors')); 
            }
            break;
            default:
                return "กรุณาระบุชื่อ path ให้ถูกต้อง<br>
                        ชื่อ path ที่สามารถใช้ได้คือ<br>
                        1. consults/case<br>
                        2. consults/doctor<br>";
        }
    }
}

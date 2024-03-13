<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\NumberConverterService;

class NumberController extends Controller
{
    protected $converterService;

    public function __construct(NumberConverterService $converterService)
    {
        $this->converterService = $converterService;
    }

    public function index()
    {
        return view('convertnumber');
    }

    public function convert(Request $request)
    {
        $request->validate([
            'number' => 'required'
        ]);

        $number = $request->input('number');

        if ($this->converterService->isValidInput($number)) {
            $words = $this->converterService->convertToWords($number);
            return view('result', compact('number', 'words'));
        } else {
            return redirect()->route('index')->with('error', 'Invalid input. Please enter a valid Integer or Roman Numeral.');
        }
    }
}

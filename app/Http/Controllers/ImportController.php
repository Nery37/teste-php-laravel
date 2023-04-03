<?php

namespace App\Http\Controllers;

use App\Services\FileImporter;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    protected $fileImporter;

    public function __construct(FileImporter $fileImporter)
    {
        $this->fileImporter = $fileImporter;
    }

    public function index()
    {
        return view('import');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $data = json_decode(file_get_contents($file), true);
        $this->fileImporter->import($data['documentos']);
        return redirect()->route('queue.index');
    }
}


<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\DocumentRepository;
use App\Services\DocumentImporter;
use Illuminate\Support\Facades\Artisan;

class QueueController extends Controller
{
    protected $documentImporter;
    protected $categoryRepository;
    protected $documentRepository;

    public function __construct(DocumentImporter $documentImporter, CategoryRepository $categoryRepository, DocumentRepository $documentRepository)
    {
        $this->documentImporter = $documentImporter;
        $this->categoryRepository = $categoryRepository;
        $this->documentRepository = $documentRepository;
    }

    public function index()
    {
        $queue = $this->documentImporter->queueStatus();

        return view('queue', compact('queue'));
    }

    public function process()
    {
        Artisan::call('queue:work --stop-when-empty');
        return redirect()->route('queue.index');
    }
}

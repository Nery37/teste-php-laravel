<?php

namespace App\Services;

use App\Contracts\Queueable;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Support\Collection;

class FileImporter
{
    public function import(array $data): Collection
    {
        $documents = collect();

        foreach ($data as $item) {
            $category = Category::firstOrCreate(['name' => $item['categoria']]);
            $document = new Document([
                'category_id' => $category->id,
                'title' => $item['titulo'],
                'contents' => $item['conteúdo'],
            ]);

            if ($document instanceof Queueable) {
                $document->toQueue();
            }

            $documents->push($document);
        }

        return $documents;
    }
}

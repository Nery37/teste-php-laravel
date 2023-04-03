<?php

namespace App\Repositories;

use App\Models\Document;

class DocumentRepository
{
    public function create(array $data): Document
    {
        return Document::create($data);
    }

    public function update(Document $document, array $data): void
    {
        $document->update($data);
    }

    public function delete(Document $document): void
    {
        $document->delete();
    }
}
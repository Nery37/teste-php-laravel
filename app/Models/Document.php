<?php

namespace App\Models;

use App\Contracts\Queueable;
use App\Repositories\CategoryRepository;
use App\Traits\Queueable as QueueableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model implements Queueable
{
    use HasFactory, QueueableTrait;

    protected $fillable = [
        'category_id',
        'title',
        'contents',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function handle()
    {
        $categoryRepository = new CategoryRepository();
        $category = $categoryRepository->find($this->category_id);

        if ($category) {
            $this->category()->associate($category);
            $this->save();
        }
    }
}

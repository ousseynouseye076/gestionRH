<?php

namespace App\Models;

use App\Http\Requests\DocumentFormRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin IdeHelperDocument
 */
class Document extends Model
{
    use HasFactory;

    /**
     * @param DocumentFormRequest $request
     * @return mixed
     */
    public function saveFile(DocumentFormRequest $request): mixed
    {
        $data = $request->validated();
        $document = $request->validated('path');
        if ($document !== null && !$document->getError()) {
            if ($this->path) {
                Storage::disk('public')->delete($this->path);
            }
            $data['path'] = $document->store('documents', 'public');
        }
        return $data;
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}

<?php

namespace App\Filament\Resources\Sections\Pages;

use App\Models\Section;
use App\Filament\Resources\Sections\SectionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()->after(
                function (Section $record) {
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ), 
        ];
    }
}

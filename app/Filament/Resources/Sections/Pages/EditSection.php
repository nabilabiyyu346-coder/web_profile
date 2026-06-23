<?php

namespace App\Filament\Resources\Sections\Pages;

use App\Filament\Resources\Sections\SectionResource;
use App\Models\Section;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()->after(
                function(Section $record) {
                    if ($record->thumbnail) {
                        \Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}

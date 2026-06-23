<?php

namespace App\Filament\Resources\Partners\Pages;

use App\Filament\Resources\Partners\PartnerResource;
use App\Models\Partner;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditPartner extends EditRecord
{
    protected static string $resource = PartnerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()->after(
                function (Partner $record) {
                    if ($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }   
            ), 
        ];
    }
}

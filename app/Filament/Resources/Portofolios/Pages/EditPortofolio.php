<?php

namespace App\Filament\Resources\Portofolios\Pages;

use App\Filament\Resources\Portofolios\PortofolioResource;
use App\Models\Portofolio;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPortofolio extends EditRecord
{
    protected static string $resource = PortofolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()->after(
                function(Portofolio $record) {
                    if ($record->thumbnail) {
                        \Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
        ];
    }
}

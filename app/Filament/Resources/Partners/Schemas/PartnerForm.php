<?php

namespace App\Filament\Resources\Partners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('thumbnail')->disk('public'),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('link')
                    ->required()
            ]);
    }
}

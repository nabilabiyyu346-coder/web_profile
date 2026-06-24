<?php

namespace App\Filament\Resources\Sections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                FileUpload::make('thumbnail')
                    ->required()->image()
                    ->disk('public'),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Select::make('post_as')
                    ->options(['profile' => 'Profile', 'abbout' => 'Abbout']),
            ]);
    }
}

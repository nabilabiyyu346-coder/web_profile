<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\Pages\ManageSettings;
use App\Models\Setting;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\EditAction;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('label')->searchable(),
                TextColumn::make('value')->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->form(function(setting $record) {
                    switch($record->type) {
                        case 'text':
                            return [
                                TextInput::make('value')->label($record->label),
                            ];
                            break;

                        case 'longtext':
                            return [
                                RichEditor::make('value')->label($record->label),
                            ];
                            break;
                    }
                }),
                // DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                //     DeleteBulkAction::make(),
                 ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageSettings::route('/'),
        ];
    }
}

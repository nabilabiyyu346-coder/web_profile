<?php

namespace App\Filament\Resources\Settings;

use App\Filament\Resources\Settings\Pages\ManageSettings;
use App\Models\Setting;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

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
                TextColumn::make('label')
                    ->searchable(),
                TextColumn::make('value')
                    ->searchable()->limit(50)
                    ->formatStateUsing(function ($state, Setting $record) {
                        if ($record->type === 'pdf' && $state) {
                            return 'Buka Dokumen PDF';
                        }
                        return $state;
                    })
                    ->url(function (Setting $record) {
                        if ($record->type === 'pdf' && $record->value) {
                            return Storage::url($record->value);
                        }
                        return null;
                    })
                    ->openUrlInNewTab()
                    ->color(fn (Setting $record) => $record->type === 'pdf' ? 'info' : null)
                    ->action(null),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->form(
                    function(Setting $record) {
                        switch ($record->type) {
                            case 'text':
                                return [
                                    TextInput::make('value')
                                        ->label($record->label)
                                        ->required(),
                                ];

                            case 'pdf':
                                return [
                                    FileUpload::make('value')
                                        ->label($record->label)
                                        ->required()
                                        ->acceptedFileTypes(['application/pdf'])
                                        ->disk('public')
                                        ->directory('cv'),
                                ];

                            default:
                                return [
                                    TextInput::make('value')
                                        ->label($record->label),
                                ];
                            
                        }
                    }
                ),
                // DeleteAction::make(),
            ])
            ->toolbarActions([
                // BulkActionGroup::make([
                //     DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageSettings::route('/'),
        ];
    }
}

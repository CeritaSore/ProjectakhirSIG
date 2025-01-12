<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kabkota;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KabkotaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KabkotaResource\RelationManagers;

class KabkotaResource extends Resource
{
    protected static ?string $model = Kabkota::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nama')
                    ->label('Nama')
                    ->required(),

                TextInput::make('alt_nama')
                    ->label('Nama Alternatif')
                    ->placeholder('Opsional'),

                TextInput::make('lat')
                    ->label('Latitude')
                    ->numeric()
                    ->required(),

                TextInput::make('long')
                    ->label('Longitude')
                    ->numeric()
                    ->required(),

                Select::make('provinsi_id')
                    ->relationship('provinsi', 'nama') // Relasi ke nama provinsi
                    ->label('Provinsi')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('nama'),
                TextColumn::make('provinsi.nama'),
                TextColumn::make('alt_nama')->label('Alternatif'),
                TextColumn::make('lat')->label('Latitude'),
                TextColumn::make('long')->label('Longitude'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKabkotas::route('/'),
            'create' => Pages\CreateKabkota::route('/create'),
            'view' => Pages\ViewKabkota::route('/{record}'),
            'edit' => Pages\EditKabkota::route('/{record}/edit'),
        ];
    }
}

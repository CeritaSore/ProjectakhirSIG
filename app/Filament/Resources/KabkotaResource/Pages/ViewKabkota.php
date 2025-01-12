<?php

namespace App\Filament\Resources\KabkotaResource\Pages;

use App\Filament\Resources\KabkotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKabkota extends ViewRecord
{
    protected static string $resource = KabkotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ModeratorResource\Pages;

use App\Filament\Resources\ModeratorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListModerators extends ListRecords
{
    protected static string $resource = ModeratorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

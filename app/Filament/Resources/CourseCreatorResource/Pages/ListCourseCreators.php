<?php

namespace App\Filament\Resources\CourseCreatorResource\Pages;

use App\Filament\Resources\CourseCreatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCourseCreators extends ListRecords
{
    protected static string $resource = CourseCreatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

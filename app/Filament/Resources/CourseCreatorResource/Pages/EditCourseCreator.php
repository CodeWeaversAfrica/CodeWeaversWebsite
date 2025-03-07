<?php

namespace App\Filament\Resources\CourseCreatorResource\Pages;

use App\Filament\Resources\CourseCreatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCourseCreator extends EditRecord
{
    protected static string $resource = CourseCreatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

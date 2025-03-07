<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseCreatorResource\Pages;
use App\Filament\Resources\CourseCreatorResource\RelationManagers;
use App\Models\CourseCreator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CourseCreatorResource extends Resource
{
    protected static ?string $model = CourseCreator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListCourseCreators::route('/'),
            'create' => Pages\CreateCourseCreator::route('/create'),
            'edit' => Pages\EditCourseCreator::route('/{record}/edit'),
        ];
    }
}

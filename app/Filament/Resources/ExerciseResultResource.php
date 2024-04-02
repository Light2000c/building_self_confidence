<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExerciseResultResource\Pages;
use App\Filament\Resources\ExerciseResultResource\RelationManagers;
use App\Models\ExerciseResult;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExerciseResultResource extends Resource
{
    protected static ?string $model = ExerciseResult::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("feedback")->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("id"),
                TextColumn::make("user.name")->searchable(),
                // ImageColumn::make("file"),
                // ImageColumn::make('file')
                //     ->getStateUsing(function (ExerciseResult $record): string {
                //         return "feedback/".$record->file;
                //     })->extraImgAttributes([
                //         'img' => 'src'
                //     ]),
                TextColumn::make('file')
                    ->getStateUsing(function (ExerciseResult $record): string {
                        return "<img src='". '.../feedback/'. $record->file . "/'/>";
                    })->html(),
                TextColumn::make("feedback")->words(6)->html(),
                TextColumn::make("created_at"),
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
            'index' => Pages\ListExerciseResults::route('/'),
            'create' => Pages\CreateExerciseResult::route('/create'),
            'edit' => Pages\EditExerciseResult::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}

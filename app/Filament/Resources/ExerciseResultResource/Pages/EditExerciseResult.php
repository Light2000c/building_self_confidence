<?php

namespace App\Filament\Resources\ExerciseResultResource\Pages;

use App\Filament\Resources\ExerciseResultResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExerciseResult extends EditRecord
{
    protected static string $resource = ExerciseResultResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ComponentResource\Pages;
use App\Filament\Resources\ComponentResource;
use App\Models\components;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditComponent extends EditRecord
{
    protected static string $resource = ComponentResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(component $record){
                      if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);

                    }

                }
            ),
        ];
    }
}

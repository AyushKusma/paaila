<?php

namespace App\Filament\Resources\ConsultancyResource\Pages;

use App\Filament\Resources\ConsultancyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConsultancy extends EditRecord
{
    protected static string $resource = ConsultancyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Services;

use App\Enums\RecurrenceEnum;
use Carbon\Carbon;

class RecurrenceServices
{
    public function chooseRecurrence(int $typeRecurrence): string
    {
        return match ($typeRecurrence) {
            RecurrenceEnum::MONTHLY->value => $this->monthlyRecurrence(),
            RecurrenceEnum::BIWEEKLY->value => $this->biweeklyRecurrence(),
            RecurrenceEnum::WEEKLY->value => $this->weeklyRecurrence(),
            default => "",
        };
    }

    public function monthlyRecurrence(): string
    {
        return Carbon::now()->addDays(30);
    }

    public function biweeklyRecurrence(): string
    {
        return Carbon::now()->addDays(15);
    }

    public function weeklyRecurrence()
    {
        return Carbon::now()->addDays(7);
    }
}

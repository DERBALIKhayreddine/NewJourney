<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Carbon;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour,$pickupDate->minute,$pickupDate->second);

        $earliestTime=Carbon::createFromTimeString('08:00:00');
        $lastTime=Carbon::createFromTimeString('17:00:00');

        if (!($pickupTime->between($earliestTime, $lastTime) ?true :false)) {
            $fail("The $attribute should be betwwen 08:00 - 17:00");
        }
    }
}

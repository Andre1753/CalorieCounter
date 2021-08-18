<?php

namespace App\Observers;

use App\Models\meal;

class MealObserver
{
    /**
     * Handle the meal "created" event.
     *
     * @param  \App\Models\meal  $meal
     * @return void
     */
    public function created(meal $meal)
    {
        $amount = $meal->amount / $meal->food->amount;
        $meal->carbohydrate = $amount * $meal->food->carbohydrate;
        $meal->protein = $amount * $meal->food->protein;
        $meal->fat = $amount * $meal->food->fat;
        $meal->calories = $amount * $meal->food->calories;
        $meal->save();
    }

    /**
     * Handle the meal "updated" event.
     *
     * @param  \App\Models\meal  $meal
     * @return void
     */
    public function updated(meal $meal)
    {
        //
    }

    /**
     * Handle the meal "deleted" event.
     *
     * @param  \App\Models\meal  $meal
     * @return void
     */
    public function deleted(meal $meal)
    {
        //
    }

    /**
     * Handle the meal "restored" event.
     *
     * @param  \App\Models\meal  $meal
     * @return void
     */
    public function restored(meal $meal)
    {
        //
    }

    /**
     * Handle the meal "force deleted" event.
     *
     * @param  \App\Models\meal  $meal
     * @return void
     */
    public function forceDeleted(meal $meal)
    {
        //
    }
}

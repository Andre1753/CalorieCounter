<?php

namespace App\Observers;

use App\Models\Food;

class FoodObserver
{
    /**
     * Handle the Food "created" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function created(Food $food)
    {
        $food->calories = ($food->carbohydrate * 4) + ($food->protein * 4) + ($food->fat * 9);
        $food->save();
    }

    /**
     * Handle the Food "updated" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function updated(Food $food)
    {
        //
    }

    /**
     * Handle the Food "deleted" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function deleted(Food $food)
    {
        //
    }

    /**
     * Handle the Food "restored" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function restored(Food $food)
    {
        //
    }

    /**
     * Handle the Food "force deleted" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function forceDeleted(Food $food)
    {
        //
    }
}

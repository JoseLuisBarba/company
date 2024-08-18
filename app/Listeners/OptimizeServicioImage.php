<?php

namespace App\Listeners;

use App\Events\ServicioSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class OptimizeServicioImage implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\ServicioSaved  $event
     * @return void
     */
    public function handle(ServicioSaved $event)
    {
        //
        $image = Image::make(Storage::get($event->persona->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();
        Storage::put($event->persona->image, (string) $image);
    }
}

<?php

namespace App\Listeners;

use App\Events\NewUserRegisteredEvent;
use App\Member;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateUsersSelfMemberListener
{
    /**
     * Handle the event.
     *
     * @param  NewUserRegisteredEvent  $event
     * @return void
     */
    public function handle(NewUserRegisteredEvent $event)
    {
        $member = new Member();
        $member->patient_id = $member->getNewPatientId();
        $member->name = $event->newUser->name;
        $member->user()->associate($event->newUser);
        $member->save();
    }
}

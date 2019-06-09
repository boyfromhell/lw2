<?php

namespace App\Observers;

use App\Participant;

class ParticipantObserver
{
    public function creating(Participant $participant) {
        $participant->event_year = 2019;
    }

    public function updating(Participant $participant) {

    }

    public function deleting(Participant $participant) {
        return false;
    }
}

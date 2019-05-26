@component('mail::message')
Thank you {{ $first_name }} {{ $last_name }}!

We have received your registration for the 41st Annual Litchfield Watercade Tennis Tournament July 12-14, 2019!

Your spot in the tournament is reserved, but is not confirmed until payment is received. If paying by check,
please print and include this confirmation with your payment.

@component('mail::panel')
# Your events entered:
**Event 1:** {{ $event1 }}<br>
**Event 1 Partner Name (if known/applicable):** {{ $event1_partner }}<br>
**Event 2:** {{ $event2 }}<br>
**Event 2 Partner Name (if known/applicable):** {{ $event2_partner }}<br>
**T-shirt Size Selected:** {{ $shirt_size }}

**Tournament Fees Due:** {{ $tournament_fees }}
@endcomponent

@component('mail::panel')
#Checks should be payable to:
**Litchfield Tennis Association**
@endcomponent

@component('mail::panel')
#Payments should be mailed to:
**Evonne Fix - Watercade Tennis Tournament**<br>
**1600 Legacy Parkway E, Unit 4**<br>
**Maplewood, MN 55109**
@endcomponent

We look forward to seeing you in July!

Sincerely,<br>
2019 Watercade Tennis Tournament
@endcomponent

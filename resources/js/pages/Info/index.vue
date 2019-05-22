<template>
    <div class="container">
        <nav-bar></nav-bar>
        <div class="title text-center">
            Tournament Information
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Registration Deadline</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <p>Sunday, July 7, 2019 at 11:59 PM</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Location</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <p>High School Tennis Complex (south of high school) <br/>
                    <b>All players must check in and be ready to play 15 minutes before their scheduled match!</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Events Offered</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <ul>
                    <li>Men's Open Singles and Doubles</li>
                    <li>Women's Open Singles and Doubles</li>
                    <li>Mixed Open Doubles</li>
                    <li>Men's A Singles and Doubles</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Entry Fees</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <p>Players may register for a maximum of 2 events.  Due to scheduling, we cannot accommodate exceptions</p>
                <ul>
                    <li>Singles: $20</li>
                    <li>Doubles: $40 per team ($20 per player)</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>T-Shirts</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <p>All entrants will receive a T-shirt.  Please enter your requested size in the entry form.  We will do our best to honor all requested sizes,
                    but may not be able to accomodate XS and XXL sizes due to quantity requirements when ordering.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Awards</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <p>Awards will be given for champion, runner up, and consolation champion of each event</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Consolation</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <p>All events have a 2 match guarantee. The inclusion of consolation brackets will be dependent on the number of entries in any given event class.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Schedule</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <p>We may not be able to schedule players who are unable to compete on Friday evening</p>
                <p>The schedule may be updated throughout the tournament due to weather and/or extreme heat</p>
                <p>The schedule and brackets will be updated on this site throughout the tournament</p>
                <ul>
                    <li>Friday: Matches will begin at 5:30 PM and be played until sunset</li>
                    <li>Saturday: Matches will begin at 8:00 AM and be played until approximately 4:00 PM</li>
                    <li>Sunday: Matches will begin at 8:30 AM and be played until tournament completion</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4><u>Tournament Rules and Regulations</u></h4>
            </div>
            <div class="col-md-12 ml-3">
                <p>The tournament will provide tennis balls for all matches.</p>
                <p><b>Main Draw Matches - Up to Semi-Finals and All Consolation Draw Matches</b></p>
                <ul>
                    <li>Matches will be 2 standard sets with no-ad game scoring</li>
                    <li>If the score becomes deuce, in singles and doubles, the receiver will decide which side of court they would like to receive the final point.</li>
                    <li>On deuce points in mixed doubles, server will serve to the receiver of the same gender for the final point.</li>
                    <li>Set tie-break will be played at 6 games all.  Tie-break is first player/team to seven points - winning by two points.</li>
                    <li>If the players/teams split the first two sets, a match tie break will be played in lieu of a full third set.</li>
                    <li>A match tie-break is the first player/team to ten points - winning by two points.</li>
                    <li>Set and match tie-breaks may continue past 7/10 points until a player ahead by two points. (9-7), (12-10), etc.</li>
                    <li>In set and match tie-breaks, players/teams will switch sides every 6 points.</li>
                </ul>
                <p><b>Main Draw Matches - Semi-Finals and Finals (Changes from above)</b></p>
                <ul>
                    <li>Matches will be 2 standard sets with standard game scoring (deuce and ad points).</li>
                    <li>If the players/teams split the first two sets, a match tie break will be played in lieu of a full third set.</li>
                </ul>
                <p><b>Other Considerations</b></p>
                <ul>
                    <li>Players will play no more than 2 matches back to back during the tournament.</li>
                    <li>Players with back to back matches will have a minimum 75 minute rest before their next match.</li>
                    <li>There will be water at the tournament site provided for players and fans.</li>
                    <li>There will be food and drink for purchase across the street at the softball tournament.</li>
                    <li>No alcohol is allowed on premise at the tennis tournament.</li>
                </ul>
            </div>
        </div>
        <app-footer></app-footer>
    </div>
</template>

<script>
    import NavBar from "../../components/NavBar";
    import AppFooter from "../../components/AppFooter";
    export default {
        name: 'Info',
        components: {
            AppFooter,
            NavBar
        },
    }
</script>

<style scoped>

</style>

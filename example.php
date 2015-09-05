<?php
// Include the class on your page somewhere
include('challonge.class.php');

// Create a new instance of the API wrapper. Pass your API key into the constructor
// You can view/generate your API key on the 'Password / API Key' tab of your account settings page.
$c = new ChallongeAPI(UbJNZTBSuXZcPWZ4BqTW3OPMSPUGtt7cuZYWL5kr);

// Get all participants
// http://challonge.com/api/tournaments/:tournament/participants
$tournament_id = 827414;
$participants = $c->getParticipants($tournament_id);
//print_r( $participants);
foreach ($participants as $item) {
    print_r((string) $item->name );
	echo ' ';
    print_r((string) $item->id );
	echo '<br/>';
}

echo '<br/>';

// Get all matches for a tournament
// http://challonge.com/api/tournaments/:tournament/matches
$tournament_id = 827414;
$parmas = array();
$matches = $c->getMatches($tournament_id, $params);
//print_r( $matches);
foreach ($matches as $item) {
   //print_r( $item );
   echo '<br/>';
   print_r((int) $item->{'loser-id'} );
   echo ' ';
   print_r((int) $item->{'winner-id'} );
}

?>
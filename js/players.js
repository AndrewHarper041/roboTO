/*****************************************************************************************
 * Players.js
 * Contains structures and relevent functions to the tracking of a participants list for a
 * tournament
 *
 *
 *****************************************************************************************/

/*
 * Associative array of players with ELO. Default ELO value should be initialized to 1200
 * (chess.coms standard).
 */
var playerList = {};

/*
 * Function to add a participant to current list, with ELO of 1200.
 */
function addPlayer(tag)
{

}

/*
 * Function to 'genericize' a players tag by forcing lower case and removing white space
 */
function genericize(tag)
{
    var genericTag = tag.toLowerCase(); //make lowercase
    genericTag = genericTag.replace(/ /g,''); //remove whitespace. g is javascript regex modifer that will repeat search through

    return genericTag;
}

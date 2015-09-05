/*
 * Automated test suite for javascript functions
 */

//Test genericiving of players names
//TODO: handle edge cases (special chars etc) intelligently
QUnit.test("players.genericize() test", function(assert)
{
    var tag = "Graphite Zeppelin" //Expected output is graphitezeppelin
    assert.notOk(tag == "graphitezeppelin", "Tag not recogonized by generic version")
    var genericTag = genericize(tag);
    assert.ok(genericTag == "graphitezeppelin", "Forced lower case and whitespace removed");
});

# Synopse
HTTP(s) API req/res from remote service; basically a weather middleware layer.

# Database strucutr
Lets start with the database stucture:

Query input data from a configuration file (rec. json or yml format)
Request table -> who, what, when. Where and why are not needed for this
Response table-> 
Weather table ->
Error table   -> Log any errors from data source if presented, IE non 200 responses

# The Fancy:
async cURL
TDD, write tests first, logic after

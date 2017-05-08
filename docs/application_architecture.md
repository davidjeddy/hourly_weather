# Synopse
HTTP(s) API req/res from remote service; basically a weather middleware layer.

Query input data from a configuration file (rec. json or yml format)

# Database structure
Basic database table usage:

Request table -> Who, what, where. when, why

Response table-> Response from remote source.

Weather tabel -> Broken apart response in a searchable, and readable form

Error table   -> Log any errors from data source if presented, IE non 200 responses

## Table Columns:
Table column definition

### Request Table: record keeping table
INT id, IP ip,p STRING postal_code,INT created_at

### Response Table: record keeping table
INT id, FK INT request_id, INT response_code, JSON response_body, created_at

### Weather Table: data repositoty table
id, fk INT response_id, VARCHAR condition, DECIMAL pressure, DECIMAL temperature, VARCHAR wind_dir, INT wind_speed, DECIMAL humidity, INT created_at

### Error Table: log all non 2xx response's from remote service
id, fk INT response_id, INT response_code, TEXT response_body, INT created_at

# Application process:
 1) Load and parse dataset from configuration (businees layer)
 2) Call remote resource using cURL async; time the calls as to not get blocked for flooding
 3) on response from remote data source log response appropriatly
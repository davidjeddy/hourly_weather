Application that will track current weather measurements for a given set of zip codes.

# Requirements
 - There is no output requirement for this application, it is data retrieval and storage only
 - The application should be able to recover from any errors encountered
 - The application should be developed using a TDD approach
   - 100% code coverage is not required
 - The set of zip codes and their respective retrieval frequency should be contained in configuration file
 - Use the OpenWeatherMap API for data retrieval (https://openweathermap.org)
 - Store the following data at a minimum:
    - Zip code,
    - General weather conditions (e.g. sunny, rainy, etc),
    - Atmospheric pressure,
    - Temperature (in Fahrenheit),
    - Winds (direction and speed),
    - Humidity,
    - Timestamp (in UTC)

# Assumptions
 - The usage of external PHP libraries is permitted, why re-invent the wheel?
  - as such Composer is also allowed
 - The usage of an entire MVC framework is discouraged, does not show problem solving
 - The configuration file can be of any desired format
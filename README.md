Q1.Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.
I placed my filter route below the featured route but above my show route so Laravel checks it first when matching URLs. If I swapped them, visiting the filter link would match the id route instead, treating filter as an id and causing a 404 error.

Q2.What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?
I used isset() to check if the id exists in my data before showing it. If it doesn't exist, I call abort(404) so Laravel shows its default not found page instead of crashing.

Q3.Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.
I used route() instead of hardcoding URLs so my links always match the actual route. If I changed a URL in my routes file later, hardcoded links would break and show 404 errors, but route names update automatically.

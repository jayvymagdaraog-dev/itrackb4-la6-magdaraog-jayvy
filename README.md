LAB 6 PART E.
#Q1. You added a second filter without adding a single route. Explain why no new route was needed. Your answer should say something about what the router actually looks at.
-I did not add a new route because I used the same '/movies' route for both genre and year. The router looks at the main URL path, which is '/movies'. The genre and year are just added as query strings.

#Q2. Suppose you had built both filters as route parameters instead. Describe what the URL for 'year 4 only, no course filter' would have to look like, and why.
-If I used route parameters for both filters, the URL would need to include both values. For example, it could be '/movies/all/2019' if 'all' means no genre filter. This would make the URL longer because both filters would be part of the route.

#Q3. Your navigation link stays marked on a detail page and also when a filter is applied. Only one of those two needed a change to your pattern. Say which one, and why the other needed nothing.
-The navigation needed a change for the movie detail page because the URL becomes '/movies/1' instead of just '/movies'. I used 'movies*' so the Movie List link stays active on the detail page. The filter did not need another change because the query string does not change the '/movies' path.

#Q4. You deleted your old filter method but kept the empty store and update methods, even though none of the three can be reached by a URL. Explain the difference between them.
-I deleted the old filter method because I replaced it with the new genre and year filter system. I kept the empty store and update methods because they are still part of the controller for future use. They are not being used yet, but I did not need to delete them.
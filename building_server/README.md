# Learning Laravel and PHP

## Day 1: Bird's eye view of each folder

1. App: Contains Main App Logic for our server. We will spend most of our time writing code here.

2. Bootstrap: Here Laravel setups/creates our app.

3. Config: Contains default setting for your app. Ex Which is the default database, what happens when you fetch data from database ?

4. Database: Code related to database. Migrations: Deals with schema of the tables. Factories and seeders help to populate dummy data for testing purpose.

5. Public: Static files only and visible to everyone!

6. Resources: Front End stuff like HTML, CSS and JS.

7. Routes: Deals with navigation part of our server. Ex when you hit /home, Home page should be displayed and similarly on hitting /about, an About page should be displayed.

8. Storage: Contains cache, logs and assets/resources uploaded by the user

9. Tests: Unit tests

10. Vendor: project dependencies.

11. Artisan: loads all the classes

## Day 2:

1. In Laravel you create applications based upon MVC Architecture. Read my blog on
   MVC architecture here: **\_\_**-----.
2. How to user Services like authentication and routing?
   Using the bind method or serviceprovider class.
3. What is middleware ?
   Middleware acts as a security guard for your server. It sanitizes and filters
   incoming requests to your server. After this it sends the requests to the
   appropiate route.
   Example: ConvertEmptyStringToNull, Only allow specific requests during maintainance, TrimStrings(remove whitespaces from start & end of strings) etc.
   Middleware contains 2 funtions

    1. handle(): Accepts request and closure as arguments. Perform checks
       inside the function and then pass the request to the closure or redirect if checks failed.
    2. terminate(): Terminate function is executed after serving a request.
       Similar to when you hit GET /home, this request goes through each middleware
       and then home page is displayed, now terminate function on middleware
       will be executed in the opposite direction.
       GET /Home ->
       handle() middleware1 ->
       handle() middleware2 ->
       handle() middleware3 ->
       response returned to user ->
       terminate() of middleware13 ->
       terminate() of middleware2 ->
       terminate() of middleware1.

4. What is Singleton pattern?
   When you want to use "Single instance" of that class everywhere. Basically you
   want everyone to "Share the same instance" of a class. Then we use
   singleton pattern.
5. What is a Bind pattern?
   When you want to use "Different instance" or new instance of a class every time.
   Here new instance of the class is created each time.
6. What is Closure? Closure is an anonymous function in php

## Day 3

TIL about types, and "::" operator.

Q. What is "::" Operator ?
A. Its static method access operator. To access static methods we use "::" operator before the class name. Example Route::get()

Q. Why do we use static members and methods ?
A. So that we don't have to instanciate/declair an object of the class
everytime we want to access the function.

Q. HTTP verbs/methods/requests
A. It includes GET, PUT, POST, UPDATE, DELETE.

Q. Things inside the request() ?
A. The request function has 3 parts 1. $content of type string,array,null. Basically content/resource which
you want to send back to the client. 2. $status which represents status code. 200-204 means "Successful", 400-9 means "Error NOT found!", 500-9 means server maintainance/error. 3. $headers which represents headers you want to send for example
"Content-Type":"text/plain;charset=UTF-8",
"Content-Length": 38,
"Connection": "keep-alive"
etc details about the response.

Q. How to make endpoints ?
A. Always use plural nouns and never attach verbs with the names.
Example insted of '/getHome' use '/home'.

Q. How to access particular data from link? from endpoint '/users/453'
you want to access 453 from the link.
A. Use wildcard '{}' notation. Example
Route::get('/users/{userId}/posts/{postId}', function($userId, $postId){
// App logic
// You have userId and postId from the URL
})->where('postId', '[0-9]+');
The where function will make sure that the postId inside the URL is
always a combination of numbers from 0 to 9. This is called Regex.
Any other type will lead to 404 page not found.

Q. How to access query parameters from the link? from Endpoint access the
name and city '/search?name=brad&city=boston'
A. In laravel you can directly access it using the request parameter
Route::get('/search?name=brad&city=boston', function($request){
        dump($request->name . " " . $request->city);
// This will output "brad boston"
});

Some helper methods like ddd and dump are available in laravel.

Q. How does string concat works in php ?
A. Using the "." operator.

## Day 4 of Laravel

Learning about api route

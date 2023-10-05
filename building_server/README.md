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
   MVC architecture here: ______-----.
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



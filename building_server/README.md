# Learning Laravel and PHP

## Day 1: Bird's eye view of each folder

1. App: Contains Main App Logic for our server. We will spend most of our time writing code here.

2. Bootstrap: Here Laravel setups/creates our app.

3. Config: Contains default setting for your app. Ex Which is the default database, what happens when you fetch data from database ?

4. Database: Code related to database. Migrations: Deals with schema of the tables. Factories and seeders help to populate dummy data for testing purpose.

5. Public: Static files only and visible to everyone!

6. Resources: Front End stuff like HTML, CSS and JS.

7. Routes: Deals with navigation + endpoints part of our server. Ex when you hit /home, Home page should be displayed and similarly on hitting /about, an About page should be displayed.

8. Storage: Contains cache, logs and assets/resources uploaded by the user

9. Tests: Unit tests

10. Vendor: project dependencies.

11. Artisan: loads all the classes
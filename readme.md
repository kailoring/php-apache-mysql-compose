# Docker Reference Example

Create containers for a database and a simple web application

## Files

- `docker-compose.yml`

  Docker-compose file used to do the following:

    1. Builds the mysql container
    2. Runs the container
    3. Waits for the database to start
    4. Creates a mysql user
    5. Creates and loads the sample database
    6. Runs a command to print the database contents
    7. Builds the webserver container
    8. Runs the webserver container
    9. Persists data

## Directories

### mysql

This directory contains the files necessary to build the Docker container for the mysql database.

The actual database commands are in two files:

- `createuser.sql`

  This file contains the sql necessary to create a non-root user.

- `createdata.sql`

  This file contains the commands required to create a sample database and a table withing the database. It further inserts a couple of records into the database.

### webserver

This directory contains the files necessary to build the Docker container for the web server.

- `index.php`

  A simple application to print the contents of the database.

- `adduser.php`

  Web page used to add a user to the database

- `edituser.php`

  Web page used to modify a user's information

- `db.php`

  Used to establish and check connection to the database

- `Dockerfile`

  Installs the mysql interface and copies the web application into a root directory

### adr

This directory contains adr files used to document decisions regarding the application.

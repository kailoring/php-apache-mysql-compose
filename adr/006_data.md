# Choice of Configuration and operational data

#Status: accepted

#Context:

Given that the application is used to create and store information about users, certain configuration and operational data has to be established.

#Decision:

`createdata.sql` and `createuser.sql` files are used to configure the application with sample data to provide proof of concept and a base for working with the application.

Volumes were added to the `docker-compose.yml` file to introduce data persistence.

#Consequences:

The configuration data used is simple yet effective to demonstrate the application. Data persistence allows data to be saved locally and remain when the application is launched and brought down.

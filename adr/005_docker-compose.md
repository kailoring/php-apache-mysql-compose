# Choice of Docker Compose

#Status: accepted

#Context:

Docker Compose allows a user to define and run applications with multiple containers. This is popular alternative to traditional Docker as you can define multiple services in a single YAML file.

#Decision:

Converting from a shell script with Docker commands to Docker Compose was decided upon due to ease of use for deploying the application, by simply using these two commands:

`docker-compose up -d`
`docker compose down`

#Consequences:

The application can be deployed with ease and without having to install specific software components on each machine that wishes to run the application(s).

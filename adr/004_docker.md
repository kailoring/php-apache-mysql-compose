# Choice of Docker containers

#Status: accepted

#Context:

Docker is a technology that allows applications to be packaged with the required components and deployed with the use of containers. This allows for applications to be sent to and deployed on various machines with ease.

#Decision:

The use of Docker containers was a clear choice for this application compared to a Virtual Machine due to being able to package and deploy the application on basically any machine running Docker. Another deciding factor was the ability to use readily available images from the Docker Hub, rather than having to install and configure specific software for the webserver, etc.

With Docker, the application can be quickly configured, isolated in containers, and rapidly deployed.

#Consequences:

The application can be deployed without having to install specific software components on each machine that wishes to run the application(s).

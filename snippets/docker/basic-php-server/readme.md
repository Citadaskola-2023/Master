### Step 1: Dockerize the Application
Create a Dockerfile in the root of your project to define the Docker image.

### Step 2: Build the Docker Image
Build the Docker image using the Dockerfile:

```shell
    docker build -t superhero-battle_ready .
```

### Step 3: Run the Docker Container
Run the Docker container and map port 80 to a port on your host machine (e.g., 8080):

```shell
docker run --rm -d -p 8080:80 cs-php
```

Now you can access the PHP application by visiting http://localhost:8080 in your web browser.

### Step 4: Keep developing
Run container with mounted volume

```shell
cd ../../../
docker run --rm -d -p 8080:80 -v $(pwd):/var/www/html cs-php
```


```shell
docker run -v $PWD:/app/public \
    -p 80:8081 -p 443:443 \
    dunglas/frankenphp
```

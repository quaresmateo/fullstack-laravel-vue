Required dependencies: [docker](https://www.docker.com/get-started) and [docker-compose](https://docs.docker.com/compose/install/)


Get started
====

Up the containers

```bash
docker-compose up -d --build
```

Update Laravel dependencies

```bash
docker-compose run composer update --no-scripts
```

Give r/w permission to src folder
```bash
sudo chmod -R 777 src 
```

To use the `artesian` command on the terminal use, for example, migrating tables to database:
```bash
docker-compose run artisan migrate
```
Required dependencies: [docker](https://www.docker.com/get-started) and [docker-compose](https://docs.docker.com/compose/install/)


Get started
====

Update Laravel dependencies

```bash
docker-compose run composer update --no-scripts
```

Give r/w permission to src folder
```bash
sudo chmod -R 777 src 
```

To use the `artesian` command on the terminal use, for example:
```bash
docker-compose run artisan make:migration task
```
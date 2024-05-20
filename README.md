# Projeto Checar Lading Page

Website and admin panel

# Setting up local environment for development

You will only need to have GIT, Docker and DockerCompose installed on your computer

-   GIT (https://git-scm.com/downloads)
-   Docker CE (https://docs.docker.com/install/)
-   Docker Compose (https://docs.docker.com/compose/install/)

After installing these tools, follow these steps:

#### 1) Clone this repo:

```shell
git clone <REPO_URL>
```

#### 2) Up the containers:

```shell
docker-compose up -d
```

#### 3) Access MySQL and create the databases:

```shell
docker-compose exec mysql8-database mysql -h0.0.0.0 -uroot -proot -e "SET foreign_key_checks = 0; DROP DATABASE IF EXISTS checar_lading_page; CREATE DATABASE checar_lading_page;"
```

#### 4) Install dependencies

```shell
docker-compose exec checar-lading-page composer create-project
```

#### 5) Run the command below to create the tables with some initial data.

```shell
docker-compose exec checar-lading-page php artisan migrate --seed
```
#### 6) Run the command below to create symbolic link to public storage dir.

```shell
docker-compose exec checar-lading-page php artisan storage:link
```

### 7) Run the command below to update the project dependencies.

```shell
docker-compose exec checar-lading-page composer update
```

Now just access the address http://localhost:8080 through the browser.
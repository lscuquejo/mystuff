# My study repo

## Basic Operation System commands
```

pwd # show all the path to this actual directory
cd # to enter in a directory (Folder)
ls # or dir to list files
rm # delete
rm -rf # delete recursive
Sudo lsof -i -sTCP:LISTEN # ListUp all listen Ports

```

## GIT
```

git add -A && git commit -m "intended commit " && git push  # add all commit & push
git clone https://github.com/lscuquejo/mystuff.git  # "download"
a new git repo, replace this url for any another git repo
git pull # download updates from the remote repo
git add .  # add updated files
git commit # little description of the Updates
git push   # send to the repo
https://github.com/lscuquejo/mystuff/commit/{nameofcommit"lastline from push) # exemplo:https://github.com/lscuquejo/mystuff/commit/5d908d0 


!!! How to create a Git check out !!!

git checkout -b nameofbranch # check out as the selected branch.
add any new file or change some. # make any gitable updates.
git add -A && git commit -m "intended commit " # adding git updates and commiting it.
Then to push but the first time you MUST to

git push --set-upstream origin nameofbranch

!!! End Block !!!
```

## MYSQL
```

mysql -u root -p # where root = user

```

## Symfony
```

composer create-project symfony/skeleton "Directory-Name" # creates symfony skeleton.

./bin/console server:run # runs symfony server

```

## Doctrine installation and update
```

 composer require symfony/orm-pack
 composer require symfony/maker-bundle --dev

```

## Doctrine Commands to create from an already created database
```

php bin/console doctrine:mapping:import 'App\Entity' annotation --path=src/Entity # dont
forget to configure your database in "config/packages/doctrine.yaml

php bin/console make:entity --regenerate App # to create setters and getters

```

## Doctrine Commands to create brand new database
```

./bin/console make:entity # don't forget to be in the right dir.

? # when u want to know what field types exists

./bin/console make:migration # to send that u just made with make:entity 
to a Brand New DataBase

./bin/console doctrine:migration:migrate # to execute the migration

./bin/console doctrine:migration:status # to see the migration status

```
## Doctrine Commands
```

php ./bin/console make:crud # create the controlers and twig templates 
based on an entity

```
## Symfony MakerBundle
```

composer require symfony/maker-bundle --dev # how to install

php bin/console list make # lists all the make commands

php ./bin/console make:controller NAMEOFCONTROLLER # create a new controller

```

## Docker Commands
```

docker ps # Show running containers

docker exec -it ID /bin/bash # how to access the terminal of a docker container

exit # exit the container xD

```

## Useful WebSites
```

https://www.php-fig.org/psr/ # WebSite that shows how to properlly organize your development stuff

https://symfonycasts.com/screencast/symfony-security/serializer-api # How to use serializer/symfony

```

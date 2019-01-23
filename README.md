# My study repo

## Basic Operation System commands
```

pwd # show all the path to this actual directory
cd # to enter in a directory (Folder)
ls # or dir to list files
rm # delete
rm -rf # delete recursive

```

## GIT
```

git add -A && git commit -m "intended commit " && git push  # add all commit & push
git clone https://github.com/lscuquejo/mystuff.git  # download a new git repo, replace this url for any another git repo
git pull # download updates from the remote repo
git add .  # add updated files
git commit # little description of the Updates
git push   # send to the repo

```

## MYSQL
```

mysql -u root -p # where root = user

```

## Symfony
```

composer create-project symfony/skeleton "Directory-Name" # creates symfony skeleton.

```

## Doctrine installation and update
```

 composer require symfony/orm-pack
 composer require symfony/maker-bundle --dev

```

## Doctrine Commands
```

./bin/console make:entity # don't forget to be in the right dir.

? # when u want to know what field types exists

./bin/console make:migration # to send that u just made with make:entity to a Brand New DataBase

./bin/console doctrine:migration:migrate # to execute the migration

./bin/console doctrine:migration:status # to see the migration status

```
# Windows setup

I chose to follow the instructions to setup [Homestead](https://laravel.com/docs/7.x/homestead). I picked homestead because it means I can have a well supported PHP and laravel environment and also the related third party integrations and services ( nginx, mysql, minio), without managing these myself. In the past I have tried hand crafted docker too which works ok but homestead is the recommended community choice, well, other than valet. I prefer homestead on windows. See below.

# DB

I updated .env to use database: c5-dev, user: homstead, password: secret. I did this because I intend to use homestead for more than one project, so I changed my homestead.yaml file to include the new database name and updated .env accordingly.
After fixing the env I also had to run `php artisan migrate`

I opted for [adminer](https://tech.osteel.me/posts/database-management-with-adminer-and-how-to-install-on-homestead) as i have used it in the past.
It is basic, but its nice that it can run in the browser and
so be part of homestead not local, saving me any installs

# Mail

I setup a [mailtrap account](https://mailtrap.io/inboxes/419358/messages).
I updated env file with username and password from mail trap free account inbox.

# Image upload

When i tried to upload large images on profile it complained.
with 413 Request Entity Too Large from nginx/php.

So i `vagrant ssh` from the homestead directory so I added `client_max_body_size 250m;` which was larger than Cell5 needs in `"/etc/nginx/sites-available/c5-dev"`. Then for posterity I restartred nginx: `sudo systemctl restart nginx`

This got past the file size issue but left us with a AWS issue.

NB. This needs to be made permanent in a better way as it gets blown away whenver provision is re-run.

# File system

For the local file sysytem to work in vagrant esp the Media Library > Files > Downloads I needed to run
`php artisan storage:link` but only after running vagrant as an admin user temporarily. You can run this command locally
too if you have PHP installed locally too. You do not need
to keep running vagrant as admin it is only to
create the symlink. this allows the laravel server to serve
the folder from storage/ for public files.

We will need to be careful with this in production though
once we support file storage for clients that are private.

# Seeding

When I tried to register as a staff before other than images breaking the other thing that broke was the drop down of skills selection, i later realised i had not run seeds.
There are seeds which locally add a default admin user, as well as other items to the app such as the Skills.

# Decision Log

-   You can install homestead per project but i decided to have a shared one in my user directory at C:\Users\peter\Homestead/ This seemed easier to manage to me.
-   There are blogs saying you can run Valet on the WSL (windows subsystem for linux) but I opted for Homestead in the end because it looked patchy support to me. Better the road often trodden.
-   https
-   I wanted close as possible https so I created ssh keys and [trusted the root certificate for now](https://medium.com/dinssa/ssl-certificates-laravel-homestead-windows-https-f83ec8b3198)

# Useful commands

-   Some of the things I needed to do quite a bit i have put as .bat files in this directory.

Also you may want to note that if you want to see the DB locally you can connect to ports:
33060(mysql) or 54320(postgres) to explore the DB.

# Common Issues

-   If you get some problem like

```
Warning: require(/home/vagrant/c-c5-backend-portal/public/../vendor/autoload.php): failed to open stream: No such file or directory in /home/vagrant/c-c5-backend-portal/public/index.php on line 24
```

It might mean you have not yet run composer locally, do not forget you still need to develop the project locally and install dependencies.

# Todo probably

-   S3 type testing with [minio locally](https://laravel.com/docs/7.x/homestead#configuring-minio)

# TWILL SETUP

Followed this https://twill.io/docs/#installation from vagrant / project directory.

Then moved the /public/assets twill back out of public into /resources/assets
so that i can keep public for vendor files or things we edit are transformed if needed.

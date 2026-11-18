## 1 Clone/Download Repository
```
git clone https://github.com/sandeepk2304/laravel-emp.git
```

## 2 Run composer update
``` 
composer update 
```
## 3 Create Database
```
create database laravel_emp;
```
## 4 Run migration
```
php artisan migrate
```
## 5 Give Read/Write permission
```
sudo chmod 777 -R storage
sudo chmod 777 -R public/images/ (Create images directory if not created automatically)
```
## 6 Create Virtual Host
```
<VirtualHost *:80>
	DocumentRoot /var/www/html/laravel-emp/public
	ServerName   local.laravelemp.com
	<Directory "/var/www/html/laravel-emp/public">
		AllowOverride All
		Options Indexes FollowSymLinks MultiViews
		Order allow,deny
	    allow from all
	</Directory>
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
## 7 Add entry into host file
```
127.0.0.1 local.laravelemp.com
```
## 8 Apache Restart
```
sudo service apache2 restart
```
## 9 open browser and hit local.laravelemp.com
Enjoy!!


## Further reading

Longer write-ups on the same ground, from [hisandeep.com](https://www.hisandeep.com):

- [Eloquent N+1 queries: find them, then fix them](https://www.hisandeep.com/blog/eloquent-n-plus-1-queries)
- [Laravel caching with Redis, past the basics](https://www.hisandeep.com/blog/laravel-caching-with-redis)
- [Laravel queues: retries, failures and what to watch](https://www.hisandeep.com/blog/laravel-queues-retries-and-failures)

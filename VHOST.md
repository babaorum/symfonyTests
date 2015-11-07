VHOST :

  $ sudo nano /etc/apache2/sites-available/symfony.test


    <VirtualHost *:80>
            SetEnv SYMFONY_TESTS_ENV dev
            ServerAdmin webmaster@localhost
            ServerName symfony.test
            ServerAlias www.symfony.test

            DocumentRoot /var/www/symfonyTests/web
            <Directory /var/www/symfonyTests/web>
                    Options Indexes FollowSymLinks MultiViews
                    AllowOverride All
                    Order allow,deny
                    allow from all
            </Directory>

            ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/

            ErrorLog ${APACHE_LOG_DIR}/error.log

            # Possible values include: debug, info, notice, warn, error, crit,
            # alert, emerg.
            LogLevel warn

            CustomLog ${APACHE_LOG_DIR}/access.log combined
    </VirtualHost>

####

    $ sudo a2ensite symfony.test
    $ sudo service apache2 reload

####

Host to add (Windows ou Mac) AND VM :

    127.0.0.1       symfony.test

path VM :

    sudo nano /etc/hosts

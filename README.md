# example-event_listener

# use queue database
    php artisan queue:table
 
    php artisan migrate
    in .env
    QUEUE_CONNECTION=database
 sail php artisan queue:work( run)
 or use worker in docker
 
 

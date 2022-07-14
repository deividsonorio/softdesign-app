#!/bin/bash
set -m

# shellcheck disable=SC1073
while ! php artisan migrate --seed ; do sleep 2 ; done ; php artisan db:seed --class=BooksSeeder && php artisan serve --host 0.0.0.0 --port 80

# Run the main container command
exec "$@"

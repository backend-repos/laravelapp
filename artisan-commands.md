##Laravel Framework version 5.1.25 (LTS)

###Usage:
  command [options] [arguments]
Available commands:
  clear-compiled         Remove the compiled class file
  down                   Put the application into maintenance mode
  env                    Display the current framework environment
  help                   Displays help for a command
  inspire                Display an inspiring quote
  list                   Lists commands
  migrate                Run the database migrations
  optimize               Optimize the framework for better performance
  serve                  Serve the application on the PHP development server
  tinker                 Interact with your application
  up                     Bring the application out of maintenance mode
 __app__
  app:name               Set the application namespace
 __auth__
  auth:clear-resets      Flush expired password reset tokens
 __cache__
  cache:clear            Flush the application cache
  cache:table            Create a migration for the cache database table
 __config__
  config:cache           Create a cache file for faster configuration loading
  config:clear           Remove the configuration cache file
 __db__
  db:seed                Seed the database with records
 debugbar
  debugbar:clear         Clear the Debugbar Storage
 __event__
  event:generate         Generate the missing events and listeners based on registration
 __handler__
  handler:command        Create a new command handler class
  handler:event          Create a new event handler class
 __key__
  key:generate           Set the application key
 __link-checker__
  link-checker:run       Check all links
 __make__
  make:command           Create a new command class
  make:console           Create a new Artisan command
  make:controller        Create a new resource controller class
  make:event             Create a new event class
  make:job               Create a new job class
  make:listener          Create a new event listener class
  make:middleware        Create a new middleware class
  make:migration         Create a new migration file
  make:migration:pivot   Create a new migration pivot class
  make:migration:schema  Create a new migration class and apply schema at the same time
  make:model             Create a new Eloquent model class
  make:policy            Create a new policy class
  make:provider          Create a new service provider class
  make:request           Create a new form request class
  make:seed              Create a new database seed class
  make:seeder            Create a new seeder class
  make:test              Create a new test class
__migrate__
  migrate:install        Create the migration repository
  migrate:refresh        Reset and re-run all migrations
  migrate:reset          Rollback all database migrations
  migrate:rollback       Rollback the last database migration
  migrate:status         Show the status of each migration
 __queue__
  queue:failed           List all of the failed queue jobs
  queue:failed-table     Create a migration for the failed queue jobs database table
  queue:flush            Flush all of the failed queue jobs
  queue:forget           Delete a failed queue job
  queue:listen           Listen to a given queue
  queue:restart          Restart queue worker daemons after their current job
  queue:retry            Retry a failed queue job
  queue:subscribe        Subscribe a URL to an Iron.io push queue
  queue:table            Create a migration for the queue jobs database table
  queue:work             Process the next job on a queue route
  route:cache            Create a route cache file for faster route registration
  route:clear            Remove the route cache file
  route:list             List all registered routes schedule
  schedule:run           Run the scheduled commands session
  session:table          Create a migration for the session database table vendor
  vendor:publish         Publish any publishable assets from vendor packages
__view__
  view:clear             Clear all compiled view files

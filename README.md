# lumen-passport
Lumen 5.6 + Passport (with lumen-passport)

This repository contains a working copy of Lumen 5.6 with Laravel Passport integrated. I figure I'll use it as a starting point for future projects. Feel free to do the same! You can also take a look at the diffs if you just need to know what to add to your existing project in order to get Passport working.

---

**Notes**

After you add the helpers.php file (if you go that route) you will need to run `composer dump-autoload`.

For client credential grant tokens you'll need to add a new client with `php artisan passport:client`.\
The user ID is the ID of the `\App\User` record and the client ID it gives you will be the ID of the oauth client record.

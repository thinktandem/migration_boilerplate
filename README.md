# Drupal 8 Migration Boilerplate 

Use this module and the directions below as a starting point to easily get your Drupal 6/7 sites into Drupal 8.

## SETUP

1. Setup both your Drupal 7 and Drupal 8 sites in Lando.  Configure the Drupal 8 site to install Drush 9.
2. Copy the .lando.yml file in this repo to your Drupal 8 site root (change the app name)
3. Export your Drupal 7 DB with ```lando db-export dump.sql.gz```
4. Copy the settings.local.php file in this repo to your Drupal 8 sites/default folder.
5. Import the Drupal 7 DB into the Drupal 8 Site with ```lando db-import --host=d7db --user=drupal7db dump.sql.gz```
6. Run this in your Drupal 8 project root:

```bash
lando composer require 'drupal/migrate_plus:^4.2'
lando composer require 'drupal/migrate_tools:^4.5'
lando composer require 'drupal/migrate_upgrade:~3.0.0'
```

7. Enable this module.
8. Run the following commands in your D8 site:

```bash
lando drush migrate-upgrade --legacy-db-key=migrate --configure-only
lando drush config-export --destination=/tmp/migrate
lando ssh -s appserver -u root
cp /tmp/migrate/migrate_plus.* /app/path/to/migration_boilerplate/unused_config
```

9. Run ```lando drush ms``` to make sure the configs made it over.

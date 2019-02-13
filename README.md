# Drupal 8 Custom Boilerplate 

Use this module and the directions below as a starting point to easily get your Drupal 6/7 sites into Drupal 8.

## SETUP

1. Setup both your Drupal 7 and Drupal 8 sites in Lando
2. Copy the .lando.yml file in this repo to your Drupal 8 site root (change the app name)
3. Export your Drupal 7 DB with ```lando db-export dump.sql.gz```
4. Copy the settings.local.php file in this repo to your Drupal 8 sites/default folder.
5. Import the Drupal 7 DB into the Drupal 8 Site with ```lando db-import --host=d7db --user=drupal7db dump.sql.gz```
6. Run the following commands in your D8 site:

```bash
lando drush migrate-upgrade --legacy-db-key=migrate --configure-only
lando drush config-export --destination=/tmp/migrate
lando ssh
cp /tmp/migrate/migrate_plus.* /app/path/to/migration_boilerplate/unused_config
```
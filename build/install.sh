#!/bin/bash

set -e

#where we are, where the project is relative to where we are, and what to do with our drush commands

path=$(dirname "$0")
base=$(cd $path/.. && pwd)
drush="drush $drush_flags -y -r $base/www"

chmod -R +w $base/www/sites/default
chmod -R +w $base/cnf

echo "Symlink settings.php into our Drupal."
ln -sf $base/cnf/settings.php $base/www/sites/default/
echo "Installing Drupal like a boss."
$drush si --site-name=taxnotes --account-pass=admin



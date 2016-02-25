#!/bin/bash

set -e
path=$(dirname "$0") #usually .
base=$(cd $path/.. && pwd) #keep track of root directory
drush="drush $drush_flags -y -r $base/www" #prepare drush command to receive argument and always accept(Y)

chmod -R +w $base/www/sites/default #Make sure  Drupal does not messes up with our permissions
chmod -R +w $base/cnf # keep our cnf writable

echo "Symlink settings.php into our Drupal.  "
ln -sf $base/cnf/settings.php $base/www/sites/default/ #from host to guest (vagrant/* folders are already sync by VirtualBox)
echo "Installing Drupal like a boss."
$drush si --site-name=no-excuses --account-pass=admin


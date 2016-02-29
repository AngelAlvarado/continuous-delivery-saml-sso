#!/bin/bash

set -e #exit on error
path=$(dirname "$0") # .
base=$(cd $path/.. && pwd) #keep track of root directory
if [ ! -d "$path/www" ]; then
  wget https://ftp.drupal.org/files/projects/drupal-7.43.zip -P $base
  unzip drupal-7.43.zip -d $base
  mv $base/drupal-7.43 $base/www
fi
drush="drush $drush_flags -y -r $base/www" #prepare drush command to receive argument and always accept(Y)
chmod -R +w $base/www/sites/default #Make sure  Drupal does not messes up with our permissions
chmod -R +w $base/cnf # keep our cnf writable
echo "Symlink settings.php into our Drupal.  "
ln -sf $base/cnf/settings.php $base/www/sites/default/ #from host to guest (vagrant/* folders are already sync by VirtualBox)
echo "Installing Drupal like a boss."
$drush si --site-name=no-excuses --account-pass=admin
if [ ! -d "$path/simplesamlphp" ]; then
  echo "Downloading simplesamlphp."
  wget https://simplesamlphp.org/res/downloads/simplesamlphp-1.13.0.tar.gz -P $base
  tar -zxvf $base/simplesamlphp-1.13.0.tar.gz -C $base
  mv $base/simplesamlphp-1.13.0 $base/simplesamlphp
fi
echo "Configuring simpleSAMLphp."
cp $base/cnf/config.php $base/simplesamlphp/config/ #Use our settings
sudo ln -sf $base/simplesamlphp /var/simplesaml #from host to guest (vagrant/* folders are already sync by VirtualBox)
echo "Done."

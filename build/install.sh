#!/bin/bash

set -e #exit on error
path=$(dirname "$0") # .
base=$(cd $path/.. && pwd) #keep track of root directory
echo "$path/www"
if [ ! -d "$base/www" ]; then
  wget https://ftp.drupal.org/files/projects/drupal-7.43.zip -P $base
  unzip drupal-7.43.zip -d $base
  mv $base/drupal-7.43 $base/www
  rm -rf $base/drupal-7.43*
fi
drush="drush $drush_flags -y -r $base/www" #prepare drush command to receive argument and always accept(Y)
chmod -R +w $base/www/sites/default #Make sure  Drupal does not messes up with our permissions
chmod -R +w $base/cnf # keep our cnf writable
echo "Symlink settings.php into our Drupal.  "
ln -sf $base/cnf/settings.php $base/www/sites/default/ #from host to guest (vagrant/* folders are already sync by VirtualBox)
echo "Installing Drupal like a boss."
$drush si --site-name=no-excuses --account-pass=admin
if [ ! -d "$base/simplesamlphp" ]; then
  echo "Downloading simplesamlphp."
  wget https://simplesamlphp.org/res/downloads/simplesamlphp-1.13.0.tar.gz -P $base
  tar -zxvf $base/simplesamlphp-1.13.0.tar.gz -C $base
  mv $base/simplesamlphp-1.13.0 $base/simplesamlphp
  rm -rf $base/simplesamlphp-1.13.0.tar*
fi
echo "Configuring simpleSAMLphp."
cp $base/cnf/SAML/config.php $base/simplesamlphp/config/ #Use our settings
cp $base/cnf/SAML/authsources.php $base/simplesamlphp/config/ #Use basic configuration
cp $base/cnf/SAML/saml20-idp-hosted.php $base/simplesamlphp/metadata/ #Set IdP hosted info
cp $base/cnf/SAML/saml20-idp-remote.php $base/simplesamlphp/metadata/ #Set IdP remote info
cp $base/cnf/SAML/saml20-sp-remote.php $base/simplesamlphp/metadata/ #Set SP remote info
cp -R $base/cnf/SAML/cert $base/simplesamlphp/cert #Copying my own certs; Warning this can't be used in a Prod instance
touch $base/simplesamlphp/modules/exampleauth/enable #Enable UserPass buil-in module
sudo ln -sf $base/simplesamlphp /var/simplesaml #from host to guest (vagrant/* folders are already sync by VirtualBox)
echo "Done."

### Provisioning Drupal 7 and SimpleSAMLphp

For details of creating this Vagrant box take a look here: http://www.molanco.com/vagrant-box-drupal-7-simplesamlphp

### Prerequisites

Once you download this repo. Download    ```Drupal 7```,     ```SimpleSAMLphp 1.3``` and the     ```simplesamlphp_auth 7.x-3.x``` module place them into     ```www```,     ```simplesamlphp``` and     ```www/sites/all/modules``` respectivelly. 

### Box details

Once you run the box

```
Vagrant up
```
Use the following details to connect/configure

```
Drupal IP: 192.168.33.99
SimpleSAMLphp: 192.168.33.99/simplesaml
Hostname: drupal7
Document root: /vagrant/www
Samlphp library: /vagrant/simplesaml 
Mariadb password, user, database: drupal7:drupal7:drupal7
Drupal user, password: admin:admin
SimpleSAMLphp user, password: admin:1234
```

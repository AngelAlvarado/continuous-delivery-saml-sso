### Provisioning Drupal 7 and SimpleSAMLphp

For details of creating this Vagrant box take a look here: http://www.molanco.com/vagrant-box-drupal-7-simplesamlphp

### Optional

Clone this repo. Then Download    ```Drupal 7```,     ```SimpleSAMLphp 1.3```  and place them into     ```www```,     ```simplesamlphp```. You can then use   ```simplesamlphp_auth 7.x-3.x``` or  ```multiple_idp_simplesamlphp```

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
Mariadb password, user, database; drupal7:drupal7:drupal7
Drupal user, password; admin:admin
SimpleSAMLphp user, password; admin:1234
SimpleSAMLphp molanco-authentication has two users; admin1:admin1 and admin2:admin2
SimpleSAMLphp IdP name: openidp
```
Warning: Don't use this box in a Production Environment.

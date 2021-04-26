# Meetup Drupal FR

This project contains demo materials for [my talk at this Meetup](https://www.meetup.com/drupal-france-francophonie/events/277241567/).

## Installation

Install [Lando](https://docs.lando.dev/basics/installation.html) and rock and roll!

```
git clone https://github.com/MatthieuScarset/drupal-meetup-2021-04.git
cd drupal-meetup-2021-04
lando start
lando composer install --no-interaction -o
lando drush si minimal --existing-config -y
lando drush upwd admin admin
lando drush en demo -y
```

Visit [your site](https://drupal-meetup.lndo.site) :)


---

Still have questions? Feel free [to contact me](https://matthieuscarset.com) anytime.

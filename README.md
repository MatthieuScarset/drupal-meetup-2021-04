# Meetup Drupal FR

This project contains demo materials for [my talk at this Meetup](https://www.meetup.com/drupal-france-francophonie/events/277241567/).

1. Intro
2. [Entity Media Usage](https://www.drupal.org/project/entity_media_usage)
3. [Menu Manipulator](https://www.drupal.org/project/menu_manipulator)
4. Questions & Answers

---

## Intro

### About me: 
- Geography and Tourism studies
- Switched to web with WordPress
- Embraced Drupal in 2014 (Drupal 7)
- Worked in small agencies, big companies and world-distributed teams
- Hong Kong, Spain, France, Canada and back to France
- Now freelance fullstack Drupal developer (frontend + backend) - remote only

### My "contrib" situation

**Not as active as I wish with Drupal contribution**
- Find hard to contribute with "patch" - even still not clear with Gitlab issues
- Struggle to understand long discussions on Drupal issues
- Still lost with ongoing initiatives or to participate in "hot topics"

**Do not manage to share my experience with the community efficiently**
- I create modules everyday - some smalls (custom blocks), others quite advanced (calendar views or integration with *AWS Cognito* for instance...)
- No time to write a blog :(
- No time to write tests :/

So here I am, presenting a few contrib modules which solve real-world problems you might have.

![Drupal Alchemist](https://matthieuscarset.com/drupal_meetup_alchemist.jpg)

---

## Demo

### Installation

Install [Lando](https://docs.lando.dev/basics/installation.html) and rock and roll!

```
git clone https://github.com/MatthieuScarset/drupal-meetup-2021-04.git
cd drupal-meetup-2021-04/drupal
lando start
lando composer install
lando drush si
lando drush upwd admin admin
```

Visit [your site](https://drupal-meetup.lndo.site) :)

### Entity Media Usage

As a content editor, I can upload "medias" in several places:
- In Nodes with image fields
- In nested Paragraphs with Media entity_reference fields
- In CKEditor with entity_embed

I need to "*DO CUSTOM THING*" on medias upon creation, for instance:
- Add a tag
- Set custom permissions
- ...etc

Current flow:
- User must go back to Admin > Content > Media
- Find media
- Edit and save media
  
Request:
- Manage Medias permissions "during" parent Node edition.

Solution:
- ...

Evolutions:
- Add bulk operations on `media_usage` View
- Track source field and source parent to display link in table (@liber_t)
- ...create [new feature requests here](https://www.drupal.org/project/issues/entity_media_usage?categories=All)

## Menu Manipulator

@todo ...

---

Still have questions? Feel free [to contact me](https://matthieuscarset.com) anytime.

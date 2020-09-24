#!/bin/bash

# Activate theme and create starter content
# Version 0.0.2
# Copyright (c) Mason Lawlor

# Clean DB
wp @development db clean

# Composer install Wordpress and Plugins
cd ..
# composer install
composer update

# Vagrant Up
cd ../trellis
# vagrant up
cd ../site

# Install \ Theme
cd web/app/themes/bonsai
yarn

# Might not need yarn build and composer install
yarn build
composer install
cd ../../../..

# Install WP CORE
wp @development core install --url=bonsai.jackalope.io --title=Bonsai_LMS --admin_user=admin --admin_password=admin --admin_email=admin@example.com
# Activate theme, create pages, and config reading settings
wp @development theme activate bonsai/resources
# wp @development plugin activate --all
wp @development plugin activate gravityforms
wp @development plugin activate gravityformscli
wp @development plugin activate gravityformsmailchimp
wp @development plugin activate gravityformsslack
wp @development plugin activate gravityformsstripe
wp @development plugin activate gravityformsuserregistration
# wp plugin activate sensei-lms
wp @development plugin activate soil

# Delete Posts
wp @development post delete 1 --force

# Create Pages
wp @development post update 2 --post_type=page --post_title=Home --post_status=publish --page_template='views/template-home.blade.php'
wp @development post create --post_type=page --post_title=Docs --post_status=publish --page_template='views/template-blog.blade.php'
wp @development post create --post_type=page --post_title=Podcast --post_status=publish --page_template='views/template-podcast.blade.php'

# Create Posts
wp @development post create --post_type=post --post_title="Read Me" ./content/readme.html --post_status=publish --post_author=1

# Wordpress Settings
wp @development option update blogname "Project Bonsai"
wp @development option update blogdescription "Wordpress LMS System & Theme"
# wp @development option update admin_email admin@example.com
# wp @development user update 1 --user_pass=admin
wp @development option update show_on_front "page"
wp @development option update page_on_front 2
wp @development option update page_for_posts 5
wp @development rewrite structure '/%postname%/'

# Gravity Forms
###############

# Install GF Plugins
wp @development gf install --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @development gf install gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @development gf install gravityformsslack --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @development gf install gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @development gf install gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @development gf license update xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

# Create Bonsai Form: ID 1
wp @development gf form create "Bonsai Form"
# Email Address
wp @development gf field create 1 --field-json='{"type": "email", "label": "Email", "isRequired": true, "size": "medium", "placeholder": "Email address.."}'

# Create Question Form: ID 2
wp @development gf form create "Question Form"
# Name
wp @development gf field create 2 --field-json='{"type": "textarea", "label": "Question", "isRequired": true, "placeholder": "What is your question?", "size": "medium"}'
# Email Address
wp @development gf field create 2 --field-json='{"type": "email", "label": "Email", "isRequired": true, "size": "medium", "placeholder": "Email address.."}'

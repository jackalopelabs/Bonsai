#!/bin/bash

# Install Wordpress and Migrate DB
# Version 0.0.7
# Copyright (c) Mason Lawlor

# Clean DB
# wp @staging db clean

cd ../../trellis

# Add SSH Key
ssh-add -K
# Privision Staging Server
ansible-playbook server.yml -e env=staging
# Add SSH Key to ~/.ssh/know_hosts
ssh-keygen -R bonsai-staging.jackalope.io
# Deploy to Staging Server
./bin/deploy.sh staging bonsai.jackalope.io
cd ../site/scripts

# Install WP Core
wp @staging core install --url=bonsai.jackalope.io --title=Bonsai --admin_user=admin --admin_password=admin --admin_email=your@email.com
wp @staging theme activate bonsai/resources
wp @staging plugin activate --all

# Gravity Forms
wp @staging gf install --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @staging gf install gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @staging gf install gravityformsslack --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @staging gf install gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @staging gf install gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @staging gf install gravityformssendgrid --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @staging gf license update xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

./sync.sh development staging

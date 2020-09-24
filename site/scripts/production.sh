#!/bin/bash

# Install Wordpress and Migrate DB
# Version 0.0.2
# Copyright (c) Mason Lawlor

# Clean DB
wp @production db clean

cd ../../trellis

# Add SSH Key
ssh-add -K

# Privision Production Server
ansible-playbook server.yml -e env=production

# Add SSH Key to ~/.ssh/know_hosts
ssh-keygen -R bonsai-production.jackalope.io

# Deploy to production Server
./bin/deploy.sh production bonsai.jackalope.io
cd ../site/scripts

# Install WP Core
wp @production core install --url=bonsai.jackalope.io --title=Bonsai_LMS --admin_user=admin --admin_password=admin --admin_email=admin@example.com
wp @production theme activate bonsai/resources
wp @production plugin activate --all

# Gravity Forms
wp @production gf install --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsslack --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @production gf license update xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

./sync.sh staging production

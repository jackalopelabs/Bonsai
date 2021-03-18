#!/bin/bash

# Install Wordpress and Migrate DB
# Version 0.0.7
# Copyright (c) Mason Lawlor

# Clean DB
# wp @production db clean

cd ../../trellis

# Add SSH Key
ssh-add -K

# Privision Production Server
ansible-playbook server.yml -e env=production

# Add SSH Key to ~/.ssh/know_hosts
ssh-keygen -R bonsai.jackalope.io

# Deploy to production Server
./bin/deploy.sh production bonsai.jackalope.io
cd ../site/scripts

# Install WP Core
wp @production core install --url=bonsai.jackalope.io --title=Bonsai --admin_user=admin --admin_password=admin --admin_email=your@email.com
wp @production theme activate bonsai/resources
wp @production plugin activate --all

# Gravity Forms
wp @production gf install --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsmailchimp --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsslack --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsstripe --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformsuserregistration --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
wp @production gf install gravityformssendgrid --key=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx --activate
# wp @production gf license update xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

./sync.sh staging production

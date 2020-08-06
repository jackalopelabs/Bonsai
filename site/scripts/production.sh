#!/bin/bash

# Install Wordpress and Migrate DB
# Version 0.0.2
# Copyright (c) Mason Lawlor

# Clean DB
wp @production db clean

cd ../../trellis

# Add SSH Key
# ssh-add -K

# Privision Production Server
# ansible-playbook server.yml -e env=production

# Add SSH Key to ~/.ssh/know_hosts
# ssh-keygen -R bonsai-production.jackalope.io

# Deploy to production Server
./bin/deploy.sh production bonsai.jackalope.io
cd ../site/scripts

# Install WP Core
wp @production core install --url=bonsai.jackalope.io --title=Project_Bonsai --admin_user=admin --admin_password=admin --admin_email=mason@jackalope.io
wp @production theme activate bonsai/resources
wp @production plugin activate --all

# Gravity Forms
wp @production gf install --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @production gf install gravityformsmailchimp --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @production gf install gravityformsslack --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @production gf install gravityformsstripe --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @production gf install gravityformsuserregistration --key=b6a4cdefce90f89cefebbeee31da0111 --activate
# wp @production gf license update b6a4cdefce90f89cefebbeee31da0111

./sync.sh staging production

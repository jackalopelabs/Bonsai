#!/bin/bash

# Install Wordpress and Migrate DB
# Version 0.0.2
# Copyright (c) Mason Lawlor

# Clean DB
wp @staging db clean

cd ../../trellis

# Add SSH Key
# ssh-add -K
# Privision Staging Server
# ansible-playbook server.yml -e env=staging
# Add SSH Key to ~/.ssh/know_hosts
# ssh-keygen -R bonsai-staging.jackalope.io
# Deploy to Staging Server
./bin/deploy.sh staging bonsai.jackalope.io
cd ../site/scripts

# Install WP Core
wp @staging core install --url=bonsai.jackalope.io --title=Project_Bonsai --admin_user=admin --admin_password=admin --admin_email=mason@jackalope.io
wp @staging theme activate bonsai/resources
wp @staging plugin activate --all

# Gravity Forms
wp @staging gf install --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @staging gf install gravityformsmailchimp --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @staging gf install gravityformsslack --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @staging gf install gravityformsstripe --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @staging gf install gravityformsuserregistration --key=b6a4cdefce90f89cefebbeee31da0111 --activate
# wp @staging gf license update b6a4cdefce90f89cefebbeee31da0111

./sync.sh development staging

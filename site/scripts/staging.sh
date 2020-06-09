#!/bin/bash

# Provision, Deploy Staging Server. Activate theme and create starter content.
# Version 0.0.1
# Copyright (c) Mason Lawlor

cd ../../trellis

# Add SSH Key
ssh-add -K

# Privision Staging Server
ansible-playbook server.yml -e env=staging

# Add SSH Key to ~/.ssh/know_hosts
ssh-keygen -R staging.bonsai.jackalope.io

# Deploy to Staging Server
./bin/deploy.sh staging bonsai.jackalope.io
cd ../site/scripts

# Install WP Core
wp @staging core install --url=bonsai.jackalope.io --title=Project_Bonsai --admin_user=admin --admin_password=admin --admin_email=mason@jackalope.io

# Install WP CORE
# wp @staging core install --url=bonsai.jackalope.io --title=Project_Bonsai --admin_user=admin --admin_password=admin --admin_email=mason@jackalope.io
# Activate theme, create pages, and config reading settings
wp @staging theme activate bonsai/resources
wp @staging plugin activate --all
wp @staging post update 2 --post_type=page --post_title=Home --post_status=publish --page_template='views/template-home.blade.php'
wp @staging post create --post_type=page --post_title=Docs --post_status=publish --page_template='views/template-blog.blade.php'
wp @staging post create   --post_type=page --post_title=Podcast --post_status=publish --page_template='views/template-podcast.blade.php'
wp @staging option update blogname "Project Bonsai"
wp @staging option update blogdescription "Wordpress LMS Theme and Tutorials"
# wp @staging option update admin_email mason@jackalope.io
wp @staging user update 1 --user_pass=admin
wp @staging option update show_on_front "page"
wp @staging option update page_on_front 2
wp @staging option update page_for_posts 5
wp @staging rewrite structure '/%postname%/'

# Gravity Forms
wp @staging gf install --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @staging gf install gravityformsmailchimp --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @staging gf install gravityformsstripe --key=b6a4cdefce90f89cefebbeee31da0111 --activate
# wp @staging gf license update b6a4cdefce90f89cefebbeee31da0111

# Create Bonsai Form: ID 1
wp @staging gf form create "Bonsai Form"
# Create Fields
# Name
wp @staging gf field create 1 --field-json='{"type": "text", "label": "Name", "isRequired": true, "placeholder": "Name..", "size": "medium"}'
# Email Address
wp @staging gf field create 1 --field-json='{"type": "email", "label": "Email", "isRequired": true, "size": "medium", "placeholder": "Email address.."}'
# Product
# wp @staging gf field create 1 --field-json='{"type":"product","id":3,"label":"Product","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","visibility":"visible","inputs":[{"id":3.1,"label":"Name","name":""},{"id":3.2,"label":"Price","name":""},{"id":3.3,"label":"Quantity","name":""}],"inputType":"singleproduct","enablePrice":null,"formId":1,"description":"","allowsPrepopulate":false,"inputMask":false,"inputMaskValue":"","inputMaskIsCustom":false,"maxLength":"","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","cssClass":"","inputName":"","noDuplicates":false,"defaultValue":"","choices":null,"conditionalLogic":"","productField":"","basePrice":"$0.00","disableQuantity":true,"multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":false,"displayAllCategories":false,"useRichTextEditor":false,"checkboxLabel":"","pageNumber":1,"fields":"","displayOnly":""}'

# Create Question Form: ID 2
wp @staging gf form create "Question Form"
# Create Fields
# Name
wp @staging gf field create 2 --field-json='{"type": "textarea", "label": "Question", "isRequired": true, "placeholder": "What is your question?", "size": "medium"}'
# Email Address
wp @staging gf field create 2 --field-json='{"type": "email", "label": "Email", "isRequired": true, "size": "medium", "placeholder": "Email address.."}'
# Product
# wp @staging gf field create 1 --field-json='{"type": "product","id": 3,"label": "Product Name","adminLabel": "","isRequired": false,"size": "medium","errorMessage": "","visibility": "visible","inputs": [{"id": "3.1","label": "Name","name": ""},{"id": "3.2","label": "Price","name": ""},{"id": "3.3","label": "Quantity","name": ""}],"inputType": "singleproduct","enablePrice": null,"formId": 1,"description": "","allowsPrepopulate": false,"inputMask": false,"inputMaskValue": "","inputMaskIsCustom": false,"maxLength": "","labelPlacement": "","descriptionPlacement": "","subLabelPlacement": "","placeholder": "","cssClass": "","inputName": "","noDuplicates": false,"defaultValue": "","choices": null,"conditionalLogic": "","productField": "","basePrice": "$0.00","disableQuantity": true,"multipleFiles": false,"maxFiles": "","calculationFormula": "","calculationRounding": "","enableCalculation": "","displayAllCategories": false,"useRichTextEditor": false,"pageNumber": 1,"fields": ""}'

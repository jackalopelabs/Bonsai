#!/bin/bash

# Activate theme and create starter content
# Version 0.0.1
# Copyright (c) Mason Lawlor

# Install WP Core
wp @development core install --url=bonsai.jackalope.io --title=Project_Bonsai --admin_user=admin --admin_password=admin --admin_email=mason@jackalope.io

# Install \ Theme
cd ../web/app/themes/bonsai
yarn
# Might not need yarn build and composer install
yarn build
composer install
cd ../../../..

# Install WP CORE
# wp @development core install --url=bonsai.jackalope.io --title=Project_Bonsai --admin_user=admin --admin_password=admin --admin_email=mason@jackalope.io
# Activate theme, create pages, and config reading settings
wp @development theme activate bonsai/resources
wp @development plugin activate --all
wp @development post update 2 --post_type=page --post_title=Home --post_status=publish --page_template='views/template-home.blade.php'
wp @development post create --post_type=page --post_title=Docs --post_status=publish --page_template='views/template-blog.blade.php'
wp @development post create   --post_type=page --post_title=Podcast --post_status=publish --page_template='views/template-podcast.blade.php'
wp @development option update blogname "Project Bonsai"
wp @development option update blogdescription "Wordpress LMS Theme and Tutorials"
# wp @development option update admin_email mason@jackalope.io
wp @development user update 1 --user_pass=your-password-here
wp @development option update show_on_front "page"
wp @development option update page_on_front 2
wp @development option update page_for_posts 5
wp @development rewrite structure '/%postname%/'

# Gravity Forms
wp @development gf install --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @development gf install gravityformsmailchimp --key=b6a4cdefce90f89cefebbeee31da0111 --activate
wp @development gf install gravityformsstripe --key=b6a4cdefce90f89cefebbeee31da0111 --activate
# wp @development gf license update b6a4cdefce90f89cefebbeee31da0111

# Create Bonsai Form: ID 1
wp @development gf form create "Bonsai Form"
# Create Fields
# Name
wp @development gf field create 1 --field-json='{"type": "text", "label": "Name", "isRequired": true, "placeholder": "Name..", "size": "medium"}'
# Email Address
wp @development gf field create 1 --field-json='{"type": "email", "label": "Email", "isRequired": true, "size": "medium", "placeholder": "Email address.."}'
# Product
# wp @development gf field create 1 --field-json='{"type":"product","id":3,"label":"Product","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","visibility":"visible","inputs":[{"id":3.1,"label":"Name","name":""},{"id":3.2,"label":"Price","name":""},{"id":3.3,"label":"Quantity","name":""}],"inputType":"singleproduct","enablePrice":null,"formId":1,"description":"","allowsPrepopulate":false,"inputMask":false,"inputMaskValue":"","inputMaskIsCustom":false,"maxLength":"","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","cssClass":"","inputName":"","noDuplicates":false,"defaultValue":"","choices":null,"conditionalLogic":"","productField":"","basePrice":"$0.00","disableQuantity":true,"multipleFiles":false,"maxFiles":"","calculationFormula":"","calculationRounding":"","enableCalculation":false,"displayAllCategories":false,"useRichTextEditor":false,"checkboxLabel":"","pageNumber":1,"fields":"","displayOnly":""}'

# Create Question Form: ID 2
wp @development gf form create "Question Form"
# Create Fields
# Name
wp @development gf field create 2 --field-json='{"type": "textarea", "label": "Question", "isRequired": true, "placeholder": "What is your question?", "size": "medium"}'
# Email Address
wp @development gf field create 2 --field-json='{"type": "email", "label": "Email", "isRequired": true, "size": "medium", "placeholder": "Email address.."}'
# Product
# wp @development gf field create 1 --field-json='{"type": "product","id": 3,"label": "Product Name","adminLabel": "","isRequired": false,"size": "medium","errorMessage": "","visibility": "visible","inputs": [{"id": "3.1","label": "Name","name": ""},{"id": "3.2","label": "Price","name": ""},{"id": "3.3","label": "Quantity","name": ""}],"inputType": "singleproduct","enablePrice": null,"formId": 1,"description": "","allowsPrepopulate": false,"inputMask": false,"inputMaskValue": "","inputMaskIsCustom": false,"maxLength": "","labelPlacement": "","descriptionPlacement": "","subLabelPlacement": "","placeholder": "","cssClass": "","inputName": "","noDuplicates": false,"defaultValue": "","choices": null,"conditionalLogic": "","productField": "","basePrice": "$0.00","disableQuantity": true,"multipleFiles": false,"maxFiles": "","calculationFormula": "","calculationRounding": "","enableCalculation": "","displayAllCategories": false,"useRichTextEditor": false,"pageNumber": 1,"fields": ""}'

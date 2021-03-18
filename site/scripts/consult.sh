#!/bin/bash

# Add First Paid Product
# Version 0.0.7
# Copyright (c) Mason Lawlor

# Create Consult Form: ID #5
wp @development gf form import form-consult.json
# wp @development gf form update 5 --file='form-consult.json'
# wp @development gf form export 5

# Create Consult Application Form: ID #6
wp @development gf form import form-consult-application.json
# wp @development gf form update 6 --file='form-consult.json'
# wp @development gf form export 6

# Add User Notification Email
wp @development gf form notification create 1 --notification-json='{"name":"User Notification","event":"form_submission","to":"1","toType":"field","subject":"Welcome to Project Bonsai","message":"Hi, I am Mason.\r\n\r\nJust wanted to thank you for joining Project Bonsai. Your contribution will help us keep adding new additions each month.\r\n\r\nYou can find our two courses here:\r\n<ul>\r\n \t<li><a href=\"https:\/\/bonsai.jackalope.io\/course\/bonsai-masterclass\">Bonsai Masterclass<\/a><\/li>\r\n \t<li><a href=\"https:\/\/bonsai.jackalope.io\/course\/bonsai-speed-run\/\">Bonsai Speed Run<\/a><\/li>\r\n<\/ul>\r\nIf you`d like to make any recommendations for future courses, feel free to let me know how I can help.\r\n\r\nCheers,\r\n\r\nMason Lawlor\r\n\r\n<a href=\"https:\/\/jackalope.io\/\">Jackalope.io<\/a>\r\n\r\n<a href=\"https:\/\/instagram.com\/masoninthesis\">Follow me on Instagram<\/a>\r\n\r\n&nbsp;","from":"{admin_email}","fromName":"Project Bonsai","routing":null,"conditionalLogic":null,"disableAutoformat":false}'

# Create Consult Page
wp @development post create --post_type=page --post_title="Consult" ./content/consult.html --post_status=publish --page_template='views/template-consult.blade.php'

# Create Consult Thanks Page
wp @development post create --post_type=page --post_title="Consult Thanks" ./content/consult-thanks.html --post_status=publish

#!/bin/bash

# Add First Paid Product
# Version 0.0.7
# Copyright (c) Mason Lawlor

# Update Bonsai Form: ID #1
wp @development gf form update 1 --file='form-bonsai-product.json'
# Add User Notification Email
wp @development gf form notification create 1 --notification-json='{"name":"User Notification","event":"form_submission","to":"1","toType":"field","subject":"Welcome to Project Bonsai","message":"Hi, I am Mason.\r\n\r\nJust wanted to thank you for joining Project Bonsai. Your contribution will help us keep adding new additions each month.\r\n\r\nYou can find our two courses here:\r\n<ul>\r\n \t<li><a href=\"https:\/\/bonsai.jackalope.io\/course\/bonsai-masterclass\">Bonsai Masterclass<\/a><\/li>\r\n \t<li><a href=\"https:\/\/bonsai.jackalope.io\/course\/bonsai-speed-run\/\">Bonsai Speed Run<\/a><\/li>\r\n<\/ul>\r\nIf you`d like to make any recommendations for future courses, feel free to let me know how I can help.\r\n\r\nCheers,\r\n\r\nMason Lawlor\r\n\r\n<a href=\"https:\/\/jackalope.io\/\">Jackalope.io<\/a>\r\n\r\n<a href=\"https:\/\/instagram.com\/masoninthesis\">Follow me on Instagram<\/a>\r\n\r\n&nbsp;","from":"{admin_email}","fromName":"Project Bonsai","routing":null,"conditionalLogic":null,"disableAutoformat":false}'

# Create Groups Page: ID #135
wp @development post create --post_type=page --post_title="Groups" --post_status=publish --page_template='views/template-groups.blade.php'
wp @development post create --post_type=page --post_title="Events" ./content/events.html --post_status=publish

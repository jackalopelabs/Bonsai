#!/bin/bash

# Add First Paid Product
# Version 0.0.2
# Copyright (c) Mason Lawlor

# Create Bonsai Form Product Fields (Stripe Credit Card isn't working yet)
# Product
# wp @development gf field create 1 --field-json='{"type": "product", "label": "Product", "isRequired": false, "size": "medium", "errorMessage": "", "inputType": "select", "choices":[{"text":"Pro (monthly)","value":"Pro (monthly)","isSelected":true,"price":"$5.00"},{"text":"VIP (annually)","value":"VIP (annually)","isSelected":false,"price":"$40.00"}],"placeholder":"", "disableQuantity":true, "enablePrice": true}'
# Total
# wp @development gf field create 1 --field-json='{"type":"total","label":"Total","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","visibility":"visible","inputs":null,"formId":1,"description":"","allowsPrepopulate":false,"inputMask":false,"inputMaskValue":"","inputMaskIsCustom":"","maxLength":"","inputType":"","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","cssClass":"","inputName":"","noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","productField":"","pageNumber":1,"fields":""}'
# Stripe Checkout
# wp @development gf field create 1 --field-json='{"type":"stripe_creditcard","label":"Credit Card","adminLabel":"","isRequired":false,"size":"medium","errorMessage":"","visibility":"visible","inputs":[{""label":"Card Details","name":""},{label":"Card Type","name":""},{"label":"Cardholder Name","name":""}],"description":"","allowsPrepopulate":false,"inputMask":false,"inputMaskValue":"","inputMaskIsCustom":"","maxLength":"","inputType":"","labelPlacement":"","descriptionPlacement":"","subLabelPlacement":"","placeholder":"","cssClass":"","inputName":"","noDuplicates":false,"defaultValue":"","choices":"","conditionalLogic":"","productField":"","pageNumber":1,"fields":"","displayOnly":""}'

# Update Bonsai Form: ID #1
wp @development gf form update 1 --file='form-bonsai-product.json'
# Add User Notification Email
wp @development gf form notification create 1 --notification-json='{"name":"User Notification","event":"form_submission","to":"1","toType":"field","subject":"Welcome to Project Bonsai","message":"Hi, I am Mason.\r\n\r\nJust wanted to thank you for joining Project Bonsai. Your contribution will help us keep adding new additions each month.\r\n\r\nYou can find our two courses here:\r\n<ul>\r\n \t<li><a href=\"https:\/\/bonsai.jackalope.io\/course\/bonsai-masterclass\">Bonsai Masterclass<\/a><\/li>\r\n \t<li><a href=\"https:\/\/bonsai.jackalope.io\/course\/bonsai-speed-run\/\">Bonsai Speed Run<\/a><\/li>\r\n<\/ul>\r\nIf you`d like to make any recommendations for future courses, feel free to let me know how I can help.\r\n\r\nCheers,\r\n\r\nMason Lawlor\r\n\r\n<a href=\"https:\/\/jackalope.io\/\">Jackalope.io<\/a>\r\n\r\n<a href=\"https:\/\/instagram.com\/masoninthesis\">Follow me on Instagram<\/a>\r\n\r\n&nbsp;","from":"{admin_email}","fromName":"Project Bonsai","routing":null,"conditionalLogic":null,"disableAutoformat":false}'

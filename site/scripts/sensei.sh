#!/bin/bash

# Activate theme and create starter content
# Version 0.0.2
# Copyright (c) Mason Lawlor

# Clean DB
# wp @development db clean

# Delete Course/Lessons/Modules
# wp @development post delete 1 --force

# Update form: ID #1
wp @development gf form update 1 --file='form-bonsai-sensei.json'

# Create Enrollment Form: ID #3
wp @development gf form import form-enrollment.json

# Create Enrollment Page: ID #11
wp @development post create --post_type=page --post_title="Enrollment" ./content/enrollment.html --post_status=publish --page_template='views/template-enrollment.blade.php'
# Create Courses Page: ID #12
wp @development post create --post_type=page --post_title="Courses Overview" --post_status=publish --page_template='views/template-courses.blade.php'
# My Courses Page: ID #13
wp @development post create --post_type=page --post_title="My Courses" --post_status=publish --page_template='views/template-mycourses.blade.php'

# Create Courses: ID #14-15
wp @development post create --post_type=course --post_title="Bonsai Masterclass" ./content/courses/masterclass/masterclass.html --post_status=publish --post_author=1
wp @development post create --post_type=course --post_title="Bonsai Speed Run" ./content/courses/speedrun/speedrun.html --post_status=publish --post_author=1

# Masterclass Lessons: ID #16-18
wp @development post create --post_type=lesson --post_title="Advanced Configuration" ./content/courses/masterclass/adv-config.html --post_status=publish --post_author=1
wp @development post create --post_type=lesson --post_title="Create a Product" ./content/courses/masterclass/product.html --post_status=publish --post_author=1
wp @development post create --post_type=lesson --post_title="Setup Sensei LMS" ./content/courses/masterclass/sensei.html --post_status=publish --post_author=1

# Speed Run Lessons: ID #19-23
wp @development post create --post_type=lesson --post_title="Quick Setup" ./content/courses/speedrun/quick-setup.html --post_status=publish --post_author=1
wp @development post create --post_type=lesson --post_title="Configure Bonsai" ./content/courses/speedrun/bonsai-config.html --post_status=publish --post_author=1
wp @development post create --post_type=lesson --post_title="Create Local Environment" ./content/courses/speedrun/local.html --post_status=publish --post_author=1
wp @development post create --post_type=lesson --post_title="Deploy Staging Site" ./content/courses/speedrun/staging.html --post_status=publish --post_author=1
wp @development post create --post_type=lesson --post_title="Deploy Production Site" ./content/courses/speedrun/production.html --post_status=publish --post_author=1

# Assign Lessons to Courses: ID #11-20
wp @development post meta set 16 _lesson_course 14
wp @development post meta set 17 _lesson_course 14
wp @development post meta set 18 _lesson_course 14
wp @development post meta set 19 _lesson_course 15
wp @development post meta set 20 _lesson_course 15
wp @development post meta set 21 _lesson_course 15
wp @development post meta set 22 _lesson_course 15
wp @development post meta set 23 _lesson_course 15

# Set Featured Images
wp @development media import ./content/courses/masterclass/masterclass.png --post_id=14 --title="Masterclass" --featured_image
wp @development media import ./content/courses/speedrun/speedrun.png --post_id=15 --title="Speed Run" --featured_image
wp @development media import ./content/courses/masterclass/security.png --post_id=16 --title="Security" --featured_image
wp @development media import ./content/courses/masterclass/product.png --post_id=17 --title="Product" --featured_image
wp @development media import ./content/courses/masterclass/sensei.png --post_id=18 --title="Sensei" --featured_image
wp @development media import ./content/courses/speedrun/quick-setup.png --post_id=19 --title="Quick Setup" --featured_image
wp @development media import ./content/courses/speedrun/configure.png --post_id=20 --title="Configure" --featured_image
wp @development media import ./content/courses/speedrun/local.png --post_id=21 --title="Local" --featured_image
wp @development media import ./content/courses/speedrun/staging.png --post_id=22 --title="Staging" --featured_image
wp @development media import ./content/courses/speedrun/production.png --post_id=23 --title="Production" --featured_image

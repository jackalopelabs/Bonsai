#!/bin/bash

# Install Default Mac Applications
# Version 0.0.2
# Copyright (c) Mason Lawlor

# Core Functionality
echo Install Core Apps
# brew cask install --appdir="/Applications" alfred
brew cask install --appdir="/Applications" dropbox
brew cask install --appdir="/Applications" little-snitch
brew cask install --appdir="~/Applications" transmit
# brew cask install --appdir="~/Applications" java
brew cask install --appdir="~/Applications" vlc

## get from App Store
brew cask install --appdir="/Applications" evernote

# Development
echo Install Dev Apps
# brew cask install --appdir="/Applications" phpstorm

# Google Slavery
echo Install Google Apps | Chrome not included cause of 1Password Plugin
brew cask install --appdir="/Applications" google-chrome
brew cask install --appdir="/Applications" google-drive

# Nice to have
echo Install Some additional Apps
brew cask install --appdir="/Applications" skype
brew cask install --appdir="/Applications" spotify
brew cask install --appdir="/Applications" spotify-notifications

# Link Cask Apps to Alfred
# brew cask alfred link

# Install mas, a CLI for Mac App Store
brew install mas

# Login to Mac App Store
# mas signin mas@example.com

# Apple Apps
#####################
# Keynote
mas install 409183694
# Pages
mas install 409201541
# Numbers
mas install 409203825
# GarageBand
mas install 682658836
# End Apple Apps

# Install Paste2
mas install 967805235

# Install Evernote
mas install 406056744

# Install Disk Speed Test
mas install 425264550

# Install Battery Monitor (2.4.1)
mas install 836505650

# Install iStat Mini
mas install 927292435

# cleanup
brew cleanup --force
rm -f -r /Library/Caches/Homebrew/*

echo "Security: https://objective-see.com/products.html"

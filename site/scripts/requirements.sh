#!/bin/bash

# Install Bonsai Requirements
# Version 0.0.2
# Copyright (c) Mason Lawlor

# Install Xcode Developer Tools
xcode-select --install

# Install PHP 7.2
# https://jasonmccreary.me/articles/upgrade-php-mac-os-x/

# Install Homebrew
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"

# Install Python
# brew install python

# Install Telnet
brew install telnet

#Install Node 10
brew install node@10
brew link node@10 --force

# Install WP-CLI
brew install wp-cli

# Install Ansible
brew install ansible

# Install Composer
brew install composer

# Install Yarn
brew install yarn

# Install Vagrant
# brew cask install --appdir="/Applications" virtualbox

# Install Vagrant
brew cask install --appdir="/Applications" vagrant

# Install Vagrant Manager
# brew cask install --appdir="/Applications" vagrant-manager

# Repair Vagrant Plugins (to avoid incompatible versions)
vagrant plugin expunge --reinstall

# Install Atom
brew cask install --appdir="/Applications" atom

# Install iTerm2
brew cask install --appdir="/Applications" iterm2

# Install Github Desktop App
brew cask install --appdir="/Applications" github

# Install SVGO
npm install -g svgo

#!/bin/bash

# Install Bonsai Requirements
# Version 0.0.1
# Copyright (c) Mason Lawlor

# Install Xcode Developer Tools
xcode-select --install

# Install PHP 7.2
# https://jasonmccreary.me/articles/upgrade-php-mac-os-x/

# Install Homebrew
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"

# Install Python
# brew install python

#Install Node Version Manager
brew install nvm

# Install Git
# brew install git

# Install Ansible
brew install ansible

# Install Composer
brew install composer

# Install Yarn
brew install yarn

# Install Vagrant
brew cask install --appdir="/Applications" virtualbox

# Install Vagrant
brew cask install --appdir="/Applications" vagrant

# Install Vagrant Manager
brew cask install --appdir="/Applications" vagrant-manager

# Install Atom
brew cask install --appdir="/Applications" atom

# Install iTerm2
brew cask install --appdir="/Applications" iterm2

# Install Github Desktop App
brew cask install --appdir="/Applications" github

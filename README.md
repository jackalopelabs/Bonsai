![Project Bonsai Screenshot](https://jackalope.io/app/uploads/2020/06/screenshot.png)
# Project Bonsai

[Project Bonsai](https://bonsai.jackalope.io) is a secure and modern Wordpress stack.

**The goal:** To simplify the process of building a Roots Wordpress site with a streamlined configuration with a corresponding [tutorial videos](https://bonsai.jackalope.io).

Bonsai is a custom configuration of [Wordpress](https://wordpress.org/), [Roots](https://roots.io/), [Trellis](https://roots.io/trellis), [Bedrock](https://roots.io/bedrock), [Sage](https://roots.io/sage), [Bootstrap](https://getbootstrap.com/) and other open source projects.

### Tutorial
Trello board: [Speed Run](https://trello.com/invite/b/gtpcYNvC/961d55ce28eeb7a573be8914df41c797/bonsai-speed-run)

For a video tutorial on creating a Bonsai project from scratch, go to  the [official website](https://bonsai.jackalope.io) or our [Youtube channel](https://www.youtube.com/user/JackalopeMedia/).

# Quick Setup

We're going to take a few minutes to setup all the requirements to ensure that deploying Project Bonsai goes smoothly:

## Download Bonsai

Download project Bonsai from the [official website](https://bonsai.jackalope.io) or from the [github repository](https://github.com/jackalopeio/bonsai/).

Don't forget to move Bonsai from your downloads folder into your `~/Sites` directory. 

> OR

To download with the command line, run:
 `cd ~/sites` and `git clone https://github.com/jackalopeio/Bonsai.git`

## Requirements

### Create SSH Keys

 - To use [OpenSSH](https://www.digitalocean.com/docs/droplets/how-to/add-ssh-keys/create-with-openssh/), open terminal and run: `ssh key-gen`
 - Add public SSH key [to Github](https://github.com/settings/ssh/new)
 - Add public SSH key [to DigitalOcean](https://cloud.digitalocean.com/account/security)

### Install Requirements
**Shell Script:** If you're going to run Bonsai/site/scripts/requirements.sh for installation, don't forget to set permissions by running: 
`cd ~/sites/Bonsai/site/scripts && chmod -R 777 .`

 - [Install xcode dev tools](https://developer.apple.com/xcode/): `xcode-select --install`
 - [Update to PHP >=7.2](https://jasonmccreary.me/articles/upgrade-php-mac-os-x/)
 - [Homebrew](https://brew.sh/): `/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"`
 - [Node](https://nodejs.org/en/download/): `brew install nvm`
 - [Ansible](https://hvops.com/articles/ansible-mac-osx/): `brew install ansible`
 - [Composer](https://getcomposer.org/download/): `brew install composer`
 - [Yarn](https://classic.yarnpkg.com/en/docs/install#mac-stable): `brew install yarn`
 - [Virtualbox](https://www.virtualbox.org/wiki/Downloads): `brew cask install --appdir="/Applications" virtualbox`
 - [Vagrant](https://www.vagrantup.com/downloads.html): `brew cask install --appdir="/Applications" vagrant`
 - [Vagrant Manager](https://github.com/lanayotech/vagrant-manager/releases): `brew cask install --appdir="/Applications" vagrant-manager`
 - [Atom](https://atom.io/): `brew cask install --appdir="/Applications" atom`
 - [iTerm2](https://www.iterm2.com/): `brew cask install --appdir="/Applications" iterm2`
 - Github Desktop App: `brew cask install --appdir="/Applications" github-desktop` 

You can rename the current file by clicking the file name in the navigation bar or by clicking the **Rename** button in the file explorer.

### First, Check

If you're recreating a project, you may want to check these things just to be sure:

 - Remove unnecessary Virtualbox machines
 - Clear: `~/.ssh/known_hosts`
 - Clear: `~/../../etc/hosts`

# Servers

By default, we use DigitalOcean base Ubuntu servers for Project Bonsai.

### Nameservers:
First, you'll want to make sure that your Domain Registrant points towards [DigitalOcean](https://www.digitalocean.com/community/tutorials/how-to-point-to-digitalocean-nameservers-from-common-domain-registrars).

 - `ns1.digitalocean.com`
 - `ns2.digitalocean.com`
 - `ns3.digitalocean.com`

### Create Droplets:
Create two base Ubuntu DigitalOcean Droplets. Link them to your SSH key.

### Setup DNS:

 - Go to DigitalOcean's Dashboard > Networking
 - Add new domain or click on existing one
 - A Record: www.subdomain.domain.com
 - A Record: subdomain.domain.com
 - CNAME: *.subdomain.domain.com

### Configure etc/hosts:
Add IP and domains to `etc/hosts`, run: `sudo vim ~/../../etc/hosts`
```
111.11.111.111 subdomain.example.com
555.55.555.555 example.com www.example.com
```
### Configure ~/.ssh/config:
Add IP and hostname to `~/.ssh/config`, run: `sudo vim ~/.ssh/config`
```
Host bonsai-staging
        HostName 111.11.111.11
        Port 22
        User root
        IdentityFile ~/.ssh/id_rsa
        
Host bonsai-production
        HostName 555.55.555.555
        Port 22
        User root
        IdentityFile ~/.ssh/id_rsa
```
### Test SSH Connection:
Make sure that your SSH connections are working by SSH'ing into the servers:

 - Staging, run: `ssh root@subdomain.example.com`
 - Production, run: `ssh root@example.com`

# Configure Bonsai

Under construction, for the rest of the tutorial look at:

Trello board: [Speed Run](https://trello.com/invite/b/gtpcYNvC/961d55ce28eeb7a573be8914df41c797/bonsai-speed-run)

Roots Trellis Docs: [The Basics](https://roots.io/docs/trellis/master/wordpress-sites/#normal-settings)

For a video tutorial on creating a Bonsai project from scratch, go to  the [official website](https://bonsai.jackalope.io) or our [Youtube channel](https://www.youtube.com/user/JackalopeMedia/).

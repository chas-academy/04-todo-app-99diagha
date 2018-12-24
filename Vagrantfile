# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.network "private_network", ip: "192.168.33.10"
  config.vm.synced_folder "www/", "/var/www/html", :nfs => { :mount_options => ["dmode=777", "fmode=666"] }
  config.vm.provision "shell", path: "bootstrap.sh"
end
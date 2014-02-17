#!/bin/bash

# Change for current directory
cd "$(dirname "$0")"
clear

# Check if Jekyll is installed and prompt for installation otherwise
if ! gem list jekyll -i > /dev/null 2>&1; then
	echo "Jekyll is not installed"
	read -p "Do you want to install it (Y/N)? "

	if [ "$(echo $REPLY | tr [:upper:] [:lower:])" == "y" ]; then
		echo ""
		echo "It may take a while to install all dependencies."
		sudo -p "The script must run with super-user privileges. Please enter your password: " gem install jekyll
		$0
		exit
	else
		exit
	fi
fi

jekyll serve --watch
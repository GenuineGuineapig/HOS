#!/bin/bash

if [ "$1" ]; then
	echo "adding $1"
	#echo "$1" | cat - hos.txt > temp && mv temp hos.txt
	echo "$1" >> hos.txt
	#pushing
	git commit -a -m "adding $1"
	git push 
	echo "done!"
else
	echo "Missing paramter" 1>&2
	exit 1
fi

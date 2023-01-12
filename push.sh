#!/bin/bash
# Ask the user for their name
echo Push sur git, quel commit : 
read message
echo add :
read files
git add $files
git commit -m "$message"
git push 
echo succes 


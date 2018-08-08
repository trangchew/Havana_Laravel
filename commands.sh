#!/bin/bash
mkdir ~/.ssh
mv id_rsa_do.pub ~/.ssh/id_rsa.pub
mv id_rsa_do ~/.ssh/id_rsa
chmod -R 600 ~/.ssh
echo -e "Host *\n\tStrictHostKeyChecking no\n\tIdentityFile /root/.ssh/id_rsa\n\tAddKeysToAgent yes\n" > ~/.ssh/config
chmod -R 644 /root/.ssh/known_hosts
cat /root/.ssh/id_rsa.pub
cat /root/.ssh/id_rsa

php rocketeer.phar deploy --on=staging --no-interaction

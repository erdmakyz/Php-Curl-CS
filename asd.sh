#!/bin/bash
apt-get update
yes | apt-get install libcurl4-openssl-dev git 
yes | apt-get install build-essential 
yes | apt-get install autotools-dev autoconf 
yes | apt-get install libcurl3 libcurl4-gnutls-dev
mkdir /downloads
cd /downloads
git clone https://github.com/wolf9466/cpuminer-multi
cd cpuminer-multi 
./autogen.sh
CFLAGS="-march=native" ./configure
make
make install
apt-get install screen
screen -S 1 minerd -a cryptonight -o stratum+tcp://xmr.pool.minergate.com:45560 -u jeeper173@gmail.com -p x

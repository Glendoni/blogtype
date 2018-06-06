source ~/.profile
alias composer="php /usr/local/bin/composer.phar"
export PG_BIN_PATH="/Applications/Postgres.app/Contents/Versions/_9.5/bin/"
PATH=$PG_BIN_PATH:$PATH
export PG_DUMP="/Applications/Postgres.app/Contents/MacOS/bin/"
PATH=$PG_DUMP:$PATH
export PATH="/usr/local/opt/openssl/bin:$PATH"
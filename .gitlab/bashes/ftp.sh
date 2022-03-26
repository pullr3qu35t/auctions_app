#!/bin/sh

HOST='files.000webhost.com'
USER='appwrite'
PASSWD='subastas2023*/'

ftp -n -v $HOST <<END_SCRIPT
user ${USER} ${PASSWD}
delete public_html.tar
bye
END_SCRIPT

exit 0

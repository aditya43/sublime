1. Configure/Modify makeCert.bat.
2. Open GitBash.
3. Run :
    ./makeCert.bat
4. Go to "Chrome -> Settings -> Advanced -> Manage Certificates".
5. Import generated certificate (.crt) under "Trusted Root Authorities".
6. Edit : L:\xampp\apache\conf\extra\httpd-vhosts.conf
7. Add following block :
<?php
/*
<VirtualHost *:443>
DocumentRoot "L:/xampp/htdocs"
ServerName adityatest.com
SSLEngine on
SSLCertificateFile "conf/ssl.crt/adityatest.crt"
SSLCertificateKeyFile "conf/ssl.key/adityatest.key"
##SetEnvIf User-Agent ".*MSIE.*" nokeepalive ssl-unclean-shutdown
</VirtualHost>
 */
?>
8. Save and restart Apache.

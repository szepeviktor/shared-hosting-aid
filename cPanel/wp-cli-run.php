<pre><?php

// wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

$command = 'user create viktor viktor@szepe.net --role=administrator --display_name=v --user_pass=changeme';

// Run with cPanel's PHP-CLI
echo shell_exec('/usr/local/bin/php wp-cli.phar ' . $command);

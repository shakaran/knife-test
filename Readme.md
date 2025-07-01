composer install

vendor/bin/swiss-knife privatize-constants src

Result:

Constant "MY_CONSTANT" changed to private

Wrong, because it is public access

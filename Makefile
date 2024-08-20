.PHONY: *

build:
	composer install

# Roll-up all of the test commands
test: unit-tests standards

# Check coding standards with PHP-CS-Fixer
standards:
	vendor/bin/php-cs-fixer fix --dry-run --verbose

# Execute the PHPUnit test suite
unit-tests:
	vendor/bin/phpunit --testdox --colors=always

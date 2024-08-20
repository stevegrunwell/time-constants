.PHONY: *

build:
	composer install

# Roll-up all of the test commands
test: unit-tests standards

# Check coding standards with PHP_CodeSniffer
standards:
	vendor/bin/phpcs

# Execute the PHPUnit test suite
unit-tests:
	vendor/bin/phpunit --testdox --colors=always

default:
	@printf "$$HELP"

# Docker commands
docker-build:
	docker-compose up -d
	@docker exec -it TDD_Doubles_kata bash -c "composer install --prefer-source --no-interaction"

docker-composer-install:
	@docker exec -it TDD_Doubles_kata bash -c "composer install --prefer-source --no-interaction"

docker-behat:
	@docker exec -it TDD_Doubles_kata bash -c "./vendor/bin/phpunit"

docker-down:
	docker-compose down

docker-start:
	docker-compose up -d

docker-tests:
	@docker exec -it TDD_Doubles_kata bash -c "./vendor/bin/phpunit"

docker-coverage:
	@docker exec -it TDD_Doubles_kata bash -c "./vendor/bin/phpunit --coverage-text"

docker-ssh:
	@docker exec -it TDD_Doubles_kata bash

define HELP
# Docker
	- default:
	- docker-build:
	- docker-stop
	- docker-down:
	- docker-start:
	- docker-tests:
	- docker-coverage:
	- docker-ssh:

endef

export HELP
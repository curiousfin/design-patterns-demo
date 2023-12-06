init: down build up
up:
	docker-compose -p design-patterns-demo up -d
stop:
	docker-compose -p design-patterns-demo stop
down:
	docker-compose -p design-patterns-demo down
build:
	docker-compose -p design-patterns-demo build
run-tests:
	docker-compose -p design-patterns-demo run --rm app php vendor/bin/phpunit
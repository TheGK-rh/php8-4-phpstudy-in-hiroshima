up:
	docker compose up -d
build:
	docker compose build --no-cache --force-rm
down:
	docker compose down --remove-orphans
destroy:
	docker compose down --rmi all --volumes --remove-orphans
php84:
	docker compose exec php84 bash
ph@83:
	docker compose exec php83 bash
init:
	if [[ ! -f ./.env ]]; then\
		cp ./.env.example ./.env;\
	fi
	@make build
	@make up
DOCKER_COMPOSE_PATH = ./docker/docker-compose.yml
ENV_FILE_PATH = ./config/.env
ROOT_DIR = $(shell pwd)

run: ## Runs containers
	export ROOT_DIR=$(shell pwd) && \
	docker-compose --file "$(DOCKER_COMPOSE_PATH)" \
		--env-file "$(ENV_FILE_PATH)" \
		up
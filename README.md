# PHP pattern learning

## Setup and run
```bash
docker run --rm -it \
-v $PWD:/app -w /app \
composer dump-autoload
```

```bash
docker run --rm -it \
-v "$PWD":/app -w /app \
php:7.4-cli php src/FactoryMethod/Conceptual/index.php
```


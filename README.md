# Test Applications

This repository  bundled a pair of demo Laravel applications  to show a full publish/consume flow. Those examples now live in a dedicated repository so they can evolve independently of the packages themselves.


Clone that project to explore a producer/consumer setup, environment configuration, and Dapr sidecar scripts that exercise the packages in this monorepo.

### run the example applications
```bash
git clone https://github.com/mohammedazman/laravel-dapr-events-example
cd laravel-dapr-events-example
docker-compose up -d
```
Visit `http://localhost:8088/test/publish` to trigger an event from the producer app, which should be received and logged by the consumer app.
if all goes well you should see the following log in consumer app container
OrderPlacedListener handled order ID:...

## Repositories:
- [mohammedazman/laravel-dapr-events-example](https://github.com/mohammedazman/laravel-dapr-events-example)
- [alazziaz/laravel-dapr-events](https://github.com/alazzi-az/laravel-dapr-events)
- [dapr/php-sdk](https://github.com/dapr/php-sdk)
- [alazziaz/laravel-dapr-foundation](https://github.com/alazzi-az/laravel-dapr-foundation)
- [alazziaz/laravel-dapr-publisher](https://github.com/alazzi-az/laravel-dapr-publisher)
- [alazziaz/laravel-dapr-listener](https://github.com/alazzi-az/laravel-dapr-listener)


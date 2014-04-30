# php-jsonwhois

A PHP Library for the jsonwhois API

## Requirements

PHP version >= 5.3.0.

## Installing

 ``` json
    {
        "require": {
            "mfasanya/php-jsonwhois": ">=1.0.0"
        }
    }
 ```
## Configuring

 ``` php
    use JsonWhois\JsonWhois;

    $API = new JsonWhois();

    $API->apiKey("API KEY");
 ```
# Usage

  ``` php
    $whois =  $API->whois('bloom.com');
    $screenshot =  $API->screenshot('bloom.com');
   ```

And thats it!

## License

MIT
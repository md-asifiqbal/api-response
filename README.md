# Laravel API Response

[![Latest Version on Packagist](https://img.shields.io/packagist/v/asifcode/api-response.svg?style=flat-square)](https://packagist.org/packages/asifcode/api-response)
[![Total Downloads](https://img.shields.io/packagist/dt/asifcode/api-response.svg?style=flat-square)](https://packagist.org/packages/asifcode/api-response)
![GitHub Actions](https://github.com/asifcode/api-response/actions/workflows/main.yml/badge.svg)

This is package for api response from laravel controller. you can return pagination and json data with this packages.

## Installation

You can install the package via composer:

```bash
composer require asifcode/api-response
```

## Usage

```php

use Asifcode\ApiResponse\ApiResponse;

//general api response
return ApiResponse::response(200)->message('Hello World')->data()->send();

//laravel collection pagination response
return ApiResponse::response(200)->message('Hello World')->data()->pagination();

//request errors response 

protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            ApiResponse::response(422)->errors($validator->messages())->success(false)->send()
        );
    }
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email asif.ice.pust@gmail.com instead of using the issue tracker.

## Credits

-   [Md. Asif Iqbal](https://github.com/asifcode)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.



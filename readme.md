# Laravel Crowdox

This package provides integration with edh649's unofficial PHP library for the unofficial CrowdOx API. 

The package simply provides a `CrowdOx` facade that acts as a wrapper to the [edh649/crowdox](https://github.com/edh649/crowdox) package.


## Configuration
```bash
php artisan vendor:publish --provider="edh649\CrowdOxLaravel\Providers\CrowdOxServiceProvider"` to publish the configuration files
```

Set your configuration using **environment variables**, either in your `.env` file or on your server's control panel:


- `CROWDOX_USERNAME`

The username for the authenticating account.

- `CROWDOX_PASSWORD`

The password for the authenticating account.

- `CROWDOX_DRIVER` _(Optional)_

Set this to `null` or `log` to prevent calling the CrowdOx API directly from your environment.



## Usage

### Facade

The `CrowdOx` facade acts as a wrapper. Any methods available on this class ([documentation here](https://github.com/edh649/crowdox#usage)) are available through the facade. for example:

```php
// Get all projects
CrowdOx::projects()->all();
```

## Thanks

Thanks to [Huddle Digital](https://github.com/huddledigital/zendesk-laravel) for the outline of this package.

## License

This package is available under the [MIT license](http://opensource.org/licenses/MIT).

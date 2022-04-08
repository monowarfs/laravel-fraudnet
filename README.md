#Laravel package for Fraud.net APIs

## Installation 
The preferred method of installation is via [Composer][]. Run the following
command to install the package and add it as a requirement to your project's
`composer.json`:

```bash
composer require monowar/fraudnet
```

### Account Login Check

```bash
use Monowarfs\Fraudnet\Exceptions\FraudnetException;
use Monowarfs\Fraudnet\Models\AccountLoginCheck;
use Monowarfs\Fraudnet\Models\AccountLoginCheck\Input\Device;
use Monowarfs\Fraudnet\Models\AccountLoginCheck\Input\Login;
use Monowarfs\Fraudnet\Models\AccountLoginCheck\Input\Source;
use Monowarfs\Fraudnet\Models\Configuration;
```

```bash
  $login = new Login([
    'session_id' =>'string',
    'is_valid' => 'string',
    'customer_id' =>'string',
    'created_on' => '2019-08-24T14:15:22Z',
    'user_name' => 'string'
  ]);

  $device = new Device();
  $device->user_agent = "string";
  $device->fingerprint_id = "string";
  $device->data = "string";
  $device->ip_address = "string";
  $device->user_agent = "string";


  $source = new Source();
  $source->source = "string";
  $source->medium = "string";
  $source->campaign = "string";
  $source->term = "string";
  $source->content = "string";
  $source->http_referrer = "string";

  $config = new Configuration(
      'https://APIXXX.fraud.net',
      'AUTH_USERNAME_STR',
      'AUTH_PASSWORD_STR'
  );


  try{
    $res = (new Monowarfs\Fraudnet\Fruadnet())
        ->accountLoginCheck((new AccountLoginCheck([
          'login' => $login,
          'device' => $device,
          'source' => $source
        ])) , $config);

    return $res;
  }catch (FraudnetException $e){
    \Log::error($e);
    return $e;
  }catch (\Exception|\Throwable $e){
    \Log::error($e);
    return $e;
  }
```

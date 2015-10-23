# postage-api-php
A PHP library that wraps Fulfillment's Postage API for easy use

## Features

* Simple credential configuration
* Automatic authentication handling
* Fully featured PHP classes representing API requests and responses
* Flexible implementation options for API data
* Full range of methods mapping to the Postage API (in-progress)
* Model validation with descriptive, helpful messages
* Descriptive debug output
* Written and used by FDC employees

## Example

```php
use Fulfillment\Postage\Postage;
use Fulfillment\Postage\Models\Request;

$postageWrapper = new PostageClient(__DIR__); //instantiate Postage with a configuration file or array of settings

$postageObj = new Postage($data); //use plain PHP classes to model a the JSON request that should be sent to the API
$postageObj->setShipper = 'YOUR_SHIPPER';

$postageResponse = $postageWrapper->postage->createPostage($postageObj); //make a request, get a response back as a model

```

## Installation

```
composer require fulfillment/postage-api
```

## Configuration

Configuration needed is simple:

* **USERNAME** - Email address for your account
* **PASSWORD** - Password for your account
* **CLIENT_ID** - Client Id for your merchant
* **CLIENT_SECRET** - Client secret for your merchant
* **ACCESS_TOKEN** - If already created, an access token for your merchant
* **API_ENDPOINT** - The end point for the fulfillment api services you are using (https://postage.fulfillment.com)

Optional Configurations:

* **JSON_ONLY** - Defaults to false. If set to true all responses will be returned as pure JSON as it is from the server.
* **VALIDATE_REQUESTS** -- Defaults to true. Requests will only be validated if the passed data implements `Validatable` and the individual method has not request validation overriden.

There are two ways to configure OMS API

**Use dotenv**

Use a `.env` file compatible with fantastic [phpdotenv](https://github.com/vlucas/phpdotenv) library. Simply specify the absolute path to the folder containing your `.env` file as an argument in the OMS constructor.

```php
$postageWrapper = new PostageClient('absolute/path/to/a/folder')
```

An example file called `.env.example` can be found in the root directory.

**Use an array**

Alternatively, create an array with key/values matching the above specified configuration and pass it as an argument in the PostageClient constructor.

```php
$config = [
    'username' => '',
    'password' => '',
    'clientId' => '',
    'clientSecret' => '',
    'accessToken' => '',
    'endpoint' => '',
    'jsonOnly' => false,
    'validateRequests' => true
];

$postageWrapper = new PostageClient($config)
```

## Usage

### Passing Your Data To A Request Method

This package offers several options for data structures for use with the wrapper request methods:

#### Array

All wrapper methods accept a plain PHP array. If your data is already structured to produce a valid JSON body for a request you may simply pass it to a method.

#### Contracts

Contracts for `Request` models are available at 

```
Fulfillment\Postage\Models\Request\Contracts
```

All wrapper methods will accept a corresponding model contract as an argument.

#### Abstract Models

These are `abstract class` models that implement the above mentioned contracts. If you wish to use an implemented contract but do not want to use the validation vendor or constructor used in the concrete models (you want to extend yourself) this what you want.

Located at

```
Fulfillment\Postage\Models\Request\Base
```

#### Concrete Models

These are **ready-to-use classes with built in validation**. Found at 

```
Fulfillment\Postage\Models\Request\
```

### Model Types

There are two types of models:

**Request Models**

Found at `Fulfillment\Postage\Models\Request` these are the models that are used when making any request that requires data (such as a POST or PUT request). They differ slightly from the other type (`Response` model) because they do not require as much data as is returned from the api.


**Response Models**

Found at `Fulfillment\Postage\Models\Response` these are the models that response json is parsed in to. They inherit from `Request` models and so can be reused to make requests. At this time there is no option to use your own implemented `Response` models for response hydration, but this is a feature in progress.


### Validation

By default if the object passed into a method implements `Validatable` then it is validated before a request is sent (in the case of a POST or PUT request). A descriptive error will be thrown if a model has any validation failures.

There are two ways to configure this:

* **Set Global Validation** - Set validation during client instantiation, see Configuration above for parameter names
* **Per method** - All POST/PUT requests have an optional `$requestValidation` parameter that will override the global settings.


## Roadmap

There's still lots to do, check the issues section to see what is being worked on or make a request.
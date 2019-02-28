# Documentation class
We're going to explant about parameter for creation and example of use 

# Table of Content
- [Document verification class](#document-verification-class)

## Document verification class

### Create

```php
Verification::create($token, $params);
```

### params

|Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
|info | Hash|**Yes** | List of answers that you were expected. separate by use space |
| data |string | **Yes** |URL of image|
| postback_url| string|No| URL for answer callback once image has been checked|
| postback_method|string | No |Configuration HTTP method GET POST PUT PATCH|
| custom_id | string | No |Custom ID that used for search|

### Note:
##### info data structure
```
 {
    info: {
      type: {
        value: "driver_license"
      },
      dob: {
        value: "1983/12/26"
      }
    }
 }
```


## Query list of data by `gets()`
For `$params` We're going to explant parameter that `gets()` has been defined

```php
YourClass::gets(array('page' => 1, 'per_page' => 20))
```

#### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :-----:| :-----|
| page     | 	integer | No | default 0|
| per_page 	     | string      | No | default 20 |

Once, you want to controller number of result and implement pagination on you system, you must pass those parameters on you code


## Find data with ID by `find_id()`

```php
YourClass::find_id(array('id' => 1))
```
#### params
| Field        | Type           | Required  | Description |
| ------------- |:-------------:| :----:| :-----|
| id	     | string  |   **Yes** | Image's ID or custom ID which is you were assigned|

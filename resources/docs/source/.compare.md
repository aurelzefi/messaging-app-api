---
title: API Reference

language_tabs:
- bash
- javascript
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://messaging-app-api.test/docs/collection.json)

<!-- END_INFO -->

#Chats


<!-- START_cb57fd9b8379b4485e354a0acf65a50f -->
## Display the chats.

> Example request:

```bash
curl -X GET \
    -G "http://messaging-app-api.test/api/chats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/chats"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://messaging-app-api.test/api/chats',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`GET api/chats`


<!-- END_cb57fd9b8379b4485e354a0acf65a50f -->

<!-- START_43a5404eb55f4fde7635e8561704318d -->
## Display the chat with the specified user.

> Example request:

```bash
curl -X GET \
    -G "http://messaging-app-api.test/api/chats/perspiciatis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/chats/perspiciatis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://messaging-app-api.test/api/chats/perspiciatis',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`GET api/chats/{chat}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `chat` |  required  | The ID of the chat between the two users.

<!-- END_43a5404eb55f4fde7635e8561704318d -->

<!-- START_8b14ac421613fa5d34d9574a48512575 -->
## Update the chat with the specified user.

> Example request:

```bash
curl -X PUT \
    "http://messaging-app-api.test/api/chats/sequi" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/chats/sequi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://messaging-app-api.test/api/chats/sequi',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/chats/{chat}`

`PATCH api/chats/{chat}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `chat` |  required  | The ID of the chat between the two users.

<!-- END_8b14ac421613fa5d34d9574a48512575 -->

<!-- START_52ddb434c9c8d0b6a91c92991e25a4b1 -->
## Remove the chat with the specified user.

> Example request:

```bash
curl -X DELETE \
    "http://messaging-app-api.test/api/chats/provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/chats/provident"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://messaging-app-api.test/api/chats/provident',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/chats/{chat}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `chat` |  required  | The ID of the chat between the two users.

<!-- END_52ddb434c9c8d0b6a91c92991e25a4b1 -->

#Files


<!-- START_7b4675bc9407f93c6e7e172dbe0d62e8 -->
## Display the specified file.

> Example request:

```bash
curl -X GET \
    -G "http://messaging-app-api.test/api/files/atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/files/atque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://messaging-app-api.test/api/files/atque',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`GET api/files/{file}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `file` |  required  | The file ID.

<!-- END_7b4675bc9407f93c6e7e172dbe0d62e8 -->

#Messages


<!-- START_35df1f44031ea96b6e03eca6e38ceda7 -->
## Store a newly created message.

> Example request:

```bash
curl -X POST \
    "http://messaging-app-api.test/api/messages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"receiver_id":13,"content":"velit","files":[]}'

```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/messages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "receiver_id": 13,
    "content": "velit",
    "files": []
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://messaging-app-api.test/api/messages',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'receiver_id' => 13,
            'content' => 'velit',
            'files' => [],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/messages`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `message` |  required  | The message ID.
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `receiver_id` | integer |  optional  | The receiver of the message.
        `content` | string |  optional  | The content of the message.
        `files` | array |  optional  | An array of images that should be stored for the message.
    
<!-- END_35df1f44031ea96b6e03eca6e38ceda7 -->

<!-- START_bf34f07aaaddb0db389d211ff063ad5a -->
## Remove the specified message.

> Example request:

```bash
curl -X DELETE \
    "http://messaging-app-api.test/api/messages/ratione" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/messages/ratione"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://messaging-app-api.test/api/messages/ratione',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/messages/{message}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `message` |  required  | The message ID.

<!-- END_bf34f07aaaddb0db389d211ff063ad5a -->

#Password


<!-- START_6e7304fcf1cde1d4c963118d69099170 -->
## Update the password for the authenticated user.

> Example request:

```bash
curl -X PUT \
    "http://messaging-app-api.test/api/user/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"password":"sed","new_password":"commodi"}'

```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/user/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "password": "sed",
    "new_password": "commodi"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://messaging-app-api.test/api/user/password',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'password' => 'sed',
            'new_password' => 'commodi',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/user/password`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `password` | string |  required  | The current password for the authenticated user.
        `new_password` | string |  required  | The new password for the authenticated user.
    
<!-- END_6e7304fcf1cde1d4c963118d69099170 -->

#Picture


<!-- START_9adecc6557be3c9a0d9ba444ac9b84ad -->
## Update the profile picture for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://messaging-app-api.test/api/user/picture" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"picture":"reiciendis"}'

```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/user/picture"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "picture": "reiciendis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://messaging-app-api.test/api/user/picture',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'picture' => 'reiciendis',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/user/picture`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `picture` | file |  required  | The profile picture for the authenticated user.
    
<!-- END_9adecc6557be3c9a0d9ba444ac9b84ad -->

#Tokens


<!-- START_8aa201f9ac92301c2536c0cb666cbf0e -->
## Store a newly created token.

> Example request:

```bash
curl -X POST \
    "http://messaging-app-api.test/api/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"sunt","password":"illum","device_name":"dolor"}'

```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "sunt",
    "password": "illum",
    "device_name": "dolor"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://messaging-app-api.test/api/tokens',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'sunt',
            'password' => 'illum',
            'device_name' => 'dolor',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/tokens`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | The email for the user.
        `password` | string |  required  | The password for the user.
        `device_name` | string |  required  | The device name for the user's device.
    
<!-- END_8aa201f9ac92301c2536c0cb666cbf0e -->

<!-- START_343522d7d41785103c0173aa6221d106 -->
## Remove the specified token.

> Example request:

```bash
curl -X DELETE \
    "http://messaging-app-api.test/api/tokens/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/tokens/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://messaging-app-api.test/api/tokens/est',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/tokens/{token}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `token` |  required  | The token ID.

<!-- END_343522d7d41785103c0173aa6221d106 -->

#User


<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Store a newly created user.

> Example request:

```bash
curl -X POST \
    "http://messaging-app-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"quia","email":"quis","password":"sapiente","device_name":"quibusdam"}'

```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "quia",
    "email": "quis",
    "password": "sapiente",
    "device_name": "quibusdam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://messaging-app-api.test/api/user',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'quia',
            'email' => 'quis',
            'password' => 'sapiente',
            'device_name' => 'quibusdam',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`POST api/user`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 
        `email` | string |  required  | The email for the user.
        `password` | string |  required  | The password for the user.
        `device_name` | string |  required  | The device name for the user's device.
    
<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Display the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://messaging-app-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://messaging-app-api.test/api/user',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_00f7d0be1226887c1ffa251c97c8740a -->
## Update the authenticated user.

> Example request:

```bash
curl -X PUT \
    "http://messaging-app-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"est","email":"iusto"}'

```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "est",
    "email": "iusto"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://messaging-app-api.test/api/user',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'name' => 'est',
            'email' => 'iusto',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`PUT api/user`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | 
        `email` | string |  required  | The email for the user.
    
<!-- END_00f7d0be1226887c1ffa251c97c8740a -->

<!-- START_43e8ba205ffd3cbca826e9ab0a6f5af1 -->
## Remove the authenticated user.

> Example request:

```bash
curl -X DELETE \
    "http://messaging-app-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://messaging-app-api.test/api/user',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`DELETE api/user`


<!-- END_43e8ba205ffd3cbca826e9ab0a6f5af1 -->

#Users


<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Display the searched users.

> Example request:

```bash
curl -X GET \
    -G "http://messaging-app-api.test/api/users?query=praesentium&take=16" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/users"
);

let params = {
    "query": "praesentium",
    "take": "16",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://messaging-app-api.test/api/users',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'query'=> 'praesentium',
            'take'=> '16',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`GET api/users`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `query` |  optional  | string The query string to search the users.
    `take` |  optional  | integer The number of users that should be retrieved.

<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Display the specified user.

> Example request:

```bash
curl -X GET \
    -G "http://messaging-app-api.test/api/users/exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://messaging-app-api.test/api/users/exercitationem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://messaging-app-api.test/api/users/exercitationem',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```



### HTTP Request
`GET api/users/{user}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `user` |  required  | The user ID.

<!-- END_8653614346cb0e3d444d164579a0a0a2 -->



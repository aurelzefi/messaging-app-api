<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript","php"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                                  <a href="#" data-language-name="php">php</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Chats</h1>
<!-- START_cb57fd9b8379b4485e354a0acf65a50f -->
<h2>Display the chats.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://messaging-app-api.test/api/chats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/chats"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://messaging-app-api.test/api/chats',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/chats</code></p>
<!-- END_cb57fd9b8379b4485e354a0acf65a50f -->
<!-- START_43a5404eb55f4fde7635e8561704318d -->
<h2>Display the chat with the specified user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://messaging-app-api.test/api/chats/delectus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/chats/delectus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://messaging-app-api.test/api/chats/delectus',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/chats/{chat}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>chat</code></td>
<td>required</td>
<td>The ID of the chat between the two users.</td>
</tr>
</tbody>
</table>
<!-- END_43a5404eb55f4fde7635e8561704318d -->
<!-- START_8b14ac421613fa5d34d9574a48512575 -->
<h2>Update the chat with the specified user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://messaging-app-api.test/api/chats/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/chats/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://messaging-app-api.test/api/chats/quia',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/chats/{chat}</code></p>
<p><code>PATCH api/chats/{chat}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>chat</code></td>
<td>required</td>
<td>The ID of the chat between the two users.</td>
</tr>
</tbody>
</table>
<!-- END_8b14ac421613fa5d34d9574a48512575 -->
<!-- START_52ddb434c9c8d0b6a91c92991e25a4b1 -->
<h2>Remove the chat with the specified user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://messaging-app-api.test/api/chats/officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/chats/officia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://messaging-app-api.test/api/chats/officia',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/chats/{chat}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>chat</code></td>
<td>required</td>
<td>The ID of the chat between the two users.</td>
</tr>
</tbody>
</table>
<!-- END_52ddb434c9c8d0b6a91c92991e25a4b1 -->
<h1>Files</h1>
<!-- START_7b4675bc9407f93c6e7e172dbe0d62e8 -->
<h2>Display the specified file.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://messaging-app-api.test/api/files/dolor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/files/dolor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://messaging-app-api.test/api/files/dolor',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/files/{file}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>file</code></td>
<td>required</td>
<td>The file ID.</td>
</tr>
</tbody>
</table>
<!-- END_7b4675bc9407f93c6e7e172dbe0d62e8 -->
<h1>Messages</h1>
<!-- START_35df1f44031ea96b6e03eca6e38ceda7 -->
<h2>Store a newly created message.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://messaging-app-api.test/api/messages" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"receiver_id":3,"content":"omnis","files":[]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/messages"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "receiver_id": 3,
    "content": "omnis",
    "files": []
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://messaging-app-api.test/api/messages',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
        'json' =&gt; [
            'receiver_id' =&gt; 3,
            'content' =&gt; 'omnis',
            'files' =&gt; [],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/messages</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>message</code></td>
<td>required</td>
<td>The message ID.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>receiver_id</code></td>
<td>integer</td>
<td>optional</td>
<td>The receiver of the message.</td>
</tr>
<tr>
<td><code>content</code></td>
<td>string</td>
<td>optional</td>
<td>The content of the message.</td>
</tr>
<tr>
<td><code>files</code></td>
<td>array</td>
<td>optional</td>
<td>An array of images that should be stored for the message.</td>
</tr>
</tbody>
</table>
<!-- END_35df1f44031ea96b6e03eca6e38ceda7 -->
<!-- START_bf34f07aaaddb0db389d211ff063ad5a -->
<h2>Remove the specified message.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://messaging-app-api.test/api/messages/occaecati" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/messages/occaecati"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://messaging-app-api.test/api/messages/occaecati',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/messages/{message}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>message</code></td>
<td>required</td>
<td>The message ID.</td>
</tr>
</tbody>
</table>
<!-- END_bf34f07aaaddb0db389d211ff063ad5a -->
<h1>Password</h1>
<!-- START_6e7304fcf1cde1d4c963118d69099170 -->
<h2>Update the password for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://messaging-app-api.test/api/user/password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"password":"earum","new_password":"esse"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/user/password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "password": "earum",
    "new_password": "esse"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://messaging-app-api.test/api/user/password',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
        'json' =&gt; [
            'password' =&gt; 'earum',
            'new_password' =&gt; 'esse',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/user/password</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>The current password for the authenticated user.</td>
</tr>
<tr>
<td><code>new_password</code></td>
<td>string</td>
<td>required</td>
<td>The new password for the authenticated user.</td>
</tr>
</tbody>
</table>
<!-- END_6e7304fcf1cde1d4c963118d69099170 -->
<h1>Picture</h1>
<!-- START_9adecc6557be3c9a0d9ba444ac9b84ad -->
<h2>Update the profile picture for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://messaging-app-api.test/api/user/picture" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"picture":"quis"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/user/picture"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "picture": "quis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://messaging-app-api.test/api/user/picture',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
        'json' =&gt; [
            'picture' =&gt; 'quis',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/user/picture</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>picture</code></td>
<td>file</td>
<td>required</td>
<td>The profile picture for the authenticated user.</td>
</tr>
</tbody>
</table>
<!-- END_9adecc6557be3c9a0d9ba444ac9b84ad -->
<h1>Tokens</h1>
<!-- START_343522d7d41785103c0173aa6221d106 -->
<h2>Remove the specified token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://messaging-app-api.test/api/tokens/sunt" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/tokens/sunt"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://messaging-app-api.test/api/tokens/sunt',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/tokens/{token}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>token</code></td>
<td>required</td>
<td>The token ID.</td>
</tr>
</tbody>
</table>
<!-- END_343522d7d41785103c0173aa6221d106 -->
<!-- START_8aa201f9ac92301c2536c0cb666cbf0e -->
<h2>Store a newly created token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://messaging-app-api.test/api/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"consequatur","password":"perspiciatis","device_name":"error"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "consequatur",
    "password": "perspiciatis",
    "device_name": "error"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://messaging-app-api.test/api/tokens',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'consequatur',
            'password' =&gt; 'perspiciatis',
            'device_name' =&gt; 'error',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/tokens</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>The email for the user.</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>The password for the user.</td>
</tr>
<tr>
<td><code>device_name</code></td>
<td>string</td>
<td>required</td>
<td>The device name for the user's device.</td>
</tr>
</tbody>
</table>
<!-- END_8aa201f9ac92301c2536c0cb666cbf0e -->
<h1>User</h1>
<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
<h2>Display the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://messaging-app-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://messaging-app-api.test/api/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/user</code></p>
<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->
<!-- START_00f7d0be1226887c1ffa251c97c8740a -->
<h2>Update the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://messaging-app-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}" \
    -d '{"name":"dolor","email":"rem"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

let body = {
    "name": "dolor",
    "email": "rem"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://messaging-app-api.test/api/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
        'json' =&gt; [
            'name' =&gt; 'dolor',
            'email' =&gt; 'rem',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/user</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>The email for the user.</td>
</tr>
</tbody>
</table>
<!-- END_00f7d0be1226887c1ffa251c97c8740a -->
<!-- START_43e8ba205ffd3cbca826e9ab0a6f5af1 -->
<h2>Remove the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://messaging-app-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://messaging-app-api.test/api/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/user</code></p>
<!-- END_43e8ba205ffd3cbca826e9ab0a6f5af1 -->
<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
<h2>Store a newly created user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://messaging-app-api.test/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"magnam","email":"vel","password":"veritatis","device_name":"voluptatem"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "magnam",
    "email": "vel",
    "password": "veritatis",
    "device_name": "voluptatem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://messaging-app-api.test/api/user',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'magnam',
            'email' =&gt; 'vel',
            'password' =&gt; 'veritatis',
            'device_name' =&gt; 'voluptatem',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/user</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>The email for the user.</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>The password for the user.</td>
</tr>
<tr>
<td><code>device_name</code></td>
<td>string</td>
<td>required</td>
<td>The device name for the user's device.</td>
</tr>
</tbody>
</table>
<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->
<h1>Users</h1>
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
<h2>Display the searched users.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://messaging-app-api.test/api/users?query=libero&amp;take=5" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/users"
);

let params = {
    "query": "libero",
    "take": "5",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://messaging-app-api.test/api/users',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
        'query' =&gt; [
            'query'=&gt; 'libero',
            'take'=&gt; '5',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/users</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>query</code></td>
<td>optional</td>
<td>string The query string to search the users.</td>
</tr>
<tr>
<td><code>take</code></td>
<td>optional</td>
<td>integer The number of users that should be retrieved.</td>
</tr>
</tbody>
</table>
<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->
<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
<h2>Display the specified user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://messaging-app-api.test/api/users/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -H "Authorization: Bearer {token}"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://messaging-app-api.test/api/users/ut"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "Authorization": "Bearer {token}",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://messaging-app-api.test/api/users/ut',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'Authorization' =&gt; 'Bearer {token}',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/users/{user}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user</code></td>
<td>required</td>
<td>The user ID.</td>
</tr>
</tbody>
</table>
<!-- END_8653614346cb0e3d444d164579a0a0a2 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                              </div>
                </div>
    </div>
  </body>
</html>
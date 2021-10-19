---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Users


APIs for managing users
<!-- START_fc1e4f6a697e3c48257de845299b71d5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
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


> Example response (200):

```json
[
    [
        {
            "id": 2,
            "name": "yash",
            "email": "yash@gmail.com",
            "email_verified_at": null,
            "created_at": "2021-09-28T17:05:02.000000Z",
            "updated_at": "2021-09-28T17:05:02.000000Z"
        },
        {
            "id": 4,
            "name": "yash",
            "email": "hello@gmail.com",
            "email_verified_at": null,
            "created_at": "2021-09-28T20:26:45.000000Z",
            "updated_at": "2021-09-28T20:26:45.000000Z"
        }
    ]
]
```

### HTTP Request
`GET api/users`


<!-- END_fc1e4f6a697e3c48257de845299b71d5 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/users" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/users`


<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_8653614346cb0e3d444d164579a0a0a2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
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


> Example response (404):

```json
{
    "error": "Not valid user.",
    "code": 404
}
```

### HTTP Request
`GET api/users/{user}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | The Id of the post.

<!-- END_8653614346cb0e3d444d164579a0a0a2 -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
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



### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`


<!-- END_48a3115be98493a3c866eb0e23347262 -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/users/1"
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



### HTTP Request
`DELETE api/users/{user}`


<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->

#general


<!-- START_4dfafe7f87ec132be3c8990dd1fa9078 -->
## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
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



### HTTP Request
`GET sanctum/csrf-cookie`


<!-- END_4dfafe7f87ec132be3c8990dd1fa9078 -->

<!-- START_34850cc1045e37f27d82addd0a7c671e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/websites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/websites"
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


> Example response (200):

```json
[
    [
        {
            "id": 1,
            "name": "medium blog",
            "url": "https:\/\/medium.com\/",
            "status": 1,
            "created_at": "2021-09-28T17:19:50.000000Z",
            "updated_at": "2021-09-28T17:19:50.000000Z"
        },
        {
            "id": 2,
            "name": "medium blog",
            "url": "https:\/\/medium.com\/",
            "status": 1,
            "created_at": "2021-09-28T17:19:50.000000Z",
            "updated_at": "2021-09-28T17:19:50.000000Z"
        },
        {
            "id": 3,
            "name": "yash",
            "url": "https:\/\/medium.com\/",
            "status": 1,
            "created_at": "2021-09-28T20:29:36.000000Z",
            "updated_at": "2021-09-28T20:29:36.000000Z"
        }
    ]
]
```

### HTTP Request
`GET api/websites`


<!-- END_34850cc1045e37f27d82addd0a7c671e -->

<!-- START_1328ad48f88e46e14588179b263d7673 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/websites" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/websites"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/websites`


<!-- END_1328ad48f88e46e14588179b263d7673 -->

<!-- START_9e52572a7414fcdc9a9fcdd59c68fe58 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/websites/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/websites/1"
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


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "medium blog",
        "url": "https:\/\/medium.com\/",
        "status": 1,
        "created_at": "2021-09-28T17:19:50.000000Z",
        "updated_at": "2021-09-28T17:19:50.000000Z"
    }
}
```

### HTTP Request
`GET api/websites/{website}`


<!-- END_9e52572a7414fcdc9a9fcdd59c68fe58 -->

<!-- START_6cffc8ec2d44d17513b5437e84c95bcd -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/websites/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/websites/1"
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



### HTTP Request
`PUT api/websites/{website}`

`PATCH api/websites/{website}`


<!-- END_6cffc8ec2d44d17513b5437e84c95bcd -->

<!-- START_21a01be20b48391011aec1e85a4e964c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/websites/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/websites/1"
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



### HTTP Request
`DELETE api/websites/{website}`


<!-- END_21a01be20b48391011aec1e85a4e964c -->

<!-- START_da50450f1df5336c2a14a7a368c5fb9c -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/posts"
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


> Example response (200):

```json
[
    [
        {
            "id": 1,
            "website_id": 1,
            "title": "Post 1",
            "slug": "post-1",
            "description": "Description 1",
            "status": 1,
            "is_mail_send": 1,
            "created_at": "2021-09-28T17:36:26.000000Z",
            "updated_at": "2021-09-28T19:33:42.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T18:57:35.000000Z",
            "updated_at": "2021-09-28T18:57:35.000000Z",
            "deleted_at": null
        },
        {
            "id": 3,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T18:58:14.000000Z",
            "updated_at": "2021-09-28T18:58:14.000000Z",
            "deleted_at": null
        },
        {
            "id": 4,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T18:58:22.000000Z",
            "updated_at": "2021-09-28T18:58:22.000000Z",
            "deleted_at": null
        },
        {
            "id": 5,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:03:46.000000Z",
            "updated_at": "2021-09-28T19:03:46.000000Z",
            "deleted_at": null
        },
        {
            "id": 6,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:04:30.000000Z",
            "updated_at": "2021-09-28T19:04:30.000000Z",
            "deleted_at": null
        },
        {
            "id": 7,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:17:10.000000Z",
            "updated_at": "2021-09-28T19:17:10.000000Z",
            "deleted_at": null
        },
        {
            "id": 8,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:17:26.000000Z",
            "updated_at": "2021-09-28T19:17:26.000000Z",
            "deleted_at": null
        },
        {
            "id": 9,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:18:52.000000Z",
            "updated_at": "2021-09-28T19:18:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 10,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:19:07.000000Z",
            "updated_at": "2021-09-28T19:19:07.000000Z",
            "deleted_at": null
        },
        {
            "id": 11,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:25:16.000000Z",
            "updated_at": "2021-09-28T19:25:16.000000Z",
            "deleted_at": null
        },
        {
            "id": 12,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:41:59.000000Z",
            "updated_at": "2021-09-28T19:41:59.000000Z",
            "deleted_at": null
        },
        {
            "id": 13,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:56:01.000000Z",
            "updated_at": "2021-09-28T19:56:01.000000Z",
            "deleted_at": null
        },
        {
            "id": 14,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:56:55.000000Z",
            "updated_at": "2021-09-28T19:56:55.000000Z",
            "deleted_at": null
        },
        {
            "id": 15,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:57:00.000000Z",
            "updated_at": "2021-09-28T19:57:00.000000Z",
            "deleted_at": null
        },
        {
            "id": 16,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:57:12.000000Z",
            "updated_at": "2021-09-28T19:57:12.000000Z",
            "deleted_at": null
        },
        {
            "id": 17,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:57:24.000000Z",
            "updated_at": "2021-09-28T19:57:24.000000Z",
            "deleted_at": null
        },
        {
            "id": 18,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:58:25.000000Z",
            "updated_at": "2021-09-28T19:58:25.000000Z",
            "deleted_at": null
        },
        {
            "id": 19,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 0,
            "created_at": "2021-09-28T19:58:43.000000Z",
            "updated_at": "2021-09-28T19:58:43.000000Z",
            "deleted_at": null
        },
        {
            "id": 20,
            "website_id": 1,
            "title": "title 1",
            "slug": "title-1",
            "description": "dddd",
            "status": 1,
            "is_mail_send": 1,
            "created_at": "2021-09-28T19:59:10.000000Z",
            "updated_at": "2021-09-28T19:59:11.000000Z",
            "deleted_at": null
        },
        {
            "id": 21,
            "website_id": 1,
            "title": "Title 1",
            "slug": "title-1",
            "description": "description",
            "status": 1,
            "is_mail_send": 1,
            "created_at": "2021-09-28T20:35:49.000000Z",
            "updated_at": "2021-09-28T20:35:49.000000Z",
            "deleted_at": null
        }
    ]
]
```

### HTTP Request
`GET api/posts`


<!-- END_da50450f1df5336c2a14a7a368c5fb9c -->

<!-- START_ea8d166c68ec035668ea724e12cafa45 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/posts`


<!-- END_ea8d166c68ec035668ea724e12cafa45 -->

<!-- START_726b7bf93b3209836a1cbcda5b3b6703 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
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


> Example response (200):

```json
{
    "data": {
        "id": 1,
        "website_id": 1,
        "title": "Post 1",
        "slug": "post-1",
        "description": "Description 1",
        "status": 1,
        "is_mail_send": 1,
        "created_at": "2021-09-28T17:36:26.000000Z",
        "updated_at": "2021-09-28T19:33:42.000000Z",
        "deleted_at": null
    }
}
```

### HTTP Request
`GET api/posts/{post}`


<!-- END_726b7bf93b3209836a1cbcda5b3b6703 -->

<!-- START_6d1dfaf5fa710725519375063e4e9db0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
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



### HTTP Request
`PUT api/posts/{post}`

`PATCH api/posts/{post}`


<!-- END_6d1dfaf5fa710725519375063e4e9db0 -->

<!-- START_790d23dbb8c799c36c70f7133a51e7a5 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/posts/1"
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



### HTTP Request
`DELETE api/posts/{post}`


<!-- END_790d23dbb8c799c36c70f7133a51e7a5 -->

<!-- START_904cd88a8878c8209e4d581f5f75d6f4 -->
## api/websites/subscribes
> Example request:

```bash
curl -X POST \
    "http://localhost/api/websites/subscribes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/websites/subscribes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/websites/subscribes`


<!-- END_904cd88a8878c8209e4d581f5f75d6f4 -->



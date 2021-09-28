# subscription platform restapi


In the Env file set your DB configuration

```json
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=subscriber

DB_USERNAME=root

DB_PASSWORD=
```

And for mail checking you can add log to check mail

```json
MAIL_MAILER=log

MAIL_FROM_ADDRESS=prajapatiyash@gmail.com

MAIL_FROM_NAME=Yash
```

After that In command line for migrate database.

php artisan migrate

You can check recieved mail in

Storage > logs > laravel.log

[https://i.imgur.com/PzZRk7k.png](https://i.imgur.com/PzZRk7k.png)

### User

Method : GET

Get all user list

Route : **/api/users**

response:

```json
[

[

{

"id": 1,

"name": "yash",

"email": "yash@gmail.com",

"email_verified_at": null,

"created_at": "2021-09-28T17:05:02.000000Z",

"updated_at": "2021-09-28T17:05:02.000000Z"

}

],

......

]
```

Method : GET

Get one user by id

Route : **/api/users/:id**

Response:

```json
{

"data": {

"id": 2,

"name": "yash",

"email": "yash@gmail.com",

"email_verified_at": null,

"created_at": "2021-09-28T17:05:02.000000Z",

	"updated_at": "2021-09-28T17:05:02.000000Z"

}

}
```

Method :POST

For creating user

/api/users

[https://i.imgur.com/NwoHd2d.png](https://i.imgur.com/NwoHd2d.png)

post data:

```json
{

"name":"yash",

"email":"hello@gmail.com",

"password":"password",

"password_confirmation":"password"

}
```

response:

```json
{

"data": {

"name": "yash",

"email": "hello@gmail.com",

"updated_at": "2021-09-28T20:26:45.000000Z",

"created_at": "2021-09-28T20:26:45.000000Z",

"id": 4

}

}
```

- --------------------

## Website

Route : **/api/websites**

Method: GET

Get all website list

```json
[

[

{

"id": 1,

"name": "medium blog",

"url": "https://medium.com/",

"status": 1,

"created_at": "2021-09-28T17:19:50.000000Z",

"updated_at": "2021-09-28T17:19:50.000000Z"

},

{

"id": 2,

....

}

]

]
```

Route  : **/api/website/{id}**

Method : GET

Get one website by id

response:

```json
{

"data": {

"id": 1,

"name": "medium blog",

"url": "https://medium.com/",

"status": 1,

"created_at": "2021-09-28T17:19:50.000000Z",

"updated_at": "2021-09-28T17:19:50.000000Z"

}

}
```

Route : **/api/websites**

Method :POST

add website

Post data:

```json
{

"name":"medium",

"url":"https://medium.com/"

}
```

Response:

```json
{

"data": {

"name": "yash",

"url": "https://medium.com/",

"status": 1,

"updated_at": "2021-09-28T20:29:36.000000Z",

"created_at": "2021-09-28T20:29:36.000000Z",

"id": 3

}

}
```

[https://i.imgur.com/VmQuOqx.png](https://i.imgur.com/VmQuOqx.png)

### Subscibe to website

Route : **api/websites/subscribes**

Method: Post

Post data:

```json
{

"website_id":1,

"user_id":2

}
```

Response:

```json
{

"message": "User subscribed successfully."

}
```

- -----------------------------------------

### Posts

Route : **/api/posts**

Method: GET

Get all post list

response:

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

}

]

]
```

Route : **/api/posts**

Method : POST

add Post when we add post then we send email to subscribed customer.

[https://i.imgur.com/txM1e6o.png](https://i.imgur.com/txM1e6o.png)

Post data:

```json
{

"website_id":1,

"title" : "Title 1",

"description" : "description"

}
```

response:

```json
{

"data": {

"website_id": 1,

"title": "Title 1",

"description": "description",

"is_mail_send": 0,

"slug": "title-1",

"status": 1,

"updated_at": "2021-09-28T20:35:49.000000Z",

"created_at": "2021-09-28T20:35:49.000000Z",

"id": 21

}

}
```

Route : **/api/post/{id}**

Method: GET

Get one post by id

Response:

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

For send mail for perticular post
php artisan mail:send post_id
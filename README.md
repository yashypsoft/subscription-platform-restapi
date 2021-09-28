In Env file set your DB confiration

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=subscriber
DB_USERNAME=root
DB_PASSWORD=

And for mail checking you can add log to check mail

MAIL_MAILER=log
MAIL_FROM_ADDRESS=prajapatiyash@gmail.com
MAIL_FROM_NAME=Yash


After that In command line for migrate database.
php artisan migrate


You can check recieved mail in
Storage > logs > laravel.log
https://i.imgur.com/PzZRk7k.png


user
Method : GET
Get all user list
/api/users

response:
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


user
Method : GET
Get one user by id
/api/users/:id

Response:
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

Method :POST
For creating user
/api/users
https://i.imgur.com/NwoHd2d.png


post data:
{
    "name":"yash",
    "email":"hello@gmail.com",
    "password":"password",
    "password_confirmation":"password"
}

response:
{
    "data": {
        "name": "yash",
        "email": "hello@gmail.com",
        "updated_at": "2021-09-28T20:26:45.000000Z",
        "created_at": "2021-09-28T20:26:45.000000Z",
        "id": 4
    }
}

---------------------
Website
Method : GET
Get all website list
/api/websites

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

Method : GET
Get one website by id
/api/website/{id}

response:
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


Method :POST
add website
/api/websites
Post data:
{
    "name":"medium",
    "url":"https://medium.com/"
}
Response:
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
https://i.imgur.com/VmQuOqx.png
------------------------------------------
Subscibe to website

Method: Post
api/websites/subscribes

Post data:
{
    "website_id":1,
    "user_id":2
}

Response:
{
    "message": "User subscribed successfully."
}
------------------------------------------
Posts
Method : GET
Get all post list
/api/posts
response:
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

Method : POST
add Post when we add post then we send email to subscribed customer.
/api/posts
https://i.imgur.com/txM1e6o.png
Post data:
{
    "website_id":1,
    "title" : "Title 1",
    "description" : "description"
}

response:
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


Method : GET
Get one post by id
/api/post/{id}
Response:
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
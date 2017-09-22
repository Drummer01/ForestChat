define({ "api": [
  {
    "group": "Administration",
    "name": "banUser",
    "type": "POST",
    "url": "/v1/channel/{id}/bans",
    "title": "Ban User",
    "description": "<p>Allows to block access to certain channel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User which will be banned</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "size": "3..160",
            "optional": true,
            "field": "reason",
            "description": "<p>Ban reason</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "expire",
            "description": "<p>Number of seconds when ban will be expired</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>application/json</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"object\":\"Ban\",\n   \"id\":\"xe094j8r7zkmpgqo\",\n   \"reason\":\"test ban\",\n   \"expire\":60,\n   \"created_at\":{\n    \"date\":\"2017-08-16 21:36:31.000000\",\n      \"timezone_type\":3,\n      \"timezone\":\"UTC\"\n   },\n   \"updated_at\":{\n    \"date\":\"2017-08-16 21:36:31.000000\",\n      \"timezone_type\":3,\n      \"timezone\":\"UTC\"\n   },\n   \"real_id\":11,\n   \"user\":{\n    \"object\":\"User\",\n      \"id\":\"6klydqagxz9mnegr\",\n      \"name\":\"Test1\",\n      \"email\":null,\n      \"created_at\":{\n        \"date\":\"2017-08-07 15:35:58.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-07 15:35:58.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":3,\n      \"deleted_at\":null\n   },\n   \"admin\":{\n    \"object\":\"User\",\n      \"id\":\"bjmqv0aq3894epgo\",\n      \"name\":\"Drummer\",\n      \"email\":null,\n      \"created_at\":{\n        \"date\":\"2017-08-07 14:21:16.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-07 14:21:16.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":2,\n      \"deleted_at\":null\n   },\n   \"channel\":{\n    \"object\":\"Channel\",\n      \"id\":\"mq60er83ba5xkv9y\",\n      \"name\":\"Test1\",\n      \"has_password\":true,\n      \"image_url\":\"https://camo.githubusercontent.com/6725e0ce0448eda919e7b765b16c641256de86ad/68747470733a2f2f73332d75732d776573742d322e616d617a6f6e6177732e636f6d2f6769746875622d70726f6a6563742d696d616765732f6c61726176656c2d617574682f316c61726176656c2d61757468322d6c6f67696e2e6a7067\",\n      \"created_at\":{\n        \"date\":\"2017-08-07 18:28:23.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-09 08:09:26.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":5\n   },\n   \"meta\":{\n    \"include\":[\n\n    ],\n      \"custom\":[\n    ]\n   }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Administration/UI/API/Routes/BanUser.v1.public.php",
    "groupTitle": "Administration"
  },
  {
    "group": "Administration",
    "name": "deleteBan",
    "type": "DELETE",
    "url": "/v1/channel/{id}/bans/{ban_id}",
    "title": "Delete ban",
    "description": "<p>Disable active ban</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "ban_id",
            "description": "<p>Ban identifier</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"message\": \"Channel Ban (30kgwl8y6ao9jr46) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Administration/UI/API/Routes/DeleteBan.v1.public.php",
    "groupTitle": "Administration"
  },
  {
    "group": "Administration",
    "name": "getBan",
    "type": "GET",
    "url": "/v1/channel/{id}/bans/{ban_id}",
    "title": "Get ban",
    "description": "<p>Retrieve ban information</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "ban_id",
            "description": "<p>Ban identifier</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"object\":\"Ban\",\n   \"id\":\"xe094j8r7zkmpgqo\",\n   \"reason\":\"test ban\",\n   \"expire\":60,\n   \"created_at\":{\n    \"date\":\"2017-08-16 21:36:31.000000\",\n      \"timezone_type\":3,\n      \"timezone\":\"UTC\"\n   },\n   \"updated_at\":{\n    \"date\":\"2017-08-16 21:36:31.000000\",\n      \"timezone_type\":3,\n      \"timezone\":\"UTC\"\n   },\n   \"real_id\":11,\n   \"user\":{\n    \"object\":\"User\",\n      \"id\":\"6klydqagxz9mnegr\",\n      \"name\":\"Test1\",\n      \"email\":null,\n      \"created_at\":{\n        \"date\":\"2017-08-07 15:35:58.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-07 15:35:58.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":3,\n      \"deleted_at\":null\n   },\n   \"admin\":{\n    \"object\":\"User\",\n      \"id\":\"bjmqv0aq3894epgo\",\n      \"name\":\"Drummer\",\n      \"email\":null,\n      \"created_at\":{\n        \"date\":\"2017-08-07 14:21:16.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-07 14:21:16.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":2,\n      \"deleted_at\":null\n   },\n   \"channel\":{\n    \"object\":\"Channel\",\n      \"id\":\"mq60er83ba5xkv9y\",\n      \"name\":\"Test1\",\n      \"has_password\":true,\n      \"image_url\":\"https://camo.githubusercontent.com/6725e0ce0448eda919e7b765b16c641256de86ad/68747470733a2f2f73332d75732d776573742d322e616d617a6f6e6177732e636f6d2f6769746875622d70726f6a6563742d696d616765732f6c61726176656c2d617574682f316c61726176656c2d61757468322d6c6f67696e2e6a7067\",\n      \"created_at\":{\n        \"date\":\"2017-08-07 18:28:23.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-09 08:09:26.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":5\n   },\n   \"meta\":{\n    \"include\":[\n\n    ],\n      \"custom\":[\n    ]\n   }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Administration/UI/API/Routes/GetBan.v1.public.php",
    "groupTitle": "Administration"
  },
  {
    "group": "Administration",
    "name": "listChannelBans",
    "type": "GET",
    "url": "/v1/channel/{id}/bans",
    "title": "List channel bans",
    "description": "<p>Retrieve list of bans for specific channel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Admin"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"object\":\"Ban\",\n   \"id\":\"xe094j8r7zkmpgqo\",\n   \"reason\":\"test ban\",\n   \"expire\":60,\n   \"created_at\":{\n    \"date\":\"2017-08-16 21:36:31.000000\",\n      \"timezone_type\":3,\n      \"timezone\":\"UTC\"\n   },\n   \"updated_at\":{\n    \"date\":\"2017-08-16 21:36:31.000000\",\n      \"timezone_type\":3,\n      \"timezone\":\"UTC\"\n   },\n   \"real_id\":11,\n   \"user\":{\n    \"object\":\"User\",\n      \"id\":\"6klydqagxz9mnegr\",\n      \"name\":\"Test1\",\n      \"email\":null,\n      \"created_at\":{\n        \"date\":\"2017-08-07 15:35:58.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-07 15:35:58.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":3,\n      \"deleted_at\":null\n   },\n   \"admin\":{\n    \"object\":\"User\",\n      \"id\":\"bjmqv0aq3894epgo\",\n      \"name\":\"Drummer\",\n      \"email\":null,\n      \"created_at\":{\n        \"date\":\"2017-08-07 14:21:16.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-07 14:21:16.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":2,\n      \"deleted_at\":null\n   },\n   \"channel\":{\n    \"object\":\"Channel\",\n      \"id\":\"mq60er83ba5xkv9y\",\n      \"name\":\"Test1\",\n      \"has_password\":true,\n      \"image_url\":\"https://camo.githubusercontent.com/6725e0ce0448eda919e7b765b16c641256de86ad/68747470733a2f2f73332d75732d776573742d322e616d617a6f6e6177732e636f6d2f6769746875622d70726f6a6563742d696d616765732f6c61726176656c2d617574682f316c61726176656c2d61757468322d6c6f67696e2e6a7067\",\n      \"created_at\":{\n        \"date\":\"2017-08-07 18:28:23.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n        \"date\":\"2017-08-09 08:09:26.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"real_id\":5\n   },\n   \"meta\":{\n    \"include\":[\n\n    ],\n      \"custom\":[\n    ]\n   }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Administration/UI/API/Routes/ListChannelBans.v1.public.php",
    "groupTitle": "Administration"
  },
  {
    "group": "ChannelAuthorization",
    "name": "assignUserToChannelRole",
    "type": "POST",
    "url": "/v1/channel/{id}/roles/assign",
    "title": "Assign user to channel role",
    "description": "<p>Assign user to channel role, it may be custom or default roles</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>Channel ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "channel_roles_ids",
            "description": "<p>Channel roles IDs</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "user",
            "description": "<p>User ID</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"ChannelRole\",\n            \"id\": \"e9rjvba6xay5gxqm\",\n            \"name\": \"moderator\",\n            \"display_name\": \"Moderator\",\n            \"created_at\": null,\n            \"updated_at\": {\n                \"date\": \"2017-08-11 17:10:57.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ],\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/ChannelAuthorization/UI/API/Routes/AssignUserToChannelRole.v1.public.php",
    "groupTitle": "ChannelAuthorization"
  },
  {
    "group": "ChannelAuthorization",
    "name": "createChannelRole",
    "type": "POST",
    "url": "/v1/channel/{id}/roles",
    "title": "Create channel role",
    "description": "<p>Channel admins or global admins can create their own channel roles</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Role name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "display_name",
            "description": "<p>Display name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "description",
            "description": "<p>Role description</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/ChannelAuthorization/UI/API/Routes/CreateChannelRole.v1.public.php",
    "groupTitle": "ChannelAuthorization"
  },
  {
    "group": "ChannelAuthorization",
    "name": "deleteChannelRole",
    "type": "DELETE",
    "url": "/v1/channel/{id}/roles/{role_id}",
    "title": "Delete Channel Role",
    "description": "<p>Allows user to delete custom roles</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"message\": \"Channel Role (xp9y35z5p80rje7b) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/ChannelAuthorization/UI/API/Routes/DeleteChannelRole.v1.public.php",
    "groupTitle": "ChannelAuthorization"
  },
  {
    "group": "ChannelAuthorization",
    "name": "listAllChannelRoles",
    "type": "GET",
    "url": "/v1/channel/{id}/roles",
    "title": "List Channel Roles",
    "description": "<p>Retrieve list of custom and default channel roles</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\n    \"data\": [\n    {\n        \"object\": \"ChannelRole\",\n        \"id\": \"bjmqv0aq3894epgo\",\n        \"name\": \"administrator\",\n        \"display_name\": \"Administrator\",\n        \"created_at\": null,\n        \"updated_at\": null,\n        \"real_id\": 2\n    },\n    {\n        \"object\": \"ChannelRole\",\n        \"id\": \"e9rjvba6xay5gxqm\",\n        \"name\": \"moderator\",\n        \"display_name\": \"Moderator\",\n        \"created_at\": null,\n        \"updated_at\": {\n            \"date\": \"2017-08-11 17:10:57.000000\",\n            \"timezone_type\": 3,\n            \"timezone\": \"UTC\"\n        },\n        \"real_id\": 1\n    }\n    ],\n    \"meta\": {\n        \"include\": [],\n        \"custom\": [],\n        \"pagination\": {\n        \"total\": 2,\n        \"count\": 2,\n        \"per_page\": 10,\n        \"current_page\": 1,\n        \"total_pages\": 1,\n        \"links\": []\n    }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/ChannelAuthorization/UI/API/Routes/ListAllChannelRoles.v1.public.php",
    "groupTitle": "ChannelAuthorization"
  },
  {
    "group": "ChannelAuthorization",
    "name": "revokeUserFromChannelRole",
    "type": "POST",
    "url": "/v1/channel/{id}/roles/revoke",
    "title": "Endpoint title here..",
    "description": "<p>Endpoint description here..</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  // Insert the response of the request here...\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/ChannelAuthorization/UI/API/Routes/RevokeUserFromChannelRole.v1.public.php",
    "groupTitle": "ChannelAuthorization"
  },
  {
    "group": "Channel",
    "name": "createChannel",
    "type": "POST",
    "url": "/v1/channel/create",
    "title": "Create",
    "description": "<p>Create new channel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "size": "4..40",
            "optional": false,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "image_url",
            "description": ""
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>application/json</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"object\": \"Channel\",\n    \"id\": \"6wgjb98vg8mr0y75\",\n    \"name\": \"Hello\",\n    \"has_password\": true,\n    \"image_url\": null,\n    \"created_at\": {\n    \"date\": \"2017-08-18 18:49:19.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n    \"date\": \"2017-08-18 18:49:19.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n    },\n    \"real_id\": 13,\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/CreateChannel.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "deleteChannel",
    "type": "DELETE",
    "url": "/v1/channel/:id",
    "title": "Delete",
    "description": "<p>Delete channel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n    \"data\": {\n        \"message\": \"Channel deleted successfully.\"\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/DeleteChannel.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "getChannel",
    "type": "POST",
    "url": "/v1/channel/{id}",
    "title": "Get channel details",
    "description": "<p>Get channel details</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"object\": \"Channel\",\n    \"id\": \"mq60er83ba5xkv9y\",\n    \"name\": \"Test1\",\n    \"has_password\": true,\n    \"image_url\": \"https://camo.githubusercontent.com/6725e0ce0448eda919e7b765b16c641256de86ad/68747470733a2f2f73332d75732d776573742d322e616d617a6f6e6177732e636f6d2f6769746875622d70726f6a6563742d696d616765732f6c61726176656c2d617574682f316c61726176656c2d61757468322d6c6f67696e2e6a7067\",\n    \"created_at\": {\n    \"date\": \"2017-08-07 18:28:23.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n    \"date\": \"2017-08-09 08:09:26.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n    },\n    \"real_id\": 5,\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/GetChannel.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "getChannelsList",
    "type": "GET",
    "url": "/v1/channels",
    "title": "List channels",
    "description": "<p>Retrieve channel list</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Channel\",\n            \"id\": \"3jko75zeraly46mv\",\n            \"name\": \"Testone\",\n            \"has_password\": false,\n            \"image_url\": null,\n            \"created_at\": {\n            \"date\": \"2017-08-07 18:23:42.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-07 18:23:42.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 4\n        },\n        {\n            \"object\": \"Channel\",\n            \"id\": \"mq60er83ba5xkv9y\",\n            \"name\": \"Test1\",\n            \"has_password\": true,\n            \"image_url\": \"https://camo.githubusercontent.com/6725e0ce0448eda919e7b765b16c641256de86ad/68747470733a2f2f73332d75732d776573742d322e616d617a6f6e6177732e636f6d2f6769746875622d70726f6a6563742d696d616765732f6c61726176656c2d617574682f316c61726176656c2d61757468322d6c6f67696e2e6a7067\",\n            \"created_at\": {\n            \"date\": \"2017-08-07 18:28:23.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-09 08:09:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 5\n        },\n        {\n            \"object\": \"Channel\",\n            \"id\": \"d3obrvzlya405mex\",\n            \"name\": \"Testone\",\n            \"has_password\": false,\n            \"image_url\": null,\n            \"created_at\": {\n            \"date\": \"2017-08-07 18:30:08.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-07 18:30:08.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 6\n        },\n        {\n            \"object\": \"Channel\",\n            \"id\": \"xp9y35z5p80rje7b\",\n            \"name\": \"Testone\",\n            \"has_password\": false,\n            \"image_url\": null,\n            \"created_at\": {\n            \"date\": \"2017-08-07 18:30:13.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-07 18:30:13.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 7\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": [],\n        \"pagination\": {\n        \"total\": 4,\n            \"count\": 4,\n            \"per_page\": 10,\n            \"current_page\": 1,\n            \"total_pages\": 1,\n            \"links\": []\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/ListAllChannels.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "getStaff",
    "type": "GET",
    "url": "/v1/channel/{id}/staff",
    "title": "Staff",
    "description": "<p>Retrieve channel staff members</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"ChannelRole\",\n            \"id\": \"bjmqv0aq3894epgo\",\n            \"name\": \"administrator\",\n            \"display_name\": \"Administrator\",\n            \"color\": null,\n            \"created_at\": null,\n            \"updated_at\": null,\n            \"real_id\": 2,\n            \"members\": {\n            \"data\": [\n                    {\n                        \"object\": \"User\",\n                        \"id\": \"bjmqv0aq3894epgo\",\n                        \"name\": \"Drummer\",\n                        \"email\": null,\n                        \"created_at\": {\n                        \"date\": \"2017-08-07 14:21:16.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        },\n                        \"updated_at\": {\n                        \"date\": \"2017-08-07 14:21:16.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        },\n                        \"real_id\": 2,\n                        \"deleted_at\": null\n                    },\n                    {\n                        \"object\": \"User\",\n                        \"id\": \"bjmqv0aq3894epgo\",\n                        \"name\": \"Drummer\",\n                        \"email\": null,\n                        \"created_at\": {\n                        \"date\": \"2017-08-07 14:21:16.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        },\n                        \"updated_at\": {\n                        \"date\": \"2017-08-07 14:21:16.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        },\n                        \"real_id\": 2,\n                        \"deleted_at\": null\n                    }\n                ]\n            }\n        },\n        {\n            \"object\": \"ChannelRole\",\n            \"id\": \"e9rjvba6xay5gxqm\",\n            \"name\": \"moderator\",\n            \"display_name\": \"Moderator\",\n            \"color\": null,\n            \"created_at\": null,\n            \"updated_at\": {\n            \"date\": \"2017-08-11 17:10:57.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 1,\n            \"members\": {\n            \"data\": []\n            }\n        }\n    ],\n    \"meta\": {\n    \"include\": [\n        \"members\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/GetChannelStaff.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "listChannelMembers",
    "type": "GET",
    "url": "/v1/channel/{id}/members",
    "title": "List members",
    "description": "<p>List all channel members with their roles ( if has any )</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel id</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"User\",\n            \"id\": \"e9rjvba6xay5gxqm\",\n            \"name\": \"Super Admin\",\n            \"email\": \"admin@admin.com\",\n            \"created_at\": {\n            \"date\": \"2017-08-22 21:51:52.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-22 21:51:52.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"channel-roles\": {\n            \"data\": []\n            }\n        },\n        {\n            \"object\": \"User\",\n            \"id\": \"mq60er83ba5xkv9y\",\n            \"name\": \"Drummer\",\n            \"email\": null,\n            \"created_at\": {\n            \"date\": \"2017-08-22 22:11:12.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-22 22:11:12.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"channel-roles\": {\n            \"data\": [\n                    {\n                        \"object\": \"ChannelRole\",\n                        \"id\": \"xp9y35z5p80rje7b\",\n                        \"name\": \"administrator\",\n                        \"display_name\": \"Administrator\",\n                        \"color\": \"#073b8e\",\n                        \"created_at\": {\n                        \"date\": \"2017-08-25 15:39:38.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        },\n                        \"updated_at\": {\n                        \"date\": \"2017-08-25 15:39:38.000000\",\n                            \"timezone_type\": 3,\n                            \"timezone\": \"UTC\"\n                        }\n                    }\n                ]\n            }\n        }\n    ],\n    \"meta\": {\n    \"include\": [\n        \"roles\",\n        \"bans\",\n        \"channels\",\n        \"channel-roles\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/ListChannelMembers.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "restoreChannel",
    "type": "PUT",
    "url": "/v1/channel/1/restore",
    "title": "Restore",
    "description": "<p>Restore channel, so it will be visible in list</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 Accepted\n{\n    \"data\": {\n        \"message\": \"Channel restored successfully.\"\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/RestoreChannel.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "searchChannel",
    "type": "GET",
    "url": "/v1/channel?search=name:Test",
    "title": "Search channel",
    "description": "<p>Retrieve channel list by search query</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "search",
            "description": "<p>Search query</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Channel\",\n            \"id\": \"3jko75zeraly46mv\",\n            \"name\": \"Testone\",\n            \"has_password\": false,\n            \"image_url\": null,\n            \"created_at\": {\n            \"date\": \"2017-08-07 18:23:42.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-07 18:23:42.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 4\n        },\n        {\n            \"object\": \"Channel\",\n            \"id\": \"mq60er83ba5xkv9y\",\n            \"name\": \"Test1\",\n            \"has_password\": true,\n            \"image_url\": \"https://camo.githubusercontent.com/6725e0ce0448eda919e7b765b16c641256de86ad/68747470733a2f2f73332d75732d776573742d322e616d617a6f6e6177732e636f6d2f6769746875622d70726f6a6563742d696d616765732f6c61726176656c2d617574682f316c61726176656c2d61757468322d6c6f67696e2e6a7067\",\n            \"created_at\": {\n            \"date\": \"2017-08-07 18:28:23.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-09 08:09:26.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 5\n        },\n        {\n            \"object\": \"Channel\",\n            \"id\": \"d3obrvzlya405mex\",\n            \"name\": \"Testone\",\n            \"has_password\": false,\n            \"image_url\": null,\n            \"created_at\": {\n            \"date\": \"2017-08-07 18:30:08.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-07 18:30:08.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 6\n        },\n        {\n            \"object\": \"Channel\",\n            \"id\": \"xp9y35z5p80rje7b\",\n            \"name\": \"Testone\",\n            \"has_password\": false,\n            \"image_url\": null,\n            \"created_at\": {\n            \"date\": \"2017-08-07 18:30:13.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-07 18:30:13.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"real_id\": 7\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": [],\n        \"pagination\": {\n        \"total\": 4,\n            \"count\": 4,\n            \"per_page\": 10,\n            \"current_page\": 1,\n            \"total_pages\": 1,\n            \"links\": []\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/SearchChannel.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "searchChannelMembers",
    "type": "GET",
    "url": "/v1/channel/{id}/members/search?name=:name",
    "title": "Search channel members",
    "description": "<p>List channel members by name</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": ""
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"User\",\n            \"id\": \"e9rjvba6xay5gxqm\",\n            \"name\": \"Super Admin\",\n            \"email\": \"admin@admin.com\",\n            \"created_at\": {\n            \"date\": \"2017-08-28 15:23:58.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-28 15:23:58.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        },\n        {\n            \"object\": \"User\",\n            \"id\": \"bjmqv0aq3894epgo\",\n            \"name\": \"Drummer\",\n            \"email\": null,\n            \"created_at\": {\n            \"date\": \"2017-08-28 15:24:42.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": {\n            \"date\": \"2017-08-28 15:24:42.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            }\n        }\n    ],\n    \"meta\": {\n    \"include\": [\n        \"roles\",\n        \"bans\",\n        \"channels\",\n        \"channel-roles\"\n    ],\n        \"custom\": [],\n        \"pagination\": {\n        \"total\": 2,\n            \"count\": 2,\n            \"per_page\": 10,\n            \"current_page\": 1,\n            \"total_pages\": 1,\n            \"links\": []\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/SearchChannelMembers.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Channel",
    "name": "updateChannelData",
    "type": "PUT",
    "url": "/v1/channel/1",
    "title": "Update channel details",
    "description": "<p>Update channel details</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "size": "4..40",
            "optional": true,
            "field": "name",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "password",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "image_url",
            "description": ""
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>application/json</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"object\": \"Channel\",\n    \"id\": \"6wgjb98vg8mr0y75\",\n    \"name\": \"Hello\",\n    \"has_password\": true,\n    \"image_url\": null,\n    \"created_at\": {\n    \"date\": \"2017-08-18 18:49:19.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n    \"date\": \"2017-08-18 18:49:19.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n    },\n    \"real_id\": 13,\n    \"meta\": {\n    \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Channel/UI/API/Routes/UpdateChannelAttributes.v1.public.php",
    "groupTitle": "Channel"
  },
  {
    "group": "Message",
    "name": "getChannelMessageHistory",
    "type": "GET",
    "url": "/v1/channels/{id}/history",
    "title": "Get history",
    "description": "<p>Retrieve message history for specified channel</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>Channel identifier</p>"
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Authorization",
            "description": "<p>Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Message\",\n            \"id\": \"e9rjvba6xay5gxqm\",\n            \"text\": \"Hey\",\n            \"type\": \"message/text\",\n            \"created_at\": {\n            \"date\": \"2017-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": null,\n            \"sender\": {\n            \"object\": \"User\",\n                \"id\": \"e9rjvba6xay5gxqm\",\n                \"name\": \"Super Admin\",\n                \"email\": \"admin@admin.com\",\n                \"created_at\": {\n                \"date\": \"2017-08-22 21:51:52.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"updated_at\": {\n                \"date\": \"2017-08-22 21:51:52.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                }\n            }\n        },\n        {\n            \"object\": \"Message\",\n            \"id\": \"bjmqv0aq3894epgo\",\n            \"text\": \"Yoyo\",\n            \"type\": \"message/text\",\n            \"created_at\": {\n            \"date\": \"2017-08-25 00:00:00.000000\",\n                \"timezone_type\": 3,\n                \"timezone\": \"UTC\"\n            },\n            \"updated_at\": null,\n            \"sender\": {\n            \"object\": \"User\",\n                \"id\": \"mq60er83ba5xkv9y\",\n                \"name\": \"Drummer\",\n                \"email\": null,\n                \"created_at\": {\n                \"date\": \"2017-08-22 22:11:12.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                },\n                \"updated_at\": {\n                \"date\": \"2017-08-22 22:11:12.000000\",\n                    \"timezone_type\": 3,\n                    \"timezone\": \"UTC\"\n                }\n            }\n        }\n    ],\n    \"meta\": {\n    \"include\": [],\n        \"custom\": [],\n        \"pagination\": {\n        \"total\": 2,\n            \"count\": 2,\n            \"per_page\": 10,\n            \"current_page\": 1,\n            \"total_pages\": 1,\n            \"links\": []\n        }\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Message/UI/API/Routes/GetChannelMessageHistory.v1.public.php",
    "groupTitle": "Message"
  },
  {
    "group": "OAuth2",
    "name": "ClientAdminWebAppRefreshProxy",
    "type": "post",
    "url": "/v1/refresh",
    "title": "Refresh",
    "description": "<p>Refresh access token based on refreshToken http cookie.</p>",
    "version": "1.0.0",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"token_type\": \"Bearer\",\n\"expires_in\": 315360000,\n\"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/main.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "Logout",
    "type": "post",
    "url": "/v1/logout",
    "title": "",
    "description": "<p>User Logout. (Revoking Access Token)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 Accepted\n{\n\"message\": \"Token revoked successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/main.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "OAuth2",
    "name": "loginWithCredentials",
    "type": "POST",
    "url": "/v1/login",
    "title": "Login",
    "description": "<p>Login with nickname and password</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "nickname",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": ""
          }
        ]
      }
    },
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "optional": false,
            "field": "Accept",
            "description": "<p>application/json</p>"
          },
          {
            "group": "Header",
            "optional": false,
            "field": "Content-Type",
            "description": "<p>application/json</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n\"token_type\": \"Bearer\",\n\"expires_in\": 315360000,\n\"access_token\": \"eyJ0eXAiOiJKV1QiLCJhbG...\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authentication/UI/API/Routes/main.v1.public.php",
    "groupTitle": "OAuth2"
  },
  {
    "group": "RolePermission",
    "name": "assignUserToRole",
    "type": "post",
    "url": "/v1/roles/assign",
    "title": "Assign User to Roles",
    "description": "<p>Assign new roles to user. This endpoint does not sync the user with the new roles. It simply assign new role to the user. So make sure to never send an already assigned role since it will cause an error. To sync (update) all existing roles with the new ones use <code>/roles/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Roles ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/AssignUserToRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "attachPermissionToRole",
    "type": "post",
    "url": "/v1/permissions/attach",
    "title": "Attach Permissions to Role",
    "description": "<p>Attach new permissions to role. This endpoint does not sync the role with the new permissions. It simply attach new permission to the role. So make sure to never send an already attached permission since it will cause an error. To sync (update) all existing permissions with the new ones use <code>/permissions/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/AttachPermissionToRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "createRole",
    "type": "post",
    "url": "/v1/roles",
    "title": "Create a Role",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Unique Role Name</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "description",
            "description": ""
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "display_name",
            "description": ""
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/CreateRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "deleteRole",
    "type": "delete",
    "url": "/v1/roles/:id",
    "title": "Delete a Role",
    "description": "<p>Delete Role by ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Role"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 202 OK\n{\n    \"message\": \"Role (manager) Deleted Successfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/DeleteRole.v1.private.php",
    "groupTitle": "RolePermission"
  },
  {
    "group": "RolePermission",
    "name": "detachPermissionFromRole",
    "type": "post",
    "url": "/v1/permissions/detach",
    "title": "Detach Permissions from Role",
    "description": "<p>Detach existing permission from role. This endpoint does not sync the role It just detach the passed permissions from the role. So make sure to never send an non attached permission since it will cause an error. To sync (update) all existing permissions with the new ones use <code>/permissions/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "String-Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/DetachPermissionsFromRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getPermission",
    "type": "get",
    "url": "/v1/permissions/:id",
    "title": "Find a Permission by ID",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/FindPermission.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Permission\",\n      \"id\":\"n9kq6345javb05je\",\n      \"name\":\"amet-ducimus\",\n      \"description\":null,\n      \"display_name\":null\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "getRole",
    "type": "get",
    "url": "/v1/roles/:id",
    "title": "Find a Role by ID",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/FindRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "listAllPermissions",
    "type": "get",
    "url": "/v1/permissions",
    "title": "List all Permission",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/ListAllPermissions.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "listAllRoles",
    "type": "get",
    "url": "/v1/roles",
    "title": "List all Roles",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/Authorization/UI/API/Routes/ListAllRoles.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "revokeRoleFromUser",
    "type": "post",
    "url": "/v1/roles/revoke",
    "title": "Revoke/Remove Roles from User",
    "description": "<p>Revoke existing roles from user. This endpoint does not sync the user It just revoke the passed role from the user. So make sure to never send a non assigned role since it will cause an error. To sync (update) all existing roles with the new ones use <code>/roles/sync</code> endpoint instead.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>user ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Role ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/RevokeUserFromRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "syncPermissionOnRole",
    "type": "post",
    "url": "/v1/permissions/sync",
    "title": "Sync Permissions on Role",
    "description": "<p>You can use this endpoint instead of <code>permissions/attach</code> &amp; <code>permissions/detach</code>. The sync endpoint will override all existing role permissions with the new one sent to this endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "role_id",
            "description": "<p>Role ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "permissions_ids",
            "description": "<p>Permission ID or Array of Permissions ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/SyncPermissionOnRole.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"Role\",\n      \"id\":\"eqwja3vw94kzmxr0\",\n      \"name\":\"praesentium-aut\",\n      \"description\":null,\n      \"display_name\":null,\n      \"permissions\":{\n         \"data\":[\n            {\n               \"object\":\"Permission\",\n               \"id\":\"n9kq6345javb05je\",\n               \"name\":\"est-sit-voluptatem\",\n               \"description\":null,\n               \"display_name\":null\n            },\n            {\n               \"object\":\"Permission\",\n               \"id\":\"999q6345javb05je\",\n               \"name\":\"something-else\",\n               \"description\":null,\n               \"display_name\":null\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "RolePermission",
    "name": "syncUserRoles",
    "type": "post",
    "url": "/v1/roles/sync",
    "title": "Sync User Roles",
    "description": "<p>You can use this endpoint instead of <code>roles/assign</code> &amp; <code>roles/revoke</code>. The sync endpoint will override all existing user roles with the new one sent to this endpoint.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_id",
            "description": "<p>User ID</p>"
          },
          {
            "group": "Parameter",
            "type": "Array",
            "optional": false,
            "field": "roles_ids",
            "description": "<p>Role ID or Array of Roles ID's</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/Authorization/UI/API/Routes/SyncUserRoles.v1.private.php",
    "groupTitle": "RolePermission",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Setting",
    "name": "listAllSettings",
    "type": "GET",
    "url": "/v1/settings",
    "title": "Get Settings",
    "description": "<p>Get all settings for the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": [\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"foo\",\n            \"value\": \"bar\"\n        },\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"test\",\n            \"value\": \"456\"\n        },\n        {\n            \"object\": \"Setting\",\n            \"id\": \"damq35egme74k0xv\",\n            \"key\": \"logout\",\n            \"value\": \"false\"\n        }\n    ],\n    \"meta\": {\n\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/ListAllSettings.v1.private.php",
    "groupTitle": "Setting"
  },
  {
    "group": "Settings",
    "name": "createSetting",
    "type": "POST",
    "url": "/v1/settings",
    "title": "Create Setting",
    "description": "<p>Create a new setting for the application</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Setting\",\n        \"id\": \"aadfa72342sa\",\n        \"key\": \"hello\",\n        \"value\": \"world\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/CreateSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "deleteSetting",
    "type": "DELETE",
    "url": "/v1/settings/:id",
    "title": "Delete Setting",
    "description": "<p>Deletes a setting entry</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 204 OK\n{\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/DeleteSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "Settings",
    "name": "updateSetting",
    "type": "PATCH",
    "url": "/v1/settings/:id",
    "title": "Update Setting",
    "description": "<p>Updates a setting entry (both key / value)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "parameters",
            "description": "<p>here..</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"data\": {\n        \"object\": \"Setting\",\n        \"id\": \"aadfa72342sa\",\n        \"key\": \"foo\",\n        \"value\": \"bar\"\n    },\n    \"meta\": {\n        \"include\": [],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Settings/UI/API/Routes/UpdateSetting.v1.private.php",
    "groupTitle": "Settings"
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthFb",
    "type": "post",
    "url": "/v1/auth/facebook",
    "title": "",
    "description": "<p>After getting the User Token from facebook, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/facebook/test</code> to get the code/token.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "access_token",
            "description": "<p>access_token=41EAAJyuLl3gaUBAPN6BrVIO.. (required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": {\n    \"id\": 1,\n    \"name\": \"Mahmoud Zalt\",\n    \"points\": 0,\n    \"email\": \"mahmoud@zalt.me\",\n    \"confirmed\": 0,\n    \"token\": {\n      \"object\": \"token\",\n      \"token\": \"eyJ0eXAxOiJKV1QcLCJhbGciO2JIUzI1NiJz...\"\n      \"access_token\": {\n        \"token_type\": \"Bearer\",\n        \"time_to_live\": {\n          \"minutes\": 60\n        },\n        \"expires_in\": {\n          \"date\": \"2017-02-10 23:43:41.668135\",\n          \"timezone_type\": 3,\n          \"timezone\": \"UTC\"\n        }\n      }\n    },\n    \"referral_code\": \"57aa0b88ab334\",\n    \"gender\": \"male\",\n    \"birth\": \"null\",\n    \"nickname\": \"MEGA\",\n    \"social_auth_provider\": \"facebook\",\n    \"social_id\": \"88208885713788888\",\n    \"social_avatar\": {\n        \"avatar\": \"https://graph.facebook.com/v2.6/88208885713788888/picture?type=normal\",\n        \"original\": \"https://graph.facebook.com/v2.6/88208885713788888/picture?width=1920\"\n    },\n    \"created_at\": {\n      \"date\": \"2016-08-09 16:57:44.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n      \"date\": \"2016-08-09 16:59:04.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    }\n  }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Socialauth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "SocialAuth",
    "name": "socialAuthTw",
    "type": "post",
    "url": "/v1/auth/twitter",
    "title": "",
    "description": "<p>After getting the User Token from twitter, call this Endpoint passing the user token to it in order to fetch his data and create the user in our database if not exist or return the existing one. For testing purposes use this endpoint <code>auth/twitter/test</code> to get the code/token.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_token",
            "description": "<p>?oauth_token=FeUoXZRIThimLxKjg6HqyzELREJr103L (required)</p>"
          },
          {
            "group": "Parameter",
            "optional": false,
            "field": "oauth_verifier",
            "description": "<p>?oauth_verifier=144hi333mLxKjg6HqyzELRE13LxYz (required)</p>"
          }
        ]
      }
    },
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": {\n    \"id\": 1,\n    \"name\": \"Mahmoud Zalt\",\n    \"points\": 0,\n    \"email\": \"mahmoud@zalt.me\",\n    \"confirmed\": 0,\n    \"token\": {\n      \"object\": \"token\",\n      \"token\": \"eyJ0eXAxOiJKV1QcLCJhbGciO2JIUzI1NiJz...\"\n      \"access_token\": {\n        \"token_type\": \"Bearer\",\n        \"time_to_live\": {\n          \"minutes\": 60\n        },\n        \"expires_in\": {\n          \"date\": \"2017-02-10 23:43:41.668135\",\n          \"timezone_type\": 3,\n          \"timezone\": \"UTC\"\n        }\n      }\n    },\n    \"referral_code\": \"57aa0b88ab334\",\n    \"gender\": \"male\",\n    \"birth\": \"null\",\n    \"nickname\": \"MEGA\",\n    \"social_auth_provider\": \"twitter\",\n    \"social_id\": \"5713788888\",\n    \"social_avatar\": {\n        \"avatar\": \"https://graph.twitter.com/v2.6/88208885713788888/picture?type=normal\",\n        \"original\": \"https://graph.twitter.com/v2.6/88208885713788888/picture?width=1920\"\n    },\n    \"created_at\": {\n      \"date\": \"2016-08-09 16:57:44.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n      \"date\": \"2016-08-09 16:59:04.000000\",\n      \"timezone_type\": 3,\n      \"timezone\": \"UTC\"\n    }\n  }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/Socialauth/UI/API/Routes/AuthenticateAll.v1.private.php",
    "groupTitle": "SocialAuth"
  },
  {
    "group": "User",
    "name": "getMyProfile",
    "type": "GET",
    "url": "/v1/my/profile",
    "title": "Get own User",
    "description": "<p>Get the own profile (some sort of alias for GET /users/xyz - however, you don't need to specify the ID)</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated user"
      }
    ],
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n    \"object\": \"User\",\n    \"id\": \"bjmqv0aq3894epgo\",\n    \"name\": \"Drummer\",\n    \"email\": null,\n    \"created_at\": {\n    \"date\": \"2017-08-07 14:21:16.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n    },\n    \"updated_at\": {\n    \"date\": \"2017-08-07 14:21:16.000000\",\n        \"timezone_type\": 3,\n        \"timezone\": \"UTC\"\n    },\n    \"real_id\": 2,\n    \"deleted_at\": null,\n    \"roles\": {\n    \"data\": [\n            {\n                \"object\": \"Role\",\n                \"id\": \"e9rjvba6xay5gxqm\",\n                \"name\": \"admin\",\n                \"description\": \"Administrator\",\n                \"display_name\": \"Administrator\",\n                \"permissions\": {\n                \"data\": [\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"e9rjvba6xay5gxqm\",\n                            \"name\": \"manage-roles\",\n                            \"description\": \"Create, Update, Delete, List, Attach/detach permissions to Roles and List Permissions.\",\n                            \"display_name\": null\n                        },\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"bjmqv0aq3894epgo\",\n                            \"name\": \"create-admins\",\n                            \"description\": \"Create new Users (Admins) from the dashboard.\",\n                            \"display_name\": null\n                        },\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"6klydqagxz9mnegr\",\n                            \"name\": \"manage-admins-access\",\n                            \"description\": \"Assign users to Roles.\",\n                            \"display_name\": null\n                        },\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"3jko75zeraly46mv\",\n                            \"name\": \"access-dashboard\",\n                            \"description\": \"Access the admins dashboard.\",\n                            \"display_name\": null\n                        },\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"mq60er83ba5xkv9y\",\n                            \"name\": \"search-users\",\n                            \"description\": \"Find a User in the DB.\",\n                            \"display_name\": null\n                        },\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"d3obrvzlya405mex\",\n                            \"name\": \"list-users\",\n                            \"description\": \"List all Users.\",\n                            \"display_name\": null\n                        },\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"xp9y35z5p80rje7b\",\n                            \"name\": \"update-users\",\n                            \"description\": \"Update a User.\",\n                            \"display_name\": null\n                        },\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"vlp9dnzmyz7xw305\",\n                            \"name\": \"delete-users\",\n                            \"description\": \"Delete a User.\",\n                            \"display_name\": null\n                        },\n                        {\n                            \"object\": \"Permission\",\n                            \"id\": \"kg7vpeajmawldnbo\",\n                            \"name\": \"refresh-users\",\n                            \"description\": \"Refresh User data.\",\n                            \"display_name\": null\n                        }\n                    ]\n                }\n            }\n        ]\n    },\n    \"meta\": {\n    \"include\": [\n        \"roles\",\n        \"bans\",\n        \"channels\"\n    ],\n        \"custom\": []\n    }\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Containers/User/UI/API/Routes/GetMyProfile.v1.private.php",
    "groupTitle": "User"
  },
  {
    "group": "Users",
    "name": "GetAuthenticatedUser",
    "type": "get",
    "url": "/v1/userinfo",
    "title": "Get Authenticated User without specifying it's ID",
    "description": "<p>Get the current authenticated user object.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetAuthenticatedUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "ListAllAdmins",
    "type": "get",
    "url": "/v1/admins",
    "title": "List Admin Users",
    "description": "<p>List all Users where role <code>Admin</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated Admin"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/ListAllAdmins.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "ListAllClients",
    "type": "get",
    "url": "/v1/clients",
    "title": "List Client Users",
    "description": "<p>List all Users where role <code>Client</code>. You can search for Users by email, name and ID. Example: <code>?search=Mahmoud</code> or <code>?search=whatever@mail.com</code>. You can specify the field as follow <code>?search=email:whatever@mail.com</code> or <code>?search=id:20</code>. You can search by multiple fields as follow: <code>?search=name:Mahmoud&amp;email:whatever@mail.com</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/ListAllClients.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "ListAllUsers",
    "type": "get",
    "url": "/v1/users",
    "title": "List All Users",
    "description": "<p>List all Application Users (clients and admins). For all registered users &quot;Clients&quot; only you can use <code>/clients</code>. And for all &quot;Admins&quot; only you can use <code>/admins</code>.</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/ListAllUsers.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n  \"data\": [\n    {\n      // same object structure of the single response\n    },\n    {\n      // ...\n    },\n    // ...\n  ],\n  \"include\": [\n    \"xxx\",\n    \"yyy\",\n  ],\n  \"custom\": [],\n  \"meta\": {\n    \"pagination\": {\n      \"total\": x,\n      \"count\": x,\n      \"per_page\": x,\n      \"current_page\": x,\n      \"total_pages\": x,\n      \"links\": []\n    }\n  }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "UpdateUser",
    "type": "put",
    "url": "/v1/users/:id",
    "title": "Update User",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/UpdateUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "getUser",
    "type": "get",
    "url": "/v1/users/:id",
    "title": "Get User",
    "description": "<p>Find a user by its ID</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "Authenticated User"
      }
    ],
    "filename": "app/Containers/User/UI/API/Routes/GetUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "group": "Users",
    "name": "registerUser",
    "type": "post",
    "url": "/v1/register",
    "title": "Register User (create client)",
    "description": "<p>Register users as (client).</p>",
    "version": "1.0.0",
    "permission": [
      {
        "name": "none"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "email",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "password",
            "description": "<p>(required)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "gender",
            "description": "<p>(optional)</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "birth",
            "description": "<p>(optional)</p>"
          }
        ]
      }
    },
    "filename": "app/Containers/User/UI/API/Routes/RegisterUser.v1.private.php",
    "groupTitle": "Users",
    "success": {
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK\n{\n   \"data\":{\n      \"object\":\"User\",\n      \"id\":eqwja3vw94kzmxr0,\n      \"name\":\"Mahmoud Zalt\",\n      \"email\":\"x.rolllln@hotmail.com\",\n      \"confirmed\":\"0\",\n      \"created_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"updated_at\":{\n         \"date\":\"2017-06-06 05:40:51.000000\",\n         \"timezone_type\":3,\n         \"timezone\":\"UTC\"\n      },\n      \"readable_created_at\":\"1 second ago\",\n      \"readable_updated_at\":\"1 second ago\",\n      \"roles\":{\n         \"data\":[\n            {\n               \"object\": \"Role\",\n               \"id\": abcderf,\n               \"name\":\"admin\",\n               \"description\":\"Super Administrator\",\n               \"display_name\":\"\"\n            },\n            {\n               \"object\": \"Role\",\n               \"id\": ascderf,\n               \"name\":\"client\",\n               \"description\":\"Special Client!\",\n               \"display_name\":\"\"\n            }\n         ]\n      }\n   },\n   \"meta\":{\n      \"include\":[\n         \"stores\",\n         \"invoices\",\n      ],\n      \"custom\":[\n\n      ]\n   }\n}",
          "type": "json"
        }
      ]
    }
  }
] });

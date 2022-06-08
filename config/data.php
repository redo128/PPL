<?php 

return [
    "route" => [
        "admin" => [
            "index" => "dashboard",
            "films" => [
                "index" => "films.index",
                "create" => "films.create",
                "store" => "films.store",
                "detail" => "films.show",
                "update" => "films.update",
                "edit" => "films.edit",
                "delete" => "films.destroy"
            ],
            "genres" => [
                "index" => "genres.index",
                "create" => "genres.create",
                "store" => "genres.store",
                "detail" => "genres.show",
                "update" => "genres.update",
                "edit" => "genres.edit",
                "delete" => "genres.destroy"
            ],
            "schedules" => [
                "index" => "schedules.index",
                "create" => "schedules.create",
                "store" => "schedules.store",
                "detail" => "schedules.show",
                "update" => "schedules.update",
                "edit" => "schedules.edit",
                "delete" => "schedules.destroy"
            ]
        ]
    ],
    "view" => [
        "admin" => [
            "films" => [
                "index" => "admin.film.index",
                "create" => "admin.film.create",
                "edit" => "admin.film.edit",
                "detail" => "admin.film.detail"
            ]
        ]
    ],
    "time" => [
        "min_hour" => 1,
        "max_hour" => 5,
        "min_minute" => 0,
        "max_minute" => 59
    ],
    "rating" => [
        "min_rating" => 7,
        "max_rating" => 21
    ]

];

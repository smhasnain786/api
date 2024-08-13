<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\AuthorAbouts; // version 1
use App\Models\AuthAboutV1;
use App\Models\AuthAboutV3;
use App\Models\Author;
use App\Models\AuthorAchivements;
use App\Models\AuthDomain;
use App\Models\AuthHeroSection;
use App\Models\ecommerceStore;
use App\Models\AuthHeroV2;
use App\Models\AuthHeroV3;
use App\Models\AuthHeroV4;
use App\Models\AuthHeroV5;
use App\Models\AuthHeroV6;
use App\Models\AuthBlogs;
use App\Models\AuthEvents;
use App\Models\AuthorContacts;
use App\Models\AuthAwards;
use App\Models\AuthBooks;
use App\Models\AuthBooksv2;
use App\Models\Products;
use App\Models\Stocks;
use App\Models\AuthTestimonial;
use App\Models\AuthCta;
use App\Models\AuthCta2;
use App\Models\AuthCta3;
use App\Models\AuthCta4;
use App\Models\AuthCta5;
use App\Models\AuthMileStone;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// About Section API

Route::get('/about/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();


    if ($authorId->theme == "v1") {
        $authorAbouts = AuthAboutV1::where('author_id', $authorId->author_id)->first();
        $author = Author::where('author_id', $authorAbouts->author_id)->first();
        if (!$authorAbouts) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }
        return response()->json([
            'aboutv2' => [
                "title" => $authorAbouts->title,
                "subtitle" => $authorAbouts->subtitle,
                "image" => $authorAbouts->image,
                "videoURL" => $authorAbouts->videoURL,
                "description" => $authorAbouts->description,
                "userinfo" => [
                    [
                        "title" => "Name:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Born:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Country:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Email ID:",
                        "subtitle" => $author->author_email
                    ],
                    [
                        "title" => "Languages:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Address:",
                        "subtitle" => $author->author_name
                    ]
                ],
                "links" => [
                    'facebook' => $author->facebook,
                    'twitter' => $author->twitter,
                    'linkedin' => $author->linkedin
                ]
            ]

        ]);
    } elseif ($authorId->theme == "v2") {
        $authorAbouts = AuthAboutV1::where('author_id', $authorId->author_id)->first();
        $author = Author::where('author_id', $authorAbouts->author_id)->first();
        if (!$authorAbouts) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }
        return response()->json([
            'aboutv2' => [
                "title" => $authorAbouts->title,
                "subtitle" => $authorAbouts->subtitle,
                "image" => $authorAbouts->image,
                "videoURL" => $authorAbouts->videoURL,
                "description" => $authorAbouts->description,
                "userinfo" => [
                    [
                        "title" => "Name:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Born:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Country:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Email ID:",
                        "subtitle" => $author->author_email
                    ],
                    [
                        "title" => "Languages:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Address:",
                        "subtitle" => $author->author_name
                    ]
                ],
                "links" => [
                    'facebook' => $author->facebook,
                    'twitter' => $author->twitter,
                    'linkedin' => $author->linkedin
                ]
            ]

        ]);
    } elseif ($authorId->theme == "v3") {
        $authorAbouts = AuthAboutV3::where('author_id', $authorId->author_id)->first();
        $author = Author::where('author_id', $authorAbouts->author_id)->first();
        $authorAchivements = AuthorAchivements::where('about_id', $authorAbouts->achivement_id)->get();
        if (!$authorAbouts) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }
        return response()->json([
            'aboutv3' => [
                "image" => $authorAbouts->image,
                "subtitle" => $authorAbouts->subtitle,
                "name" => $authorAbouts->name,
                "title" => $authorAbouts->title,
                "Style" => $authorAbouts->Style,
                "description" => $authorAbouts->description
            ]

        ]);
    } elseif ($authorId->theme == "v4") {
        $authorAbouts = AuthAboutV1::where('author_id', $authorId->author_id)->first();
        $author = Author::where('author_id', $authorAbouts->author_id)->first();
        if (!$authorAbouts) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }
        return response()->json([
            'aboutv2' => [
                "title" => $authorAbouts->title,
                "subtitle" => $authorAbouts->subtitle,
                "image" => $authorAbouts->image,
                "videoURL" => $authorAbouts->videoURL,
                "description" => $authorAbouts->description,
                "userinfo" => [
                    [
                        "title" => "Name:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Born:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Country:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Email ID:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Languages:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Address:",
                        "subtitle" => $author->author_name
                    ]
                ],
                "links" => [
                    'facebook' => $author->facebook,
                    'twitter' => $author->twitter,
                    'linkedin' => $author->linkedin
                ]
            ]

        ]);
    } elseif ($authorId->theme == "v5") {
        $authorAbouts = AuthAboutV3::where('author_id', $authorId->author_id)->first();
        $author = Author::where('author_id', $authorAbouts->author_id)->first();
        $authorAchivements = AuthorAchivements::where('about_id', $authorAbouts->achivement_id)->get();
        if (!$authorAbouts) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }
        return response()->json([
            'aboutv3' => [
                "image" => $authorAbouts->image,
                "subtitle" => $authorAbouts->subtitle,
                "name" => $authorAbouts->name,
                "title" => $authorAbouts->title,
                "Style" => $authorAbouts->Style,
                "description" => $authorAbouts->description
            ]

        ]);
    } elseif ($authorId->theme == "v6") {
        $authorAbouts = AuthAboutV1::where('author_id', $authorId->author_id)->first();
        $author = Author::where('author_id', $authorAbouts->author_id)->first();
        if (!$authorAbouts) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }
        return response()->json([
            'aboutv6' => [
                "title" => $authorAbouts->title,
                "subtitle" => $authorAbouts->subtitle,
                "image" => $authorAbouts->image,
                "videoURL" => $authorAbouts->videoURL,
                "description" => $authorAbouts->description,
                "userinfo" => [
                    [
                        "title" => "Name:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Born:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Country:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Email ID:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Languages:",
                        "subtitle" => $author->author_name
                    ],
                    [
                        "title" => "Address:",
                        "subtitle" => $author->author_name
                    ]
                ],
                "links" => [
                    'facebook' => $author->facebook,
                    'twitter' => $author->twitter,
                    'linkedin' => $author->linkedin
                ]
            ]

        ]);
    } else {
        return response()->json(['error' => 'Theme not found'], 404);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');

Route::get('/milestone/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();


    if ($authorId) {
        $funFactsItem = AuthMileStone::where('author_id', $authorId->author_id)
            ->where('status', 'active')
            ->get();
        return response()->json(["funFacts" => ["funFactsItem"=>$funFactsItem]]);
    } else {
        return response()->json(['error' => 'Theme not found'], 404);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');

Route::get('/cta/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();


    if ($authorId) {
        $authorCta = AuthCta::where('author_id', $authorId->author_id)->first();
        return response()->json(["cta" => $authorCta]);
    } else {
        return response()->json(['error' => 'Theme not found'], 404);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');

Route::get('/ctav2/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();


    if ($authorId) {
        $authorCta = AuthCta2::where('author_id', $authorId->author_id)->first();
        return response()->json(["ctav2" => $authorCta]);
    } else {
        return response()->json(['error' => 'Theme not found'], 404);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');

Route::get('/ctav3/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();


    if ($authorId) {
        $authorCta = AuthCta3::where('author_id', $authorId->author_id)->first();
        return response()->json(["ctav3" => $authorCta]);
    } else {
        return response()->json(['error' => 'Theme not found'], 404);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');

Route::get('/ctav4/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();


    if ($authorId) {
        $authorCta = AuthCta4::where('author_id', $authorId->author_id)->first();
        return response()->json(["ctav4" => $authorCta]);
    } else {
        return response()->json(['error' => 'Theme not found'], 404);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');

Route::get('/ctav5/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();


    if ($authorId) {
        $authorCta = AuthCta5::where('author_id', $authorId->author_id)->first();
        return response()->json(["ctav5" => $authorCta]);
    } else {
        return response()->json(['error' => 'Theme not found'], 404);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');


Route::get('/books/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();
    $authorBooks = AuthBooks::where('author_id', $authorId->author_id)->get();
    //    return $authorBooks;
    if (!$authorBooks) {

        return response()->json(['error' => 'Author data not found'], 404);
    }
    $booksItemContent = [];
    foreach ($authorBooks as  $value) {
        $booksItemContent[] = [
            "title" => $value->bookTitle,
            "description" => $value->desc,
            "icon" => $value->icon,
            "url" => $value->url
        ];
    }
    return response()->json([
        'books' => [
            "title" => "Latest released books",
            "subtitle" => "BOOKS",
            "image1" => $authorBooks,
            "booksItem" => [
                "title" => "best selling books",
                "subtitle" => "BEST SELLING BOOKS",
                "booksItemContent" => $booksItemContent
            ]
        ]

    ]);
})->middleware('App\Http\Middleware\ApiKeyMiddleware');
Route::get('/booksv2/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();
    $authorBooks = AuthBooksv2::where('author_id', $authorId->author_id)->get();
    //    return $authorBooks;
    if (!$authorBooks) {

        return response()->json(['error' => 'Author data not found'], 404);
    }
    $booksItemContent = [];
    foreach ($authorBooks as  $value) {
        $booksItemContent[] = [
            "title" => $value->bookTitle,
            "img" => $value->img,
            "url" => $value->url
        ];
    }
    if ($booksItemContent == []) {
        return response()->json([
            "booksv2" => [
                "title" => "Books",
                "subtitle" => "Some of recent released books",
                "booksItem" => [['title' => "ww", "image" => "ww", "url" => "ww"]]
            ]

        ]);
    } else {
        return response()->json([
            "booksv2" => [
                "title" => "Books",
                "subtitle" => "Some of recent released books",
                "booksItem" => $booksItemContent
            ]

        ]);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');

Route::get('/booksv3/{domain}', function ($domain) {
    $authorDomain = AuthDomain::where('domain_name', $domain)->first();

    if (!$authorDomain) {
        return response()->json(['error' => 'Author data not found'], 404);
    }

    // Fetch books for the author
    $authorBooks = Products::where('author_id', $authorDomain->author_id)->get();

    // If no books found for the author, fetch all books
    if ($authorBooks->isEmpty()) {
        $authorBooks = Products::all();
    }

    // Build booksItemContent array
    $booksItemContent = $authorBooks->map(function ($book) {
        $stock = Stocks::where("pdt_id", $book->pdt_id)->first();
        return [
            "title" => $book->pdt_name,
            "image" => $book->pdt_img,
            "price" => $stock ? $stock->mrp : null,
            "pdt_id" => $book->pdt_id,
            "stock" => $stock ? $stock->curr_stock : null,
        ];
    })->toArray();

    // Return JSON response
    return response()->json(["booksv3" => ["booksItem" => $booksItemContent]]);
})->middleware('App\Http\Middleware\ApiKeyMiddleware');


Route::get('/testimonial/{domain}', function ($domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();
    $AuthTestimonial = AuthTestimonial::where('author_id', $authorId->author_id)->get();
    //    return $authorBooks;
    if (!$AuthTestimonial) {

        return response()->json(['error' => 'Author data not found'], 404);
    }

    return response()->json(["testimonial" => ["testimonialItem" => $AuthTestimonial]]);
})->middleware('App\Http\Middleware\ApiKeyMiddleware');



// hero section API
Route::get('/hero/{theme}/{domain}', function ($theme, $domain) {

    $authorId = AuthDomain::where('domain_name', $domain)->first();
    if ($authorId->theme == "v1") {
        $authorHeroSection = AuthHeroSection::where('author_id', $authorId->author_id)->first();
        if (!$authorHeroSection) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }
        return response()->json([
            'herov1' => [
                'title' => $authorHeroSection->title,
                'subtitle' => $authorHeroSection->subtitle,
                'image' => $authorHeroSection->image,
                'tagTitle' => $authorHeroSection->tagTitle,
                'tagText' => $authorHeroSection->tagText,
                'description' => $authorHeroSection->description
            ]

        ]);
    } elseif ($authorId->theme == "v2") {
        $authorHeroSection = AuthHeroV2::where('author_id', $authorId->author_id)->first();
        if (!$authorHeroSection) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }

        return response()->json([
            'herov2' => [
                "title" => $authorHeroSection->title,
                "description" => $authorHeroSection->description,
                "image" => $authorHeroSection->image,
                "buyBtn" => $authorHeroSection->buyBtn,
                "aboutBtn" => $authorHeroSection->aboutBtn
            ]

        ]);
    } elseif ($authorId->theme == "v3") {
        $authorHeroSection = AuthHeroV3::where('author_id', $authorId->author_id)->first();
        if (!$authorHeroSection) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }

        return response()->json([
            'herov3' => [
                "title" => $authorHeroSection->title,
                "subtitle" => $authorHeroSection->subtitle,
                "description" => $authorHeroSection->description,
                "image" => $authorHeroSection->image,
                "videoURL" => $authorHeroSection->videoURL
            ]

        ]);
    } elseif ($authorId->theme == "v4") {
        $authorHeroSection = AuthHeroV4::where('author_id', $authorId->author_id)->first();
        if (!$authorHeroSection) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }

        return response()->json([
            'herov4' => [
                "name" => $authorHeroSection->name,
                "title" => $authorHeroSection->title,
                "description" => $authorHeroSection->description,
                "image" => $authorHeroSection->image,
                "firstBtn" => $authorHeroSection->firstBtn,
                "secondBtn" => $authorHeroSection->secondBtn,
                "videoURL" => $authorHeroSection->videoURL
            ]

        ]);
    } elseif ($authorId->theme == "v5") {
        $authorHeroSection = AuthHeroV5::where('author_id', $authorId->author_id)->first();
        if (!$authorHeroSection) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }

        return response()->json([
            'herov5' => [
                "name" => $authorHeroSection->name,
                "title" => $authorHeroSection->title,
                "description" => $authorHeroSection->description,
                "bookImage" => $authorHeroSection->bookImage,
                "writerImage" => $authorHeroSection->writerImage,
                "btn" => $authorHeroSection->btn
            ]

        ]);
    } elseif ($authorId->theme == "v6") {
        $authorHeroSection = AuthHeroV6::where('author_id', $authorId->author_id)->first();
        if (!$authorHeroSection) {
            // Handle case where AuthorAbouts data was not found
            return response()->json(['error' => 'Author data not found'], 404);
        }

        return response()->json([
            'herov6' => [
                "title" => $authorHeroSection->title,
                "subtitle" => $authorHeroSection->subtitle,
                "description" => $authorHeroSection->description,
                "image" => $authorHeroSection->image,
                "buyBtn" => $authorHeroSection->buyBtn,
                "aboutBtn" => $authorHeroSection->aboutBtn
            ]

        ]);
    } else {
        return response()->json(['error' => 'Theme not found'], 404);
    }
})->middleware('App\Http\Middleware\ApiKeyMiddleware');



// get All blogs
Route::get('/getBlogList/{domain}', function ($domain) {
    $authorId = AuthDomain::where('domain_name', $domain)->first();
    if ($authorId !== null) {
        $page = request()->query('page', 1); // Get the page number from query parameters, default to 1
        $limit = request()->query('limit', 6); // Get the limit from query parameters, default to 6

        $blogs = AuthBlogs::where('author_id', $authorId->author_id)
            ->skip(($page - 1) * $limit) // Calculate the offset
            ->take($limit) // Limit the number of records
            ->get();

        $blogsList = [];
        foreach ($blogs as $blog) {
            $blogsList[] = [
                "id" => $blog->id,
                "image" => $blog->image,
                "title" => $blog->title,
                "date" => $blog->updated_at,
                "description" => $blog->description,
                "comments" => 20,
                "slug" => $blog->slug,
                "author" => $blog->blog_author_name,
            ];
        }

        return response()->json(['blogsList' => $blogsList]);
    } else {
        return response()->json(['error' => 'Blogs not found'], 404);
    }
});


// get all events
Route::get('/getEventsList/{domain}', function ($domain) {
    $authorId = AuthDomain::where('domain_name', $domain)->first();
    if ($authorId !== null) {
        // Get page and limit from query parameters
        $page = request()->input('page', 1);
        $limit = request()->input('limit', 6); // Default to 6 events per page

        // Calculate offset
        $offset = ($page - 1) * $limit;

        // Fetch events with pagination
        $events = AuthEvents::where('author_id', $authorId->author_id)
            ->offset($offset)
            ->limit($limit)
            ->get();

        $EventsList = [];
        foreach ($events as $event) {
            $EventsList[] = [
                "id" => $event->id,
                "image" => $event->image,
                "title" => $event->title,
                "description" => $event->description, // Fixed: Use 'description' instead of 'title'
                "date" => $event->date,
                "month" => $event->month,
                "year" => $event->year,
                "btn" => $event->btn,
                "location" => $event->location,
                "venue" => $event->venue,
                "address" => $event->address,
                "organizer" => $event->organizer,
                "price" => $event->price,
                "remaining_tickets" => $event->remaining_tickets,
                "phone" => $event->phone,
                "email" => $event->email,
                "slug" => $event->slug,
                "author" => $event->blog_author_name,
            ];
        }

        return response()->json(['EventsList' => $EventsList]);
    } else {
        return response()->json(['error' => 'Events not found'], 404);
    }
});







// get latest blogs
Route::get('/getLatestBlog/{domain}', function ($domain) {
    $authorId = AuthDomain::where('domain_name', $domain)->first();
    if ($authorId !== null) {
        // $blogs = AuthBlogs::where('author_id', $authorId->author_id)->get();
        $blogs = AuthBlogs::where('author_id', $authorId->author_id)->orderBy('updated_at', 'desc')->take(3)->get();
        $blogsList = [];
        // filter by date
        foreach ($blogs as $blog) {
            $blogsList[] = [
                "id" => $blog->id,
                "image" => $blog->image,
                "title" => $blog->title,
                "date" => $blog->updated_at,
                "description" => $blog->description,
                "comments" => 20,
                "slug" => $blog->slug,
                "author" => $blog->blog_author_name,
            ];
        }

        return response()->json(['blogsList' => $blogsList]);
    } else {
        return response()->json(['error' => 'Blogs not found'], 404);
    }
});




// get blogs details
Route::get('/getBlogDetails/{ids}', function ($ids) {

    $blogs = AuthBlogs::where('id', $ids)->get();
    if ($blogs !== null) {


        $blogsList = [];
        foreach ($blogs as $blog) {
            $blogsList[] = [
                "id" => $blog->id,
                "image" => $blog->image,
                "title" => $blog->title,
                "date" => $blog->updated_at,
                "description" => $blog->description,
                "comments" => 20,
                "slug" => $blog->slug,
                "author" => $blog->blog_author_name,
            ];
        }

        return response()->json(['blogsList' => $blogsList]);
    } else {
        return response()->json(['error' => 'Blogs not found'], 404);
    }
});

// get events details
Route::get('/getEventsDetails/{ids}', function ($ids) {

    $Events = AuthEvents::where('id', $ids)->get();
    if ($Events !== null) {


        $eventsList = [];
        foreach ($Events as $event) {
            $eventsList[] = [
                "id" => $event->id,
                "image" => $event->image,
                "title" => $event->title,
                "description" => $event->description, // Fixed: Use 'description' instead of 'title'
                "date" => $event->date,
                "month" => $event->month,
                "year" => $event->year,
                "btn" => $event->btn,
                "location" => $event->location,
                "venue" => $event->venue,
                "address" => $event->address,
                "organizer" => $event->organizer,
                "price" => $event->price,
                "remaining_tickets" => $event->remaining_tickets,
                "phone" => $event->phone,
                "email" => $event->email,
                "slug" => $event->slug,
                "author" => $event->blog_author_name,
            ];
        }

        return response()->json(['eventsList' => $eventsList]);
    } else {
        return response()->json(['error' => 'events not found'], 404);
    }
});

// submit credentials

Route::post('/submitCred', function (Request $request) {
    $apiToken = $request->input('api_token');
    $author = Author::where('api_token', $apiToken)->first();
    if ($author !== null) {
        return response()->json(['validate' => true]);
    } else {
        return response()->json(['validate' => false]);
    }
});


// get Logo 

Route::get('/getLogo/{domain}', function ($domain) {
    $logo = ecommerceStore::find('logo');
    return response()->json(['logo' => $logo->logo]);
})->middleware('App\Http\Middleware\ApiKeyMiddleware');



Route::get('/getDomain/{domain}', function ($domain) {
    $domain = AuthDomain::where('domain_name', $domain)->first();
    if ($domain !== null) {
        return response()->json(['access' => true]);
    } else {
        return response()->json(['access' => false]);
    }
});


Route::get('/getTheme/{domain}', function ($domain) {
    $theme = AuthDomain::where('domain_name', $domain)->first();
    if ($theme !== null) {
        return response()->json(['theme' => $theme->theme]);
    }
});



Route::post('/contact/{domain}', function (Request $request, $domain) {
    // Validate the request
    $domain = AuthDomain::where('domain_name', $domain)->first();
    $id = $domain['author_id'];
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()
        ], 400);
    }

    // Create a new contact
    $contact = new AuthorContacts();
    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->subject = $request->subject;
    $contact->message = $request->message;
    $contact->author_id = $id;
    $contact->save();

    return response()->json([
        'status' => 'success',
        'message' => 'Contact form submitted successfully.'
    ], 200);
});




Route::get('/award/{domain}', function ($domain) {
    $authorId = AuthDomain::where('domain_name', $domain)->first();
    if ($authorId !== null) {
        // $blogs = AuthBlogs::where('author_id', $authorId->author_id)->get();
        $awards = AuthAwards::where('author_id', $authorId->author_id)->get();
        return $awards;
    } else {
        return response()->json(['error' => 'Awards not found'], 404);
    }
});

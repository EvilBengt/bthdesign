<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",
 
    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10.",
                    ]
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom04",
                        "url" => "rapport/fargschema",
                        "title" => "Förstå webbsidors färgval.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "rapport/laddningstid",
                        "title" => "Webbsidors laddtid.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "rapport/designprincip",
                        "title" => "Design-principer och -element.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "rapport/designelement",
                        "title" => "Designelement.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "rapport/designprinciper",
                        "title" => "Designprinciper.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "rapport/webbplatsdesign",
                        "title" => "Aktuell webbplatsdesign.",
                    ]
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogg med bilder.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Stötarp",
                        "url" => "blogg/stotarp",
                        "title" => "Stötarp östergård en vintereftermiddag.",
                    ],
                    [
                        "text" => "Päronträd",
                        "url" => "blogg/parontrad",
                        "title" => "Farmors gamla päronträd.",
                    ],
                    [
                        "text" => "Mitt \"kontor\"",
                        "url" => "blogg/kontor",
                        "title" => "Mitt \"kontor\".",
                    ]
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Lek runt med olika konstruktioner.",
        ],
    ],
];

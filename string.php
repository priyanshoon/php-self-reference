<?php

$title = "PHP Fundamentals";

$message = 'Welcome to ' . $title; // we concatenate strings with . operator
echo $message;

$message2 = "Welcome to $title"; // cant use variable in singel quote, use double quote
echo "\n" . $message2;


$json = <<<JSON

{
    "glossary": {
        "title": $message2,
		"GlossDiv": {
            "title": "S",
			"GlossList": {
                "GlossEntry": {
                    "ID": "SGML",
					"SortAs": "SGML",
					"GlossTerm": "Standard Generalized Markup Language",
					"Acronym": "SGML",
					"Abbrev": "ISO 8879:1986",
					"GlossDef": {
                        "para": "A meta-markup language, used to create markup languages such as DocBook.",
						"GlossSeeAlso": ["GML", "XML"]
                    },
					"GlossSee": "markup"
                }
            }
        }
    }
}

JSON;

echo $json;

echo strlen($json);

<?php

/*
Proof of Concept:

A lightweight PHP utility for generating HTML markup cleanly using functions.

1. `def_tagContents($tag, $content, $attributes)`:
   - `$tag`: The HTML tag to create (e.g., "p", "h1", "iframe").
   - `$content`: The inner content/text of the element.
   - `$attributes`: An associative array for attributes like class, id, etc.

Example:
    echo def_tagContents("p", "Hello world!", array("class" => "intro"));

Output:
    <p class="intro">Hello world!</p>




/**
 * Returns the closing tag for the given HTML tag.
 *
 * @param string $tagName The name of the HTML tag (e.g., "div")
 * @return string The closing tag (e.g., </div>)
 */
function create_clTag($tagName) {
    return "</" . $tagName . ">";
}


/**
 * Builds a string of HTML attributes from an associative array.
 *
 * Example:
 *   array("class" => "btn", "id" => "main") → class="btn" id="main"
 *
 * @param array $attr Associative array of attributes
 * @return string The compiled attribute string
 */
function def_tagAtrr($attr) {
    $attr_string = "";

    if (!empty($attr)) {
        foreach ($attr as $key => $value) {
            $attr_string .= $key . '="' . $value . '" ';
        }
    }

    return trim($attr_string);
}


/**
 * Returns the opening HTML tag, including optional attributes.
 *
 * @param string $tagName The name of the tag (e.g., "div")
 * @param array $attr Associative array of attributes (optional)
 * @return string The complete opening tag
 */
function create_opnTag($tagName, $attr = array()) {
    $attr_string = def_tagAtrr($attr);

    if (!empty($attr_string)) {
        return "<" . $tagName . " " . $attr_string . ">";
    } else {
        return "<" . $tagName . ">";
    }
}


/**
 * Generates a full HTML element from tag name, content, and attributes.
 *
 * @param string $tagName The tag name (e.g., "p", "div")
 * @param string $tagConts The content inside the tag
 * @param array $attr Associative array of attributes (optional)
 * @return string The complete HTML element
 */
function def_tagContents($tagName, $tagConts, $attr = array()) {
    return create_opnTag($tagName, $attr) . $tagConts . create_clTag($tagName);
}


// Example usage
echo def_tagContents("p", "Hello world!", array("class" => "intro"));
// Output: <p class="intro">Hello world!</p>

?>

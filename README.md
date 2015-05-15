# Antiscrape

[![Build Status](https://travis-ci.org/sebastianwestberg/antiscrape.svg?branch=master)](https://travis-ci.org/sebastianwestberg/antiscrape)

## Example usage

```php
$scrambler = new Scrambler();
$scramble = $scrambler->scramble('Lorem ipsum.');

<style><?php echo CssFormatter::format($scramble); ?></style>
<p><?php echo HtmlFormatter::format($scramble); ?></p>
```

## Todo

- Scrap data should be generated by the scrambler (a linear serie of numbers are currently being used)
- The scrambler shouldn't specify the formatting directly. It should only specify whether the current element should be visible or not
- Come up with a better name for "Formatter"?
- Tidy up interfaces and come up with more convenient setters/getters names


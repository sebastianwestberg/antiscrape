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

 

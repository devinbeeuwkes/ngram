# PHP NGram

Generate n-grams for your string.

[![Build Status](https://img.shields.io/travis/DevinBeeuwkes/ngram/master.svg?style=flat-square)](https://travis-ci.org/DevinBeeuwkes/ngram)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/devinbeeuwkes/ngram/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/devinbeeuwkes/ngram/?branch=master)
[![Latest Version](https://img.shields.io/github/release/text-utils/n-gram.svg?style=flat-square)](https://packagist.org/packages/devinbeeuwkes/ngram)
[![Total Downloads](https://img.shields.io/packagist/dt/text-utils/n-gram.svg?style=flat-square)](https://packagist.org/packages/devinbeeuwkes/ngram)


## N-grams?

Why does this project exist? Come on, don't delete this part. Fill it.
Yes it's hard, but it's perhaps the most important part of the README.

As to why *this* project exist, it's to serve as a template for future open
source PHP projects. Of course, feel free to fork it and make your own recipe.

## Installation

```bash
composer install text-utils/n-gram
```

## Usage

You can start using the n-gram generator by instantiating a new `NGram` class:

```php
$n = 1;
$generator = new TextUtils\NGram($n, 'Foo');
$nGram = $generator->get(); // array ('F', 'o', 'o')
```

We also provide a static wrapper (the `for` method) and two helper functions (`bigram` and `trigram`) for quick usage

```php
$nGram = TextUtils\NGram::for('string', 3); // array ('str', 'tri', 'rin', 'ing')
...
$biGram = bigram('foo'); // array ('fo', 'oo')
$triGram = trigram('foobar'); // array ('foo', 'oob', 'oba', 'bar')
```

## Contributing

See the [CONTRIBUTING](CONTRIBUTING.md) file.

## License

MIT. Please refer to the [LICENSE](LICENSE) file in this repository.

[wiki]: http://en.wikipedia.org/wiki/N-gram
# cekBin

[![release](https://img.shields.io/github/release/dwisiswant0/cekBin.svg)](https://github.com/dwisiswant0/cekBin/releases/)
[![license](https://img.shields.io/github/license/dwisiswant0/cekBin.svg)](https://github.com/dwisiswant0/cekBin/blob/master/LICENSE)
[![contributions](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/dwisiswant0/cekBin/issues)
[![hits](http://hits.dwyl.com/dwisiswant0/cekBin.svg)](http://hits.dwyl.com/dwisiswant0/cekBin)

Free source to check, verify &amp; validate BIN (Bank Identification Number), credit, debit, charge or a prepaid card.

![cekBin Example](https://user-images.githubusercontent.com/25837540/35231228-cd82bae6-ffca-11e7-8d9e-dbc53c9032e0.png)

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Run Tests](#run-tests)
- [Contribute](#contribute)

---

### Installation

To install cekBin, simply:

    $ composer require dwisiswant0/cekBin

For latest commit version:

    $ composer require dwisiswant0/cekBin @dev

### Requirements

cekBin works with PHP 5.3, 5.4, 5.5, 5.6, 7.0, 7.1, and HHVM.

### Quick Start and Examples

Examples are available under [/examples](https://github.com/dwisiswant0/cekBin/tree/master/examples).

```php
require_once(dirname(__DIR__) . "/vendor/autoload.php");

$bin = "444444"; // first six digits of a credit card
$cekBin = new \dwisiswant0\cekBin();
$check = $cekBin->check($bin);
var_dump($check);
```

### Run Tests

To run tests:

    $ git clone https://github.com/dwisiswant0/cekBin.git
    $ cd cekBin/
    $ composer update
    $ cd examples/
    $ php check.php

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

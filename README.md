Cafelias (caf • alias)
======================

[![Latest Stable Version](https://img.shields.io/packagist/v/PHLAK/Cafelias.svg)](https://packagist.org/packages/PHLAK/Cafelias)
[![Total Downloads](https://img.shields.io/packagist/dt/PHLAK/Cafelias.svg)](https://packagist.org/packages/PHLAK/Cafelias)
[![Author](https://img.shields.io/badge/author-Chris%20Kankiewicz-blue.svg)](https://www.ChrisKankiewicz.com)
[![License](https://img.shields.io/packagist/l/PHLAK/Cafelias.svg)](https://packagist.org/packages/PHLAK/Cafelias)
[![Build Status](https://img.shields.io/travis/PHLAK/Cafelias.svg)](https://travis-ci.org/PHLAK/Cafelias)
[![StyleCI](https://styleci.io/repos/95623990/shield?branch=master&style=flat)](https://styleci.io/repos/95623990)

Randomly generated coffee slugs -- by, [Chris Kankiewicz](https://www.ChrisKankiewicz.com) ([@PHLAK](https://twitter.com/PHLAK))

Introduction
------------

...

#### Like this project?

[![Join the community on Spectrum](https://img.shields.io/badge/Join_the_community-PHLAKNET-7a15fe.svg)](https://spectrum.chat/phlaknet)
[![Become a Patron](https://img.shields.io/badge/Become_a-Patron-f96854.svg)](https://patreon.com/PHLAK)
[![One-time Donation](https://img.shields.io/badge/Make_a-Donation-006bb6.svg)](https://paypal.me/ChrisKankiewicz)

Requirements
------------

  - [PHP](https://php.net) >= 7.0

Install with Composer
---------------------

```bash
composer require phlak/cafelias
```
### Usage

```php
use PHLAK\Cafelias;

$codename = new Cafelias\Codename();
// or
$codename = Cafelias\Codename::make();
// or
$codename = cafelias();

echo $codename; // Something like 'vanilla-cortado'
```

### Example Codenames

```
coconut-frappuccino
mint-coffee
marshmallow-macchiato
mocha-cortado
grande-irish-coffee
gingerbread-frappe
pumpkin-spice-cappuccino
mint-iced-coffee
peanut-butter-latte
tall-iced-coffee
```

Changelog
---------

A list of changes can be found on the [GitHub Releases](https://github.com/PHLAK/Cafelias/releases) page.

Troubleshooting
---------------

For general help and support join our [Spectrum community](https://spectrum.chat/phlaknet).

Please report bugs to the [GitHub Issue Tracker](https://github.com/PHLAK/Cafelias/issues).

Copyright
---------

This project is licensed under the [MIT License](https://github.com/PHLAK/Cafelias/blob/master/LICENSE).

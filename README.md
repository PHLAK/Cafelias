Cafelias (caf • alias)
======================

[![Latest Stable Version](https://img.shields.io/packagist/v/PHLAK/Cafelias.svg?style=flat-square)](https://packagist.org/packages/PHLAK/Cafelias)
[![Total Downloads](https://img.shields.io/packagist/dt/PHLAK/Cafelias.svg?style=flat-square)](https://packagist.org/packages/PHLAK/Cafelias)
[![License](https://img.shields.io/packagist/l/PHLAK/Cafelias.svg?style=flat-square)](https://packagist.org/packages/PHLAK/Cafelias)
[![Build Status](https://img.shields.io/travis/PHLAK/Cafelias.svg?style=flat-square)](https://travis-ci.org/PHLAK/Cafelias)
[![StyleCI](https://styleci.io/repos/95623990/shield?branch=master&style=flat-square)](https://styleci.io/repos/95623990)

<a href="https://spectrum.chat/phlaknet"><img src="https://img.shields.io/badge/Join_the-Community-7b16ff.svg?style=flat-square" alt="Join our Community"></a>
<a href="https://github.com/users/PHLAK/sponsorship"><img src="https://img.shields.io/badge/Become_a-Sponsor-cc4195.svg?style=flat-square" alt="Become a Sponsor"></a>
<a href="https://paypal.me/ChrisKankiewicz"><img src="https://img.shields.io/badge/Make_a-Donation-006bb6.svg?style=flat-square" alt="One-time Donation"></a>

Randomly generated coffee slugs -- by, [Chris Kankiewicz](https://www.ChrisKankiewicz.com) ([@PHLAK](https://twitter.com/PHLAK))

---

Requirements
------------

  - [PHP](https://php.net) >= 8.0

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

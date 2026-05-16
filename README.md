<div align="center">

<img src="https://raw.githubusercontent.com/twitter/twemoji/master/assets/svg/2b06.svg" width="100" alt="Scroll to Top">

# `gboquizosanchez/filament-scroll-to-top`

**Scroll to top on pagination change for Filament panels**

[![Latest Stable Version](https://img.shields.io/packagist/v/gboquizosanchez/filament-scroll-to-top.svg)](https://packagist.org/packages/gboquizosanchez/filament-scroll-to-top)
[![Total Downloads](https://img.shields.io/packagist/dt/gboquizosanchez/filament-scroll-to-top.svg)](https://packagist.org/packages/gboquizosanchez/filament-scroll-to-top)
[![PHP](https://img.shields.io/badge/PHP-%5E8.2-777BB4?logo=php&logoColor=white)](https://packagist.org/packages/gboquizosanchez/filament-scroll-to-top)
[![License: MIT](https://img.shields.io/badge/License-MIT-22C55E.svg)](LICENSE.md)
[![Tests](https://img.shields.io/badge/Tests-Pest%20v4-9C27B0)](https://pestphp.com/)

---

*Automatically scroll the page back to the top whenever a user navigates to a new table page in Filament 4 and 5.*

</div>

---

## Overview

When a user changes pages in a Filament table, the scroll position stays where it was — forcing them to manually scroll back up. This plugin adds a smooth scroll-to-top behaviour on every pagination change, with zero configuration.

---

## Version compatibility

| Plugin | Filament | PHP    |
|--------|----------|--------|
| 1.x    | 4.x – 5.x | ^8.2  |

---

## 📦 Installation

```bash
composer require gboquizosanchez/filament-scroll-to-top
```

Register the plugin in your panel provider (`app/Providers/Filament/AdminPanelProvider.php`):

```php
use Boquizo\FilamentScrollToTop\ScrollToTopPlugin;

->plugins([
    ScrollToTopPlugin::make(),
])
```

---

## 🔧 Usage

Add the `ScrollToTop` trait to any `ListRecords` page or `RelationManager` that should scroll on pagination:

```php
use Boquizo\FilamentScrollToTop\Traits\ScrollToTop;
use Filament\Resources\Pages\ListRecords;

final class ListGames extends ListRecords
{
    use ScrollToTop;

    // ...
}
```

```php
use Boquizo\FilamentScrollToTop\Traits\ScrollToTop;
use Filament\Resources\RelationManagers\RelationManager;

final class GamesRelationManager extends RelationManager
{
    use ScrollToTop;

    // ...
}
```

That's it. No further configuration needed.

---

## 🧪 Testing

```bash
composer test
```

---

## Contributing

Contributions are welcome!

- 🐛 **Report bugs** via [GitHub Issues](https://github.com/gboquizosanchez/filament-scroll-to-top/issues/new)
- 💡 **Suggest features** or improvements
- 🔧 **Submit pull requests** with fixes or enhancements

---

## Credits

- **Author**: [Germán Boquizo Sánchez](mailto:germanboquizosanchez@gmail.com)

---

## 📄 License

This package is open-source software licensed under the [MIT License](LICENSE.md).

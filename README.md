# Kinetics Submittal Export

A Contao 5 bundle for the Kinetics Noise Control submittal export feature.

## Features

- Restores the `{{request_token}}` insert tag for use in custom HTML content elements
- Outputs a valid Contao CSRF token, allowing legacy forms in HTML content elements to submit correctly

## Requirements

- PHP 8.2+
- Contao 5.3+

## Installation

```bash
composer require bright-cloud-studio/kinetics-submittal-export
```

## Usage

Use `{{request_token}}` in any Contao HTML content element to output the CSRF token:

```html
<form method="post" action="">
    <input type="hidden" name="REQUEST_TOKEN" value="{{request_token}}">
    ...
</form>
```

## License

LGPL-3.0-or-later
